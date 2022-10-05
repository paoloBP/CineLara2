<?php

namespace App\Http\Controllers;

use App\Models\filmes;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $filmes = Filmes::all();
            return view('filmes.index', ['filmes'=>$filmes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filmes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novo_filme = $request->all();
        Filmes::create($novo_filme);
        return redirect('filmes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\filmes  $filmes
     * @return \Illuminate\Http\Response
     */
    public function show(filmes $filmes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\filmes  $filmes
     * @return \Illuminate\Http\Response
     */
    public function edit(filmes $filmes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\filmes  $filmes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, filmes $filmes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\filmes  $filmes
     * @return \Illuminate\Http\Response
     */
    public function destroy(filmes $filmes)
    {
        //
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
