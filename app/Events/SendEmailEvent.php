<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Facades\Auth;

class SendEmailEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $userEmailId;
    public $username;
    public $title;
    public $body;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->userEmailId = Auth::user()->email;
        $this->username = Auth::user()->name;
        $this->title = $request->title;
        $this->body = $request->body;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
