<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruiter;

class RecruiterController extends Controller
{
    public function index(){
        $recruiter = Recruiter::all(); // 

        return view("recruiter.index", ['recruiters' => $recruiter]);
    }

    public function create(){
        return view("recruiter.create");

    }
    public function store(Request $request){

        $request->validate([
        'user_id'=> 'required',
        'addmision_date'=> 'required'   
        ]);

        Recruiter::create(['user_id'=>$request->user_id,
                            'addmision_date'=>$request->addmision_date]);
    return redirect()->route('login');
}
}