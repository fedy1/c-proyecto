@extends('layouts.app')

@section('content')
    <h3>Vacancies Table</h3>
    
    <form action="{{ route('vacancy.index') }}" method="GET">
        <label for="company">Filtrar por nombre de la empresa:</label>
        <input type="text" name="company" id="company" value="{{ request('company') }}">
        <button type="submit" style="background-color: #4CAF50; /* Green */
                                    border: none;
                                    color: white;
                                    padding: 8px 16px;
                                    text-align: center;
                                    text-decoration: none;
                                    display: inline-block;
                                    font-size: 14px;
                                    margin: 4px 2px;
                                    cursor: pointer;">Filtrar</button>
    </form>
    
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <table style="border: 3px solid black;">
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
                                <button type="submit" style="background-color: #4CAF50; /* Green */
                                                            border: none;
                                                            color: white;
                                                            padding: 6px 12px;
                                                            text-align: center;
                                                            text-decoration: none;
                                                            display: inline-block;
                                                            font-size: 12px;
                                                            margin: 2px 1px;
                                                            cursor: pointer;">Postularse</button>
                            </form>
                        </td>
                        @auth
                            @if(auth()->user()->role_id == 3)
                                <td>
                                    <form action="{{ route('vacancy.destroy', $vacancy) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" style="background-color: red; /* Red */
                                                                    border: none;
                                                                    color: white;
                                                                    padding: 6px 12px;
                                                                    text-align: center;
                                                                    text-decoration: none;
                                                                    display: inline-block;
                                                                    font-size: 12px;
                                                                    margin: 2px 1px;
                                                                    cursor: pointer;">Eliminar</button>
                                    </form>
                                </td>
                            @endif
                        @endauth
                    </tr>

                    <tr>
                        <td colspan="11">
                            <form method="GET" action="{{ route('vacancy.edit', $vacancy->id) }}">
                                <input type="submit" value="Editar vacante" style="background-color: #008CBA; /* Blue */
                                                                                       border: none;
                                                                                       color: white;
                                                                                       padding: 6px 12px;
                                                                                       text-align: center;
                                                                                       text-decoration: none;
                                                                                       display: inline-block;
                                                                                       font-size: 12px;
                                                                                       margin: 2px 1px;
                                                                                       cursor: pointer;">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="11">No data available</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
