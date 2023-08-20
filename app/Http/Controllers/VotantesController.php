<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\Votante;
use Illuminate\Http\Request;

class VotantesController extends Controller
{
    

    public function store(Request $request){
    
        // dd($request->all());

        $request->validate([
            'documento' => 'required|min:8',
            'nombre' => 'required',
            'mesa' => 'required'
        ]);

        $votante = new Votante;
        $votante->documento = $request->documento;
        $votante->nombre = $request->nombre;
        $votante->mesa = $request->mesa;
        $votante->id_candidato_seleccionado = $request->id_candidato_seleccionado;
        $votante->save();

        return redirect()->route('votantes')->with('success', 'voto registrado');
    }


    public function index(){
        $candidatos = Candidato::all();
        return view('index', ['candidatos' => $candidatos]);
    }


}
