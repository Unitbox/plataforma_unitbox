<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Web\FaleConosco;
use Illuminate\Http\Request;

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

        return response()->json([
            'status' => 'success', 
            'subject' => 'Mensagem enviada com sucesso!', 
            'message' => 'Nós respondemos a quase todos dentro de um dia útil e estamos animados com seu contato.'], 200);
    }
}
