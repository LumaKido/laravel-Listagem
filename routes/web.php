<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/formulario', function () {
    return view('formulario');
});
//como os dados estão sendo enviados via post, a rota precisa ser via post também para receber as informações
Route::post('/cmd-inserir-pessoa', [PessoaController::class, 'store']);

Route::get('/consultar', [PessoaController::class, 'listarpessoas']);
 
Route::delete('/consultar/{id}', [PessoaController::class, 'destroy']);
