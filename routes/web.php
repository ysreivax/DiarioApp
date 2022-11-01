<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadastrarController;
use App\Http\Controllers\AlterarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[HomeController::class,'MostrarHome'])->name('home');
Route::get('/cadastrar',[CadastrarController::class,'MostrarCadastro'])->name('cadastrar');
Route::get('/alterar',[AlterarController::class,'MostrarAlteracao'])->name('alterar');
Route::post('/cadastrar',[CadastrarController::class,'SalvarBanco'])->name('salvar-banco');
Route::delete('/editar-diarios/{registrosDiarios}',[AlterarController::class,'ApagarBancoDiario'])->name('apagar-diario');
Route::post('/cadastrar-diario',[AlterarController::class,'SalvarBancoDiario'])->name('salvar-banco-diario');
Route::get('/alterar-diario/{registrosDiarios}',[AlterarController::class,'MostrarAlterarDiario'])->name('alterar-diario');
Route::put('/editar-diario/{registrosDiarios}',[AlterarController::class,'AlterarBancoDiario'])->name('alterar-banco-diario');

Route::get('/editar-diario',[AlterarController::class,'MostrarEditarDiario'])->name('editar-diario');
