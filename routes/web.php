<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'atores', 'where'=>['id'=>'[0-9+']], function(){
    Route::get('', ['as'=> 'atores', 'uses'=>'\App\Http\Controllers\AtoresController::class@index']);
    Route::get('create', ['as'=> 'atores/create', 'uses'=>'\App\Http\Controllers\AtoresController::class@Create']);
    Route::post('store', ['as'=> 'atores/store', 'uses'=>'\App\Http\Controllers\AtoresController::class@store']);
    Route::get('{id}/destroy', ['as'=> 'atores/destroy', 'uses'=>'\App\Http\Controllers\AtoresController::class@destroy']);
    Route::get('{id}/edit', ['as'=> 'atores/edit', 'uses'=>'\App\Http\Controllers\AtoresController::class@edit']);
    Route::put('{id}/update', ['as'=> 'atores/update', 'uses'=>'\App\Http\Controllers\AtoresController::class@update']);
});

Route::group(['prefix'=>'filmes', 'where'=>['id'=>'[0-9+']], function(){
    Route::get('', ['as'=> 'filmes', 'uses'=>'\App\Http\Controllers\FilmesController::class@index']);
    Route::get('create', ['as'=> 'filmes/Create', 'uses'=>' \App\Http\Controllers\FilmesController::class@Create']);
    Route::post('store', ['as'=> 'filmes/store', 'uses'=>' \App\Http\Controllers\FilmesController::class@store']);
});

Route::group(['prefix'=>'categorias', 'where'=>['id'=>'[0-9+']], function(){
Route::get('', ['as'=> 'categorias', 'uses'=> '\App\Http\Controllers\CategoriasController::class@index']);
Route::get('create', ['as'=> 'categorias/Create', 'uses'=> '\App\Http\Controllers\CategoriasController::class@Create']);
Route::post('store', ['as'=> 'categorias/store', 'uses'=> '\App\Http\Controllers\CategoriasController::class@store']);
});

Route::get('sessao', [\App\Http\Controllers\SessaoController::class, 'index']);
Route::get('sessao/create', [\App\Http\Controllers\SessaoController::class, 'Create']);
Route::post('sessao/store', [\App\Http\Controllers\SessaoController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

