@extends('layouts.app')

@section('content')
    <h3>Users Table</h3>
    <table style="border: 3px solid black; border-collapse: collapse; width: 100%; text-align: center;">
        <thead style="background-color: black; color: white;">
            <tr>
                <th>ID</th>
                <th>Document Type</th>
                <th>Document Number</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Role</th>
                <th>Role Description</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{$user->id}}</td> 
                    <td>{{$user->doc_type}}</td>
                    <td>{{$user->doc_num}}</td> 
                    <td>{{$user->name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->role->role_name}}</td>
                    <td>{{$user->role->description}}</td>
                    <td>{{$user->user_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <form action="{{ route('user.destroy', $user) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" style="background-color: red; color: white; border: none; padding: 5px 10px; border-radius: 5px;">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10">No data available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection