<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
class InstructorController extends Controller
{
    public function index(){
        $instructor = Instructor::all(); 

        return view("instructor.index", ['instructors' => $instructor]);
    }

    public function create(){
        return view("instructor.create");

    }
    public function store(Request $request){

        $request->validate([
        'user_id'=> 'required',
        'profession'=> 'required',
        'speciality'=>'required|min:1'
        ]);

        Instructor::create(['user_id'=>$request->user_id,
                            'profession'=>$request->profession,
                            'speciality'=>$request->speciality]);
    return redirect()->route('login');
}
public function destroy (Instructor $instructor){
    $instructor->delete();
    return redirect()->route('instructor.index');
}

public function edit($id) {
    $instructor = Instructor::find($id);
	return view('instructor.edit', ['instructor'=>$instructor]);

}


public function update(Request $request, Instructor $instructor) {

    $request->validate([
        'user_id'=> 'required',
        'profession'=> 'required',
        'speciality'=>'required|min:1'
        ]);

    $instructor->update([
        'status'=>$request->status,
        'speciality'=>$request->speciality
    ]);

    $instructor->profession = $request->profession;
    $instructor->speciality= $request->speciality;
    $instructor->save();
    return redirect()->route('instructor.index', $instructor);
}
}
