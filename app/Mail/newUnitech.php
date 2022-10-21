<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class newUnitech extends Mailable
{
    use Queueable, SerializesModels;

    private User $user;
    private $dados;
    private $metodo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $dados, $metodo)
    {
        $this->user = $user;
        $this->dados = $dados;
        $this->metodo = $metodo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject("$this->metodo - Nova Inscrição");
        $this->to($this->user->email, $this->user->name);

        return $this->markdown('emails.formulario', [
            'user' => $this->user,
            'dados' => $this->dados,
            'metodo' => $this->metodo,
        ]);
    }
}
