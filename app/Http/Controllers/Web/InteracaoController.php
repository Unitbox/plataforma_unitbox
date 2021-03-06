<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\Web\FaleConoscoMail;
use App\Models\Web\Interacao;
use App\Rules\ReCAPTCHAv3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use stdClass;

class InteracaoController extends Controller
{
   
    public function index()
    {
        //
    }

 
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:191',
            'email' => 'email|required|max:191',
            'company_name' => 'nullable|max:191',
            'subject' => 'required|max:191',
            'message' => 'required',
            'aceite' => 'required|max:191',
            'grecaptcha' => ['required', new ReCAPTCHAv3]
        ]);

        Interacao::create($request->all());

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


    public function passes($attribute, $value)
    {
        $client = new Client();
        try {
            $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => [
                    'secret' => config('recaptcha.v3.private_key'),
                    'response' => $value,
                    'remoteip' => Request::ip(),
                ],
            ]);
        } catch (\GuzzleHttp\Exception\BadResponseException $e) {
            return false;
        }
        return $this->getScore($response) >= config('recaptcha.v3.minimum_score');
    }
    private function getScore($response)
    {
        return \GuzzleHttp\json_decode($response->getBody(), true)['score'];
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
