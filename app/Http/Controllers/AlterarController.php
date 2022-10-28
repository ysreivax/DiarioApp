<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\diario;

class AlterarController extends Controller
{
    public function MostrarAlteracao(){
        $dadosDiario = diario::all();
    
        return view('alterarPagina',['registrosDiario' => $dadosDiario]);
    }



    public function ApagarBancoDiario(diario $registrosDiario){
        $registrosDiario->delete();

       return Redirect::route('editar-diario');

    }

}