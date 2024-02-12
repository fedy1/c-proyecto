@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="form-container">
<form action="{{route('job_position.store')}}" method="POST">
    @csrf


<input type="text" name="ocupation_id", placeholder="Id de la ocupacion">
<input type="text" name="name", placeholder="Nombre del cargo">
<input type="text" name="description", placeholder="Descripcion">

<input type="submit" name="send">
</form>
</div>

@endsection