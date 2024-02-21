@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="form-container">
<form action="{{ route('ocupation.update', $ocupation->id) }}" method="POST">
    @method('PUT')
    @csrf

    <input type="text" name="code", placeholder="Codigo de la ocupacion">
    <input type="text" name="name", placeholder="Nombre de la ocupacion">
    
    <input type="submit" name="send">
</form>
</div>     
@endsection