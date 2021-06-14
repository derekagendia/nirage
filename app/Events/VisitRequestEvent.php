<?php

namespace App\Events;

use App\Models\Apartement;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class VisitRequestEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public  $user = [];
    public $apartment;
    /**
     * Create a new event instance.
     *
     * @param $user
     * @param Apartement $apartment
     */
    public function __construct(array $user,Apartement $apartment)
    {
        $this->user = $user;
        $this->apartment = $apartment;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
