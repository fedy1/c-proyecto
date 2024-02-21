<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $task = Task::all();

        return view ("task.index", ['tasks'=> $task]);
    }

    public function create(){
        return view ('task.create');
    }

    public function store(Request $request){
    $request->validate([
        'ocupation_id'=>'required',
        'description'=> 'required'
    ]);

    Task::create(['ocupation_id'=>$request->ocupation_id,
                    'description'=>$request->description]);
    return redirect()->route('job_position.create');

    }
}
