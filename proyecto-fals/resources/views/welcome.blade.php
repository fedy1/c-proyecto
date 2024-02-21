@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="form-container">
    <h2>Bienvenido</h2>

    @if(auth()->check())
        <h2>Hola {{ auth()->user()->name }}, su rol es {{ auth()->user()->role->role_name }}</h2>
    @else
        <p>Por favor, inicie sesión para ver este contenido.</p>
    @endif

    <form action="{{ url('logout') }}" method="post">
        @csrf
        <button type="submit">Cerrar Sesión</button>
    </form>

@endsection