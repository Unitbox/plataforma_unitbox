<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function storeImage(Request $request)
    {
        $request->validate([
            'files.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = new File();
        $uploadFile = $file->upload($request, "poc");

        if($uploadFile->status == "success")
        {
            $url_array_image = array (
                'url' => "http://127.0.0.1:8000/storage/poc/1632609214.png"
            );

            $data = [
                'message' => 'Upload realizado com sucesso!', 
                'files' => [$url_array_image]
            ];

            return response()->json($data);
        }
        else {
            $data = [
                'status' => 'fail',
                'message' => $uploadFile->message,
                'data' => ''
            ];
            return response()->json($data);
        }
    }

    public function delete(Request $request)
    {

        dd($request->file);

    //        $uploadFile = $file->deleteFile($file);

        //return response()->json($uploadFile);
    }
}
