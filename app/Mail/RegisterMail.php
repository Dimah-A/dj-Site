<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $password;
    public $numero;
    public $adresse;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name =$data['name'];
        $this->email =$data['email'];
        $this->password =$data['password'];
        $this->numero =$data['numero'];
        $this->adresse =$data['adresse'];

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('Dimah.assma@gmail.com')->markdown('mail.templateMail',compact('name','email','password','numero','adresse'));
    }
}
