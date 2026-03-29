<?php

namespace App\Listeners;

use App\Events\MessageEvent;
use App\Notifications\AdminNotification;
use App\Notifications\ClientNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Log;

class Messagelistener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(MessageEvent $event): void
    {
        // try {
            // send notification to the admin 
            Notification::route("mail", "usmanadams551@gmail.com")->notify(new AdminNotification($event->validated));

            // send notification to the user
            Notification::route("mail", $event->validated['email'])->notify(new ClientNotification($event->validated));
        // } catch (\Exception $e) {
        //     Log::error("Email sending failed: " . $e->getMessage());
        // }
    }
}
