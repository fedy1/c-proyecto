<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use Illuminate\Http\Request;

class MunicipalityController extends Controller
{

    public function create(){
        return view("municipality.create");

    }
    public function store(Request $request){

        $request->validate([
        'code'=> 'required|min:3',
        'name'=>'required|min:2|'   
        ]);

        Municipality::create(['code'=>$request->code,
                                'name'=>$request->name ]);
    return redirect()->route('economic_activity.create');
}
    public function index(){
        $municipalities = Municipality::all();
        return view('municipality.index', ['municipalities'=>$municipalities]);
    }

    public function destroy (Municipality $municipality){
        $municipality->delete();
        return redirect()->route('municipality.index');
    }
}
