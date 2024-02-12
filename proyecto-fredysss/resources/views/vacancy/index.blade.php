@extends('layouts.app')

@section('content')
    <h3>Vacancies Table</h3>
    
    <form action="{{ route('vacancy.index') }}" method="GET">
        <label for="company">Filtrar por nombre de la empresa:</label>
        <input type="text" name="company" id="company" value="{{ request('company') }}">
        <button type="submit">Filtrar</button>
    </form>
    
    <table style="border: 3px solid purple;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Company</th>
                <th>Description</th>
                <th>Salary</th>
                <th>Contract</th>
                <th>Task</th>
                <th>Job Position</th>
                <th>Occupation</th>
                <th>End Date</th>
                <th>Available Jobs</th>
                <th>Actions</th>
                @auth
                    @if(auth()->user()->role_id == 3)
                        <th>Actions</th> 
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
                    <td>{{ $vacancy->ocupation->name }}</td>
                    <td>{{ $vacancy->end_date }}</td>
                    <td>{{ $vacancy->available_jobs }}</td>
                    <td>
                    <form action="{{ route('postulate.apply', $vacancy->id) }}" method="POST">
                                    @csrf
                                    <button type="submit">Postularse</button>
                                </form>
                    </td>
                    @auth
                        @if(auth()->user()->role_id == 3)
                            <td>
                                <form action="{{ route('vacancy.destroy', $vacancy) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>
                            </td>
                        @endif
                    @endauth
                </tr>

                <form method="GET" action="{{ route('vacancy.edit', $vacancy->id) }}">
                    <input type="submit" value="Editar vacante"/>
                </form>
            @empty
                <tr>
                    <td colspan="11">No data available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
