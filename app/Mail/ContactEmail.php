<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('grooth@grooth.com')
                    ->view('client.email.index')
                    ->with(
                        [
                            'nama' => 'test',
                            'phone' => '3920402',
                            'email' => 'test',
                            'detail' => 'tesawdadawdadawdawdat',
                        ]);
    }
}
