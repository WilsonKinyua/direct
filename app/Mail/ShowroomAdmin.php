<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ShowroomAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $showroom;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($showroom)
    {
        $this->showroom = $showroom;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Account Activation - Direct.co.ke')->view('emails.showroom-admin');
    }
}
