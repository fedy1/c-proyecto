@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <div class="form-container">
    <form action="{{ url('login') }}" method="post">
        @csrf
        <label for="email">Correo:</label>
        <input type="text" name="email" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Ingresar"/>
    </form>

    <p>¿No estas registrado?</p>
    <div class="form-container">
                <form action="{{ route('user.create') }}">
                <input type="submit" value="Registrate"/>
                </form>

@endsection