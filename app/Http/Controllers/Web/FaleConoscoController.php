<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\Web\FaleConosco as WebFaleConosco;
use App\Mail\Web\FaleConoscoMail;
use App\Models\Web\FaleConosco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use stdClass;

class FaleConoscoController extends Controller
{
    public function store(Request $request)
    {  
        $request->validate([
            'name' => 'required|max:191',
            'email' => 'email|required|max:191',
            'companyname' => 'nullable|max:191',
            'subject' => 'required|max:191',
            'message' => 'required',
            'aceite' => 'required|max:191',
        ]);
        

        FaleConosco::create($request->all());

        $contato = new stdClass;
        $contato->name = "Leonardo Augusto Soares da Silva";
        $contato->to = ['leoaugusto45@gmail.com', 'leonardo.augusto@scservicos.com.br'];
        $contato->url = "https://uniplay.com.br";

        // Mail::send('mail.web.faleconoscoemail', ['nome' => 'leonardo'], function($message) {
        //     $message->from("contato@unitbox.com.br", 'Unitbox.com.br');
        //     $message->subject('teste');
        //     $message->to('leoaugusto45@gmail.com');
        // });

        Mail::send(new FaleConoscoMail($contato));

        return response()->json([
            'status' => 'success', 
            'subject' => 'Mensagem enviada com sucesso!', 
            'message' => 'Em breve entraremo em contato. Obrigado!'], 200);
    }

    public function index() 
    {
        $contato = new stdClass;
        $contato->name = "Leonardo Augusto Soares da Silva";
        $contato->to = 'leo54_gunit@hotmail.com';
        $contato->cc = ['leoaugusto45@gmail.com', 'leonardo.augusto@scservicos.com.br'];
        $contato->url = "https://uniplay.com.br";


        //$to = ;

        Mail::send('mail.web.faleconoscoemail', ['nome' => 'leonardo'], function($message) {
            $message->from("contato@unitbox.com.br", 'Unitbox.com.br');
            $message->subject('teste');
            $message->to([
                ['email' => 'leoaugusto45@gmail.com', 'name' => 'User One'], 
                ['email' => 'carlosmedia24@gmail.com', 'name' => 'User Two']
            ]);
            $message->cc(["leoaugusto45@gmail.com", "leonardo.augusto@scservicos.com.br"]);
        });


        // Mail::to('leoaugusto45@gmail.com')
        // //->cc($ccRecipients)
        // ->send(new FaleConoscoMail($contato));


        //Mail::send(new FaleConoscoMail($contato));

        dd("mensagem Enviada"); 

        //return new FaleConoscoMail($contato);

    }
}
