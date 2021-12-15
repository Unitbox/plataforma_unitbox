<?php

namespace App\Mail\Web;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use stdClass;

class FaleConoscoMail extends Mailable
{
    use Queueable, SerializesModels;

    private $user;

    public function __construct(stdClass $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $this->subject('Teste');
        $this->to('leoaugusto45@gmail.com');

        return $this->markdown('mail.web.faleconoscoemail', ['name' => $this->user->name]);
    }
}
