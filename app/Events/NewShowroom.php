<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class NewShowroom
{
    use SerializesModels;

    public $showroom;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($showroom)
    {
        $this->showroom = $showroom;
    }
}
