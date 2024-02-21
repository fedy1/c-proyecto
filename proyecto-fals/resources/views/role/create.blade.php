@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-container">
<form action="{{route('role.store')}}" method="POST">
    @csrf

<input type="text" name="role_name", placeholder="nombre del rol">
<input type="text" name="description", placeholder="Descripcion del rol">


<input type="submit" name="send">
</form>


@endsection

