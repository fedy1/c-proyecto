@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div style="width: 80%;">
            <h3 style="text-align: center;">Candidates Table</h3>
            <div style="display: flex; justify-content: center;">
                <table style="border: 3px solid black; width: 100%;">
                    <thead>
                        <tr>
                        <th style="background-color: #0F7EF1; color: white;">id</th>
                            <th style="background-color: #0F7EF1; color: white;">Name</th>
                            <th style="background-color: #0F7EF1; color: white;">Document Type</th>
                            <th style="background-color: #0F7EF1; color: white;">Document Number</th>
                            <th style="background-color: #0F7EF1; color: white;">Last name</th>
                            <th style="background-color: #0F7EF1; color: white;">Status</th>
                            <th style="background-color: #0F7EF1; color: white;">Email</th>
                            <!--<th>Role</th>-->
                            <th style="background-color: #0F7EF1; color: white;">Points</th>
                            <th style="background-color: #0F7EF1; color: white;">Delete</th>
                            <th style="background-color: #0F7EF1; color: white;">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($candidates as $candidate)
                            <tr>
                                <td>{{$candidate->user->id}}</td>  
                                <td>{{$candidate->user->name}}</td>
                                <td>{{$candidate->user->doc_type}}</td>
                                <td>{{$candidate->user->doc_num}}</td>
                                <td>{{$candidate->user->last_name}}</td>
                                <td>{{$candidate->selection_status}}</td>
                                <td>{{$candidate->user->email}}</td>
                                <!--<td>{{$candidate->user->role->role_name}}</td>-->
                                <td>{{$candidate->points}}</td>
                                <td>
                                    <form action="{{ route('candidate.destroy', $candidate) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" style="background-color: #FF0000; /* Red */
                                                                    border: none;
                                                                    color: white;
                                                                    padding: 6px 12px;
                                                                    cursor: pointer;
                                                                    transition: background-color 0.3s;">Eliminar</button>
                                    </form>
                                </td>
                                <td>
                                    <form method="GET" action="{{ route('candidate.edit', $candidate->id) }}">
                                        <button type="submit" style="background-color: #0F7EF1; /* Blue */
                                                                    border: none;
                                                                    color: white;
                                                                    padding: 6px 12px;
                                                                    cursor: pointer;
                                                                    transition: background-color 0.3s;">Editar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" style="text-align: center;">No data available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
