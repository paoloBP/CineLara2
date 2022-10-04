<?php

namespace App\Http\Controllers;
use App\Http\Request\AtorRequest;
use Illuminate\Http\Request;
use App\Models\Ator;

class AtoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $atores = Ator::all();
        return view('atores.index', ['atores'=> $atores]);
    }

    public function create() {
        return view('atores.create');
    }
    public function store(Request $request){
        $novo_ator = $request->all();
        Ator::create($novo_ator);

        return redirect('atores');
    }
}
