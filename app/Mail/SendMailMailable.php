<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $username;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username)
    {
        $this->username = $username;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if(!is_null($this->username)){
            return $this->view('posts.adminemail')->with('username',$this->username);
        }
        else {
            return $this->view('posts.viewposts');
        }
    }
}
