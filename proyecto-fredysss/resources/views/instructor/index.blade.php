@extends('layouts.app')

@section('content')
<h3>instructors Table</h3>
    <table border:3px solid purple>
        <tr>
            <thead>
                <th>id</th>
                <th>Name</th>
                <th>Profesion</th>
                <th>Especialidad</th>
                <th>Email</th>
                <th>Delete</th>
                <th>Editar</th>
            </thead>
            </tr>
        @forelse($instructors as $instructor)
            <tr>
                <td>{{$instructor->user->id}} </td>  
                <td>{{$instructor->user->name}}</td>
                <td>{{$instructor->user->doc_type}}</td>
                <td>{{$instructor->user->doc_num}}</td>
                <td>{{$instructor->user->last_name}}</td>
                <td>{{$instructor->selection_status}}</td>
                <td>{{$instructor->user->email}}</td>
            <!-- <td>{{$instructor->user->role->role_name}}</td>-->
            <td>{{$instructor->points}}</td>
            <td>
                <form action="{{ route('instructor.destroy', $instructor) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
        </form>
        </td>
                
            </tr>

            <form method="GET" action="{{route('instructor.edit', $instructor->id) }}">
                <input type="submit" value="Editar instructores"/>
            </form>
        @empty
            <h6>No data available</h6>
        @endforelse
    </table>


@endsection