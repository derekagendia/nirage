<?php

namespace App\Mail;

use App\Models\Apartement;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VisiteRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user = [];
    public $apartment;

    /**
     * Create a new message instance.
     *
     * @param $user
     * @param Apartement $apartment
     */
    public function __construct($user, Apartement $apartment)
    {
        $this->user = $user;
        $this->apartment = $apartment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.visite-request');
    }
}
