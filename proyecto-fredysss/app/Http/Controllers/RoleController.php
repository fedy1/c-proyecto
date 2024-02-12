<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $role = Role::all();

        return view ("role.index", ['roles'=> $role]);
    }

    public function create(){
        return view ('role.create');
    }

    public function store(Request $request){
     $request->validate([
        'role_name'=>'required',
        'description'=> 'required'
     ]);

     Role::create(['role_name'=>$request->role_name,
                    'description'=>$request->description]);
    return redirect()->route('user.index');

    }
}
