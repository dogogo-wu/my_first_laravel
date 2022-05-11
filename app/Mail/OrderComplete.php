<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderComplete extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->mydata = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $myorder = $this->mydata;
        return $this->subject($myorder['subject'])->view('mail.order_complete', compact('myorder'));
    }
}
