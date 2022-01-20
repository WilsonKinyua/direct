<?php

namespace Tests\Feature\Http\Controllers;

use App\Events\NewShowroom;
use App\Jobs\SyncMedia;
use App\Mail\CreateNewShowroomAdmin;
use App\Models\Showroom;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Queue;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ShowroomController
 */
class ShowroomControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_behaves_as_expected()
    {
        $showrooms = Showroom::factory()->count(3)->create();

        $response = $this->get(route('showroom.index'));
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ShowroomController::class,
            'store',
            \App\Http\Requests\ShowroomStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $location = $this->faker->word;
        $phone_number = $this->faker->phoneNumber;
        $email = $this->faker->safeEmail;
        $admin_name = $this->faker->randomLetter;
        $admin_email = $this->faker->randomLetter;

        Mail::fake();
        Queue::fake();
        Event::fake();

        $response = $this->post(route('showroom.store'), [
            'name' => $name,
            'location' => $location,
            'phone_number' => $phone_number,
            'email' => $email,
            'admin_name' => $admin_name,
            'admin_email' => $admin_email,
        ]);

        $showrooms = Showroom::query()
            ->where('name', $name)
            ->where('location', $location)
            ->where('phone_number', $phone_number)
            ->where('email', $email)
            ->where('admin_name', $admin_name)
            ->where('admin_email', $admin_email)
            ->get();
        $this->assertCount(1, $showrooms);
        $showroom = $showrooms->first();

        $response->assertRedirect(route('showroom.index'));
        $response->assertSessionHas('showroom.name', $showroom->name);

        Mail::assertSent(CreateNewShowroomAdmin::class, function ($mail) use ($showroom) {
            return $mail->hasTo($showroom->name->email->admin_name->admin_email) && $mail->showroom->is($showroom);
        });
        Queue::assertPushed(SyncMedia::class, function ($job) use ($showroom) {
            return $job->showroom->is($showroom);
        });
        Event::assertDispatched(NewShowroom::class, function ($event) use ($showroom) {
            return $event->showroom->is($showroom);
        });
    }
}
