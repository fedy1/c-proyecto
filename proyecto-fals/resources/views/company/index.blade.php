@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div>
            <h3 style="text-align: center; margin-bottom: 20px;">Companies Table</h3>
            <table style="border: 3px solid black; text-align: center;">
                <thead>
                    <tr>
                        <th style="background-color: #0F7EF1; color: white;">NIT</th>
                        <th style="background-color: #0F7EF1; color: white;">Razon social</th>
                        <th style="background-color: #0F7EF1; color: white;">Representante legal</th>
                        <th style="background-color: #0F7EF1; color: white;">Correo empresarial</th>
                        <th style="background-color: #0F7EF1; color: white;">Municipio de residencia</th>
                        <th style="background-color: #0F7EF1; color: white;">Actividad economica</th>
                        <th style="background-color: #0F7EF1; color: white;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($companies as $company)
                        <tr>
                            <td>{{ $company->NIT }} </td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->legalRepresentative }}</td>
                            <td>{{ $company->email }}</td>
                            <td>{{ $company->municipality->name }}</td>
                            <td>{{ $company->economic_activity->name }}</td>
                            <td>
                                <form action="{{ route('company.destroy', $company) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" style="background-color: red; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No data available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
