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



    public function ApagarBancoDiario(diario $registrosDiarios){
        $registrosDiarios->delete();

       return Redirect::route('alterar');

    }

    public function MostrarAlterarDiario(diario $registrosDiarios){

        return view('editarPagina',['registrosDiarios' => $registrosDiarios]);
    }

    public function AlterarBancoDiario(diario $registrosDiarios, Request $request ){
        $banco = $request->validate([
            'data' => 'string|required',
            'tema' => 'string|required',
            'acontecimento' => 'string|required',
        ]);

            $registrosDiarios->fill($banco);
            $registrosDiarios->save();
            //dd($registrosDiarios);

            return Redirect::route('alterar');
    
    }




    public function MostrarEditarDiario(Request $request){

        //$dadosDiario = diario::all();
       //dd($dadosDiario);
       $dadosDiario = diario::query();
       $dadosDiario->when($request->tema,function($query, $vl){
           $query->where('tema','like','%'.$vl.'%');           
   });

       $dadosDiario = $dadosDiario->get();

       return view('alterarPagina',['registrosDiario' => $dadosDiario]);

   }


}