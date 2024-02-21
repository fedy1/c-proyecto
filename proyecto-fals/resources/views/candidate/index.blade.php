@extends('layouts.app')

@section('content')
<h3>Candidates Table</h3>
    <table border:3px solid purple>
        <tr>
            <thead>
                <th>id</th>
                <th>Name</th>
                <th>Document Type</th>
                <th>Document Number</th>
                <th>Last name</th>
                <th>Status</th>
                <th>Email</th>
                <!--<th>Role</th>-->
                <th>Points</th>
                <th>Delete</th>
            </thead>
             </tr>
        @forelse($candidates as $candidate)
            <tr>
                <td>{{$candidate->user->id}} </td>  
                <td>{{$candidate->user->name}}</td>
                <td>{{$candidate->user->doc_type}}</td>
                <td>{{$candidate->user->doc_num}}</td>
                <td>{{$candidate->user->last_name}}</td>
                <td>{{$candidate->selection_status}}</td>
                <td>{{$candidate->user->email}}</td>
               <!-- <td>{{$candidate->user->role->role_name}}</td>-->
               <td>{{$candidate->points}}</td>
               <td>
                <form action="{{ route('candidate.destroy', $candidate) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
          </form>
        </td>
                
            </tr>

            <form method="GET" action="{{route('candidate.edit', $candidate->id) }}">
                <input type="submit" value="Editar candidatos"/>
            </form>
        @empty
            <h6>No data available</h6>
        @endforelse
    </table>


@endsection