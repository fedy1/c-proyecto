<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;

class SalaryController extends Controller
{
    public function index(){
        $salary = Salary::all();

        return view ("salary.index", ['salaries'=> $salary]);
    }

    public function create(){
        return view ('salary.create');
    }

    public function store(Request $request){
    $request->validate([
        'name'=>'required',
        'description'=> 'required'
    ]);

    Salary::create(['name'=>$request->name,
                    'description'=>$request->description]);
    return redirect()->route('contract.create');

    }
}
