<?php

namespace App\Listeners;

use App\Events\SendEmailEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendEmail
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
     * @param  SendEmailEvent $event
     * @return void
     */
    public function handle(SendEmailEvent $event)
    {
        $mail = $event->mail;
        Mail::send($mail->template, compact('mail'), function ($message) use ($mail) {
            $message
                ->from($mail->sender['email'], $mail->sender['name'])
                ->to($mail->recipient['email'], $mail->recipient['name'])
                ->subject($mail->subject['recipient']);
        });
    }
}
