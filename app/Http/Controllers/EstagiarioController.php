<?php

namespace App\Http\Controllers;

use App\Models\ComprovanteMatricula;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EstagiarioController extends Controller
{

    //Método responsável por fazer o upload do comprovante de matrícula do aluno
    public function upload(Request $request){

        $file = $request->file('documento');

        $userId = $request->get('userId');

        $storagePath = storage_path().'/comprovantes/'.$userId.'/';
        $fileName = $file->getClientOriginalName();

        $comp = ComprovanteMatricula::where('user_id', $userId);

        foreach ($comp as $c){
            unlink($storagePath.$c['arquivo']);
        }

        $file->move($storagePath, $fileName);

        $comprovante = new ComprovanteMatricula();
        $comprovante->arquivo = $fileName;

        $user = User::find($userId);
        $user->comprovantematricula()->save($comprovante);

    }

    //Funçaõ responsável por visualizar o atestado de matricula anexado
    public function view($userId, $fileId){

        $file = ComprovanteMatricula::find($fileId);

        $storagePath = storage_path().'/comprovantes/'.$userId.'/';

        return \Response::download($storagePath.$file->arquivo);

    }

    //Funçaõ responsável por remover o atestado de matricula anexado
    public function destroy($userId, $fileId){

        $file = ComprovanteMatricula::find($fileId);

        $storagePath = storage_path().'/comprovantes/'.$userId.'/';

        $file->delete();

        unlink($storagePath.$file->arquivo);

        return redirect()->back();

    }
    //
}
