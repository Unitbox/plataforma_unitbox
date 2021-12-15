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
        $contato->url = "https://uniplay.com.br";

        Mail::to('leoaugusto45@gmail.com')
        //->cc($copia)
        ->send(new FaleConoscoMail($contato));

        return response()->json([
            'status' => 'success', 
            'subject' => 'Mensagem enviada com sucesso!', 
            'message' => 'Em breve entraremo em contato. Obrigado!'], 200);
    }

    public function index() 
    {
        

    }
}
