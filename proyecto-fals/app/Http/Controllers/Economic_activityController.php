<?php

namespace App\Http\Controllers;

use App\Models\Economic_activity;
use Illuminate\Http\Request;

class Economic_activityController extends Controller
{

    public function create(){
        return view("economic_activity.create");

    }
    public function store(Request $request){

        $request->validate([
        'code'=> 'required|min:3',
        'name'=>'required|min:2|'   
        ]);

        Economic_activity::create(['code'=>$request->code,
                                'name'=>$request->name 
                            ]);
    return redirect()->route('company.create');
}
    public function index(){
        $economic_activities = Economic_activity::all();
        return view('economic_activity.index', ['economic_activities'=>$economic_activities]);
    }

    public function destroy (Economic_activity $economic_activity){
        $economic_activity->delete();
        return redirect()->route('economic_activity.index');
    }
}
