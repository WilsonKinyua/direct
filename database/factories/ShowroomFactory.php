<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Showroom;

class ShowroomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Showroom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'location' => $this->faker->regexify('[A-Za-z0-9]{500}'),
            'map_link' => $this->faker->text,
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'web_url' => $this->faker->text,
            'admin_name' => $this->faker->randomLetter,
            'admin_email' => $this->faker->randomLetter,
        ];
    }
}
