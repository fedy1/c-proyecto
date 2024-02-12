@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="form-container">
<form action="{{route('task.store')}}" method="POST">
    @csrf


<input type="text" name="ocupation_id", placeholder="Id de la ocupacion">
<input type="text" name="description", placeholder="Descripcion">

<input type="submit" name="send">
</form>
</div>

@endsection