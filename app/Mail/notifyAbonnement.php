<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class notifyAbonnement extends Mailable
{
    use Queueable, SerializesModels;

    public User $user;
    public $type = "";
    public $objet = "";
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $type, $objet)
    {
        $this->user = $user;
        $this->type = $type;
        $this->objet = $objet;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.notify')->subject($this->objet);
    }
}
