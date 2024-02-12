<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){
        $roles=Role::pluck('role_name', 'id');

        return view("user.create", compact('roles'));

    }
    public function store(Request $request)
    {
        $request->validate([
            'doc_type' => 'required',
            'doc_num' => 'required|min:7|max:10',
            'name' => 'required|min:2|',
            'last_name' => 'required|min:2',
            'phone' => 'required|min:10',
            'user_name' => 'required|min:4',
            'email' => 'required|min:11|max:50',
            'password' => 'required|min:8',
            'role_id' => 'required'
        ]);
        $user = User::create([
            'doc_type' => $request->doc_type,
            'doc_num' => $request->doc_num,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id
        ]);
        switch ($request->input('role_id')) {
            case 1:
                session()->flash('registration_message', 'Hola ' . $request->name . ', su ID es ' . $user->id);
                return redirect()->route('login');
            case 2:
                session()->flash('registration_message', 'Hola ' . $request->name . ', su ID es ' . $user->id);
                return redirect()->route('instructor.create');
            case 3:
                session()->flash('registration_message', 'Hola ' . $request->name . ', su ID es ' . $user->id);
                return redirect()->route('recruiter.create');
            case 4:
                return redirect()->route('login');
        }
    
        if ($request->input('role_id') == 4) {
            $user->candidate()->create([
            ]);
        }
}
    public function index(){
        $users = User::all();
        return view('user.index', ['users'=>$users]);
    }

    public function destroy (User $user){
        $user->delete();
        return redirect()->route('user.index');
    }

}
