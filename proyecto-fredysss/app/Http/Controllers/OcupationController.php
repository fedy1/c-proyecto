<?php

namespace App\Http\Controllers;

use App\Models\Ocupation;
use Illuminate\Http\Request;

class OcupationController extends Controller
{
    public function index(){
        $ocupation = Ocupation::all();

        return view ("ocupation.index", ['ocupations'=> $ocupation]);
    }
    public function store(Request $request){

        $request->validate([
        'code'=> 'required|min:3',
        'name'=>'required|min:2|'   
        ]);

        Ocupation::create(['code'=>$request->code,
                                'name'=>$request->name ]);
    return redirect()->route('ocupation.create');
}

    public function destroy (Ocupation $Ocupation){
        $Ocupation->delete();
        return redirect()->route('ocupation.index');
    }

    public function edit($id) {
        $ocupation = Ocupation::find($id);
        return view('ocupation.edit', ['ocupation'=>$ocupation]);
    
    }
    
    
    public function update(Request $request, Ocupation $ocupation) {
    
        $request->validate([
            'code'=> 'required|min:3',
            'name'=>'required|min:2|'
            ]);
    
        $ocupation->update([
            'code'=>$request->code,
            'name'=>$request->name
        ]);
    
        $ocupation->code = $request->code;
        $ocupation->name= $request->name;
        $ocupation->save();
        return redirect()->route('ocupation.index', $ocupation);
    }


    
}
