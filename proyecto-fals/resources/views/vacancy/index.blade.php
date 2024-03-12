@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; height: 100vh;">
        <h3 style="text-align: center; color: #000000; margin-bottom: 20px;">Vacancies Table</h3>
        
        <!-- Eliminamos el formulario de filtrar -->

        <div style="display: flex; justify-content: center; align-items: center;">
            <div style="width: 80%;">
                <table style="border: 3px solid black; width: 100%;">
                    <thead>
                        <tr>
                            <th style="background-color: #0F7EF1;">ID</th>
                            <th style="background-color: #0F7EF1;">Company</th>
                            <th style="background-color: #0F7EF1;">Description</th>
                            <th style="background-color: #0F7EF1;">Salary</th>
                            <th style="background-color: #0F7EF1;">Contract</th>
                            <th style="background-color: #0F7EF1;">Task</th>
                            <th style="background-color: #0F7EF1;">Job Position</th>
                            <th style="background-color: #0F7EF1;">Occupation</th>
                            <th style="background-color: #0F7EF1;">End Date</th>
                            <th style="background-color: #0F7EF1;">Available Jobs</th>
                            <th style="background-color: #0F7EF1;">Actions</th>
                            @auth
                                @if(auth()->user()->role_id == 1)
                                    <th style="background-color: #87CEFA;">Actions</th> 
                                @endif
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($vacancies as $vacancy)
                            <tr>
                                <td>{{ $vacancy->id }}</td>
                                <td>{{ $vacancy->company->name }}</td>
                                <td>{{ $vacancy->description }}</td>
                                <td>{{ $vacancy->salary->name }}</td>
                                <td>{{ $vacancy->contract->name }}</td>
                                <td>{{ $vacancy->task->description }}</td>
                                <td>{{ $vacancy->job_position->name }}</td>
                                <td>{{ $vacancy->occupation->name }}</td>
                                <td>{{ $vacancy->end_date }}</td>
                                <td>{{ $vacancy->available_jobs }}</td>
                                <td>
                                    <form action="{{ route('postulate.apply', $vacancy->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" style="background-color: #87CEFA; /* Light Sky Blue */
                                                                    border: none;
                                                                    color: white;
                                                                    padding: 6px 12px;
                                                                    cursor: pointer; 
                                                                    transition: background-color 0.3s;">Postularse</button>
                                    </form>
                                </td>
                                @auth
                                    @if(auth()->user()->role_id == 1)
                                        <td>
                                            <form action="{{ route('vacancy.destroy', $vacancy) }}" method="POST">
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
                                    @endif
                                @endauth
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10">No data available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection