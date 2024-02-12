<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Postulate;
use Illuminate\Support\Facades\Auth;

class PostulateController extends Controller
{
    public function index()
    {
        $userId = auth()->id();
        $userApplications = Postulate::where('candidate_id', $userId)->get();
        //dd($userApplications);
        return view('postulate.index', compact('userApplications'));
    }
    public function create(){
        return view ('postulate.create');
    }

    public function store(Request $request){
    $request->validate([
        'candidate_id'=>'required',
        'vacancy_id'=> 'required'
    ]);

    Postulate::create(['candidate_id'=>$request->candidate_id,
                    'vacancy_id'=>$request->vacancy_id]);
    return redirect()->route('vacancy.create');

    }
    public function apply(Vacancy $vacancy)
    {

        if (Auth::check() && Auth::user()->candidate) {

            $postulate = new Postulate([
                'candidate_id' => Auth::user()->candidate->id,
                'vacancy_id' => $vacancy->id,
            ]);
            $postulate->save();
    
            return redirect()->route('vacancy.index')->with('success', 'Postulación exitosa');
        }
    
        return redirect()->route('login');
    }
}
