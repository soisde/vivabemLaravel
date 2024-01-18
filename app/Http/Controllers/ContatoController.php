<?php

namespace App\Http\Controllers;

// use Dotenv\Validator;

use App\Mail\ContatoEmail;
use App\Models\Contato;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class ContatoController extends Controller
{
    public function index(){
        return view('site.contato');
    }

    public function salvarNoBanco(Request $request){

        $dados = $request->json()->all();

        $validarDados = Validator::make($dados, [

            'nomeContato' => 'required|max:100',
            'emailContato' => 'required|email|max:100',
            'assuntoContato' => 'required|max:100',
            'mensContato' => 'required',

        ])->validate();

        $contato = Contato::create($validarDados);

        // por email

        Mail::to('cybercompany@smpsistema.com')->send(new ContatoEmail($contato));

        return response()->json(['sucess' => 'Email registrado com sucesso!']);


    }

}
