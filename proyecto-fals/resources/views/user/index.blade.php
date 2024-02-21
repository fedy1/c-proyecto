@extends('layouts.app')

@section('content')
<h3>Users Table</h3>
    <table border:3px solid purple>
        <tr>
            <thead>
                <th>id</th>
                <th>Document type</th>
                <th>Document Number</th>
                <th>Name</th>
                <th>Last name</th>
                <th>Role</th>
                <th>Role description</th>
                <th>User name</th>
                <th>Email</th>
                <th>Delete</th>
            </thead>
             </tr>
        @forelse($users as $user)
            <tr>
                <td>{{$user->id}} </td> 
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
                    <button type="submit">Eliminar</button>
              </form>
            </td>
            </tr>


        @empty
            <h6>No data available</h6>
        @endforelse
    </table>


@endsection