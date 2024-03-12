@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; height: 100vh;">
        <h2 style="margin-bottom: 20px; color: #000000; font-family: 'Montserrat', sans-serif;">User Table</h2>
        <table style="border: 3px solid black; border-collapse: collapse; text-align: center; font-family: 'Montserrat', sans-serif; background-color: #87CEFA;">
            <thead style="background-color: #0F7EF1; color: white;">
                <tr>
                    <th style="background-color: #0F7EF1; color: white;">ID</th>
                    <th style="background-color: #0F7EF1; color: white;">Document Type</th>
                    <th style="background-color: #0F7EF1; color: white;">Document Number</th>
                    <th style="background-color: #0F7EF1; color: white;">Name</th>
                    <th style="background-color: #0F7EF1; color: white;">Last Name</th>
                    <th style="background-color: #0F7EF1; color: white;">Role</th>
                    <th style="background-color: #0F7EF1; color: white;">Role Description</th>
                    <th style="background-color: #0F7EF1; color: white;">User Name</th>
                    <th style="background-color: #0F7EF1; color: white;">Email</th>
                    <th style="background-color: #0F7EF1; color: white;">Delete</th>
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
                                <button type="submit" style="background-color: red; color: white; border: none; padding: 5px 10px; border-radius: 5px; transition: background-color 0.3s;">Eliminar</button>
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
    </div>
@endsection