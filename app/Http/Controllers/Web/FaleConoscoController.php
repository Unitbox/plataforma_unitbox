<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaleConoscoController extends Controller
{
    public function store(Request $request)
    {  

        $validatedData = $request->validate([
            'name' => 'required|max:191',
            'email' => 'email|required|max:191',
            'companyname' => 'nullable|max:191',
            'subject' => 'required|max:191',
            'message' => 'required',
            'aceite' => 'required|max:191',
        ]);

        

        dd("Entrou aqui");

    }
}
