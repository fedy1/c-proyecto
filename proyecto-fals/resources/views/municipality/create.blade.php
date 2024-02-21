@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="form-container">
<form action="{{route('municipality.store')}}" method="POST">
    @csrf


<input type="text" name="code", placeholder="Codigo del municipio">
<input type="text" name="name", placeholder="Nombre del municipio">

<input type="submit" name="send">
</form>
</div>

@endsection