@extends('layouts.app')

@section('content')
<h3>ocupations Table</h3>

    <table border:3px solid purple>
        <tr>
            <thead>
                <th>id</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
             </tr>
        @forelse($ocupations as $ocupation)
            <tr>
                <td>{{$ocupation->id}} </td>  
                <td>{{$ocupation->code}}</td>
                <td>{{$ocupation->name}}</td>
                <td>
                    <form method="GET" action="{{route('ocupation.edit', $ocupation->id) }}">
                        <input type="submit" value="Editar"/>
                    </form>
                </td>
                <td>
                    <form action="{{ route('ocupation.destroy', $ocupation) }}" method="POST">
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