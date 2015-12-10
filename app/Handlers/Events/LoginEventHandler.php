<?php

namespace App\Handlers\Events;

use App\Events\UserLogin;
use App\Visit;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LoginEventHandler
{
    /**
     * Create the event handler.
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
     * @param  UserLogin  $event
     * @return void
     */
    public function handle(UserLogin $event)
    {
        Visit::create([
            'user_id' => $event->user->id,
            'client_ip' => $event->request->getClientIp(),
            'visited' => new \DateTime()
        ]);
    }
}
