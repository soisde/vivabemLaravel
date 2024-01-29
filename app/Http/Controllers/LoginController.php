<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
     public function index(){
        return view('site.login');
    }

    public function autenticar(Request $request)
    {


        $regras = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $msg = [

            'email.required' => 'O campo de email é obrigatório',
            'email.email' => 'O e-mail informado não é valido',
            'password.required' => 'O campo de senha é obrigatório'

        ];

        $request->validate($regras, $msg);

            print_r($request->all());
    }
}
