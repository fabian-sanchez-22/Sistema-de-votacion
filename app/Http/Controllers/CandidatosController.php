<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatosController extends Controller
{
    public function store(Request $request){
    
        $request->validate([
            'nombre' => 'required',
            'partido' => 'required'
        ]);

        $candidato = new Candidato;
        $candidato->nombre = $request->nombre;
        $candidato->partido = $request->partido;
        $candidato->save();

        return redirect()->route('candidatos')->with('success', 'candidato registrado');
    }


   
}
