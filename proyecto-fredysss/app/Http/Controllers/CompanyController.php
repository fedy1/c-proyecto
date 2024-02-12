<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create(){
        return view("company.create");

    }
    public function store(Request $request){

        $request->validate([
        'NIT'=> 'required|min:3',
        'name'=>'required|min:2',
        'legalRepresentative'=>'required|min:2',
        'email'=>'required|min:11|max:50',
        'municipality_code'=>'required|min:1',
        'economic_activity_code'=>'required|min:1',
        ]);
       // dd($request->all());
        Company::create([
                        'NIT'=>$request->NIT,
                        'name'=>$request->name,
                        'legalRepresentative'=>$request->legalRepresentative,
                        'email'=>$request->email,
                        'municipality_code'=>$request->municipality_code,
                        'economic_activity_code'=>$request->economic_activity_code]);
    return redirect()->route('company.index');
}
    public function index(){
        $companies = Company::all();
        return view('company.index', ['companies'=>$companies]);
    }

    public function destroy (Company $company){
        $company->delete();
        return redirect()->route('salary.create');
    }
}
