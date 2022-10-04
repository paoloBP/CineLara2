<?php

namespace App\Http\Controllers;

use App\Models\sessao;
use App\Http\Request\SessaoResquest;

class SessaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $sessao = sessao::all();
        return view('sessao.index', ['sessao'=> $sessao]);
    }

    public function create() {
        return view('sessao.create');
    }
    public function store(SessaoResquest $request){
        $nova_sessao = $request->all();
        sessao::create($nova_sessao);

        return redirect('sessao');
    }
}
