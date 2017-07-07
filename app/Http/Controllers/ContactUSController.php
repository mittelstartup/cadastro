<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Session;

class ContactUSController extends Controller
{
    public function contactUS()

    {
        return view('contactUS');
    }


    public function contactUSPost(Request $request)

    {
        $dataForm = $request->except('_token');
        $this->validate($request, [
            'contact_name' => 'required',
            'contact_email' => 'required|email',
            'contact_phone' => 'required',
            'contact_message' => 'required'
        ]);

        ContactUS::create($request->all());
        Session::flash('alert-success', "Obrigado por entrar em contato, em breve você receberá uma resposta através do email informado.");
        return redirect('/#contact');

    }
}
