<?php

namespace App\Mail\Web;

use App\Models\Web\FaleConosco;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use stdClass;

class FaleConoscoMail extends Mailable
{
    use Queueable, SerializesModels;

    private $contato;

    public function __construct(stdClass $data)
    {
        $this->contato = $data;
    }
    
    public function build()
    {
 
        $this->subject('Nova Mensagem do Site');
        // $this->to('leonardo.augusto@scservicos.com.br');
        // $this->cc(['leoaugusto45@gmail.com', 'leonardo.augusto@scservicos.com.br']);

        return $this->markdown('mail.web.faleconoscoemail', [
            'url' => $this->contato->url,
           
        ]);
    }
}
