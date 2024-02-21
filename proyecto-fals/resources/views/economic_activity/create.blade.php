@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="form-container">
<form action="{{route('economic_activity.store')}}" method="POST">
    @csrf


<input type="text" name="code", placeholder="Codigo de la actividad economica">
<input type="text" name="name", placeholder="Nombre de la actividad economica">

<input type="submit" name="send">
</form>
</div>

@endsection