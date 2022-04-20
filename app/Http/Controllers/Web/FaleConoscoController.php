<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\Web\FaleConosco as WebFaleConosco;
use App\Mail\Web\FaleConoscoMail;
use App\Models\Web\FaleConosco;
use App\Models\Web\Interacao;
use Curl\Curl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use stdClass;

class FaleConoscoController extends Controller
{
    public function store()
    {  
        $contador = 1000;
        $access_token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvaW50ZWdyYS5zY3NlcnZpY29zLmFwcFwvYXBpXC9hdXRoXC9sb2dpbiIsImlhdCI6MTY1MDQ4MjY0MiwiZXhwIjoxMDE2MjgxMTMxNjIsIm5iZiI6MTY1MDQ4MjY0MiwianRpIjoiUWtrN05qa3lyOHVNaFpwaSIsInN1YiI6MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.waGbwS6vXSBL1AvNvbVC799dH1WAZNueXsbOvFyQ_Sw"; 
        $response = "";

        while ($contador >= 0) {

            $curl = new Curl();
            $curl->setHeader('Authorization', 'Bearer ' . $access_token);
            $curl->setHeader('tenant_id', '3810cb19-4033-44b6-bbdb-7c37e07403b8');
            $curl->post('https://integra.scservicos.app/api/v1/fila/interacao', [
                "remetente"=> "5511962690000",
                "destinatario"=> "+5511982226852",
                "template_name_id"=> "teste",
                "campanha_id"=> 1,
                "canal_id"=> 1,
                "params" => [
                    "var_1" => "Leonardo da Silva"
                ]
            ]);

            if ($curl->error) {
                // $response->status = "danger";
                // $response->message = (string)$curl->errorMessage;
                // $response->data = $curl->response;

                dd($curl->errorMessage, $curl->errorCode, $curl->response);

            } else {
                Log::info($contador);
            }

            $contador --;
        }

        dd("saiu");
    }

}
