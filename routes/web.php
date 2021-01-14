<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ClienteController};

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
    return view('dashboard');
})->name('home');


Route::get('/buscar', function () {
    return view('atendimento.buscar');
})->name('buscar.paciente');

Route::get('/atendimento', function () {
    return view('atendimento.consulta');
})->name('iniciar.atendimento');

Route::get('/peso', function () {
    return view('atendimento.peso');
})->name('cadastrar.peso');

Route::get('/exame', function () {
    return view('atendimento.exame');
})->name('cadastrar.exame');

Route::get('/receita', function () {
    return view('atendimento.receita');
})->name('nova.receita');

Route::get('/vacina', function () {
    return view('atendimento.vacina');
})->name('cadastrar.vacina');

Route::get('/clientes', function () {
    return view('clientes.buscarClientes');
})->name('buscar.cliente');


Route::prefix('cliente')->group(function(){
    Route::get('cadastro', [ClienteController::class, 'pageCadastro'])->name('cliente.cadastro');
});

