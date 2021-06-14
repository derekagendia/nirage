<?php

namespace App\Listeners;

use App\Mail\VisiteRequestMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class VisitRequestListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to($event->user['email'])->send(new VisiteRequestMail($event->user, $event->apartment));
    }
}
