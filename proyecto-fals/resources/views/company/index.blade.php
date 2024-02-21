@extends('layouts.app')

@section('content')
<h3>companies Table</h3>
    <table border:3px solid purple>
        <tr>
            <thead>
                <th>NIT</th>
                <th>Razon social</th>
                <th>Representante legal</th>
                <th>Correo empresarial</th>
                <th>Municipio de residencia</th>
                <th>Actividad economica</th>
            </thead>
             </tr>
        @forelse($companies as $company)
            <tr>
                <td>{{$company->NIT}} </td> 
                <td>{{$company->name}}</td>
                <td>{{$company->legalRepresentative}}</td>
                <td>{{$company->email}}</td>
                <td>{{$company->municipality->name}}</td>
                <td>{{$company->economic_activity->name}}</td>

                    <form action="{{ route('company.destroy', $company) }}" method="POST">
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