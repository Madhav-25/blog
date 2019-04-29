<?php

namespace App\Listeners;

use App\Events\SendEmailEvent;
use App\Jobs\SendEmailJob;
use Carbon\Carbon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailToAdmin
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
     * @param  SendEmailEvent  $event
     * @return void
     */
    public function handle(SendEmailEvent $event)
    {
        $job = new SendEmailJob('bypureddymadhav@gmail.com',$event->username);
        $job->delay(Carbon::now()->addSeconds(5));
        dispatch($job);
    }
}
