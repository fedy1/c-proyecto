@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

<nav id="secondary-nav">
    <ul>
        <li><a href="{{ route('task.create') }}">Crear Función</a></li>
        <li><a  href="{{ route('job_position.create') }}">Crear Cargo</a></li>
        <li><a  href="{{ route('salary.create') }}">Crear Salario</a></li>
        <li><a  href="{{ route('contract.create') }}">Crear Contrato</a></li>
        <li><a  href="{{ route('economic_activity.create') }}">Crear Actividad Economica</a></li>
    </ul>
</nav>

<div class="form-container">
    <form action="{{route('company.store')}}" method="POST">
        @csrf
        <input type="text" name="NIT" placeholder="NIT">
        <input type="text" name="name" placeholder="Razon social">
        <input type="text" name="legalRepresentative" placeholder="Representante legal">
        <input type="text" name="email" placeholder="Correo empresarial">
        <input type="text" name="municipality_code" placeholder="Codigo de municipio">
        <input type="text" name="economic_activity_code" placeholder="Codigo de actividad economica">
        <input type="submit" name="send">
    </form>
</div>



@endsection
