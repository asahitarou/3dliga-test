<?php

namespace App\Events;

use App\User;
use App\Events\Event;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserLogin extends Event
{
    use SerializesModels;

    public $user;

    public $request;

    /**
     * Create a new event instance.
     *
     * @param User $user
     * @param Request $request
     * @return void
     */
    public function __construct(User $user, Request $request)
    {
        $this->user = $user;
        $this->request = $request;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
