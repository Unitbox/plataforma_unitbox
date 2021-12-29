<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Request;

class ReCAPTCHAv3 implements Rule
{

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
        $response =  $this->getScore($response) >= config('recaptcha.v3.minimum_score');

        return $response;
    }
    private function getScore($response)
    {
        try {
            $score = \GuzzleHttp\json_decode($response->getBody(), true)['score'];
        } catch (\Exception $e) {
            //throw $th;
            $score = 0;
        }
        return $score;
    }

    public function message()
    {
        return 'Whoops, ocorreu um erro ao enviar os dados do formulário. Por favor recarregue a página e tente novamente. 
        Error: Failed on reCAPTCHA verification.';
    }
}
