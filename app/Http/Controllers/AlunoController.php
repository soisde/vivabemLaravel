<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {

        return view('site.dashboard.aluno.index');
    }
}
