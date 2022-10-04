<?php

namespace App\Http\Controllers;
use App\Http\Request\SessaoRequest;
use Illuminate\Http\Request;

use App\Models\sessao;


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
    public function store(Request $request){
        $nova_sessao = $request->all();
        sessao::create($nova_sessao);

        return redirect('sessao');
    }
}
