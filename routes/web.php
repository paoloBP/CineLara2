<?php

use Illuminate\Support\Facades\Route;

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

Route::get('atores', [\App\Http\Controllers\AtoresController::class, 'index']);
Route::get('atores/create', [\App\Http\Controllers\AtoresController::class, 'Create']);
Route::post('atores/store', [\App\Http\Controllers\AtoresController::class, 'store']);


Route::get('sessao', [\App\Http\Controllers\SessaoController::class, 'index']);
Route::get('sessao/create', [\App\Http\Controllers\SessaoController::class, 'Create']);
Route::post('sessao/store', [\App\Http\Controllers\SessaoController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

