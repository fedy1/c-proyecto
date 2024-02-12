<?php

namespace App\Http\Controllers;

use App\Models\Job_position;
use Illuminate\Http\Request;

class Job_positionController extends Controller
{
    public function index(){
        $job_position = Job_position::all();

        return view ("job_position.index", ['job_positions'=> $job_position]);
    }

    public function create(){
        return view ('job_position.create');
    }

    public function store(Request $request){
    $request->validate([
        'ocupation_id'=>'required',
        'name'=> 'required',
        'description'=> 'required'
    ]);

    Job_position::create(['ocupation_id'=>$request->ocupation_id,
                    'name'=>$request->name,
                    'description'=>$request->description]);
    return redirect()->route('ocupation.create');

    }
}
