<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\diario;
class CadastrarController extends Controller
{
    public function MostrarCadastro(){
        return view('cadastrarPagina');
    }


public function SalvarBanco(Request $request){

    $dadosDiario = $request->validate([
        'data' => 'string|required',
        'tema' => 'string|required',
        'acontecimento' => 'string|required',
    ]);

    diario::create($dadosDiario);

    return Redirect::route('home');

 } 

}


