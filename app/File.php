<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use stdClass;

class File extends Model
{
    public function upload(Request $request, string $savePath): stdClass
    {
        $response = new stdClass;
        $imagePath = $request->file('files')[0];
        $file = $request->all()['files'][0];

        if (!$imagePath) {
            $response->status = "danger";
            $response->message =  'Whoops, arquivo não encontrado.';
            return $response;
        }
        
        $nomeArquivo = \Carbon\Carbon::now()->timestamp;
        $path = $file->storeAs($savePath, $nomeArquivo . '.' . $imagePath->extension(), 'public');
        
        $testFile = Storage::disk('public')->exists($path);

        if(!$testFile) {
            $response->status = "danger";
            $response->message =  "Whoops, ocorreu um erro desconhecido ao fazer upload para a galeria de arquivos";
          
            return $response;
        }

        $pathComplete = asset('/storage/'. $path);
   
        $response->status = "success";
        $response->message =  "Upload realizado com sucesso.";
        $response->pathComplete = $pathComplete;
        $response->path = $path;

        return $response;
    }

    public function deleteFile(string $path): stdClass
    {

        $response = new stdClass;

        if(!Storage::exists($path)) {
            $response->status = "danger";
            $response->message= "Arquivo escolhido não existe, por favor escolha outro arquivo e tente novamente.";
          
            return $response;
        }else {
           $fileDelete =  Storage::delete($path);

           if(!$fileDelete) {
            $response->status = "danger";
            $response->message= "Whoops, ocorreu um erro ao deletar arquivo, por favor tente novamente mais tarde.";
          
            return $response;
           }

           $conteudo = Conteudo::where('path', $path)->first();

           if (!$conteudo) {
               $response->status = "danger";
               $response->message= "Whoops, ocorreu um erro ao deletar arquivo do Conteúdo, por favor tente novamente mais tarde.";

               return $response;
           }

           $conteudo->delete();

           $response->status = "success";
           $response->message= "Arquivo removido com sucesso.";

           return $response;
        }
    }
}
