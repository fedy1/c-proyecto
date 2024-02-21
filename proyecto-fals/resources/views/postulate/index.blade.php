@extends('layouts.app')

@section('content')
    <h3>Vacantes a las que has aplicado</h3>

    @if($userApplications->isEmpty())
        <p>No has aplicado a ninguna vacante aún.</p>
    @else
        <table style="border: 3px solid purple;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Company</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userApplications as $application)
                    <tr>
                        <td>{{ $application->vacancy->id }}</td>
                        <td>{{ $application->vacancy->company->name }}</td>
                        <td>{{ $application->vacancy->description }}</td>
                        <td>
                            <form action="{{ route('postulate.cancel', $application->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit">Cancelar postulación</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
