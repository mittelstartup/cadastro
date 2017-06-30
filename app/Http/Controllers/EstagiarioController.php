<?php

namespace App\Http\Controllers;

use App\Models\ComprovanteMatricula;
use App\Models\Infos;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EstagiarioController extends Controller
{

    public function infos(Request $request){

        $curso = $request->get('curso');
        $instituicao = $request->get('instituicao');

        $user = User::find(Auth::user()->getAuthIdentifier());
        if(count($info = Infos::where('user_id', $user->id)->get()) > 0){
            $id= $info[0]->id;
            $info = Infos::find($id);
            $info->curso = $curso;
            $info->instituicao = $instituicao;
            $info->save();
        }else{
            $info = new Infos();
            $info->curso = $curso;
            $info->instituicao = $instituicao;
            $user->infos()->save($info);
        }

        Session::flash('message', "Informações salvas com sucesso");
        return Redirect::back();

    }

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
