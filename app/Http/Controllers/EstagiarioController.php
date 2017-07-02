<?php

namespace App\Http\Controllers;

use App\Models\ComprovanteMatricula;
use App\Models\Curriculo;
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
        $telefone = $request->get('telefone');

        $user = User::find(Auth::user()->getAuthIdentifier());
        if(count($info = Infos::where('user_id', $user->id)->get()) > 0){
            $id = $info[0]->id;
            $info = Infos::find($id);
            $info->curso = $curso;
            $info->instituicao = $instituicao;
            $info->telefone = $telefone;
            $info->save();
        }else{
            $info = new Infos();
            $info->curso = $curso;
            $info->instituicao = $instituicao;
            $info->telefone = $telefone;
            $user->infos()->save($info);
        }

        Session::flash('success', "Informações salvas com sucesso");
        return Redirect::back();

    }

    //Método responsável por fazer o upload do comprovante de matrícula do aluno
    public function upload(Request $request){

        $file = $request->file('documento');
        if($file->getClientSize() < 512000){

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
            echo '[{"status":"succes"}]';

        }else{
            echo '[{"status":"error", "message": "Tamanho do arquivo excede o permitido!" }]';
        }

    }

    //Método responsável por fazer o upload do currículo
    public function curriculo(Request $request){

        $file = $request->file('documento');

        $userId = $request->get('userId');

        $storagePath = storage_path().'/curriculos/'.$userId.'/';
        $fileName = $file->getClientOriginalName();

        $comp = Curriculo::where('user_id', $userId);

        foreach ($comp as $c){
            unlink($storagePath.$c['arquivo']);
        }

        $file->move($storagePath, $fileName);

        $curriculo = new Curriculo();
        $curriculo->arquivo = $fileName;

        $user = User::find($userId);
        $user->comprovantematricula()->save($curriculo);

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

    //Funçaõ responsável por visualizar o atestado de matricula anexado
    public function viewcurriculo($userId, $fileId){

        $file = Curriculo::find($fileId);

        $storagePath = storage_path().'/curriculos/'.$userId.'/';

        return \Response::download($storagePath.$file->arquivo);

    }

    //Funçaõ responsável por remover o curriculo anexado
    public function destroycurriculo($userId, $fileId){

        $file = Curriculo::find($fileId);

        $storagePath = storage_path().'/curriculos/'.$userId.'/';

        $file->delete();

        unlink($storagePath.$file->arquivo);

        return redirect()->back();

    }
    //
}
