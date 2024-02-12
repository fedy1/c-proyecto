<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index(){
        $contract = Contract::all();

        return view ("contract.index", ['contracts'=> $contract]);
    }

    public function create(){
        return view ('contract.create');
    }

    public function store(Request $request){
    $request->validate([
        'name'=>'required',
        'description'=> 'required'
    ]);

    Contract::create(['name'=>$request->name,
                    'description'=>$request->description]);
    return redirect()->route('task.create');

    }
}
