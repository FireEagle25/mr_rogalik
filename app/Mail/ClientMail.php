<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ClientMail extends Mailable
{
    use Queueable, SerializesModels;

    private $text;
    private $email;
    private $phone;
    private $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $phone, $email, $text)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.client_message')
            ->with([
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'text' => $this->text
            ]);
    }
}
