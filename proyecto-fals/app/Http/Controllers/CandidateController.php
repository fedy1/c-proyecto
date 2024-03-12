<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all(); 
        return view("candidate.index", ['candidates' => $candidates]);
    }

    public function create()
    {
        return view("candidate.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'selection_status'=> 'required',
            'points'=>'required|min:1|max:3'
        ]);

        // Obtener el ID del usuario autenticado
        $user_id = auth()->id();

        // Crear el candidato utilizando el user_id obtenido y otros datos del formulario
        Candidate::create([
            'user_id' => $user_id,
            'selection_status' => $request->selection_status,
            'points' => $request->points
        ]);
        
        // Redirigir a donde quieras después de crear el candidato
        return redirect()->route('login');
    }

    public function destroy(Candidate $candidate)
    {
        $candidate->delete();
        return redirect()->route('candidate.index');
    }

    public function edit($id)
    {
        $candidate = Candidate::find($id);
        return view('candidate.edit', ['candidate'=>$candidate]);
    }

    public function update(Request $request, Candidate $candidate)
    {
        $request->validate([
            'selection_status'=> 'required',
            'points'=>'required|min:1|max:3'
        ]);

        $candidate->update([
            'selection_status' => $request->selection_status,
            'points' => $request->points
        ]);

        return redirect()->route('candidate.index', $candidate);
    }
}