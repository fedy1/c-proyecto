@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
    <style>
        /* Estilos para el contenedor principal */
        .container {
            display: flex;
            justify-content: center; /* Centra horizontalmente */
            align-items: center; /* Centra verticalmente */
            height: 100vh; /* 100% del alto de la ventana */
        }

        /* Estilos para el contenedor del formulario */
        .form-container {
            max-width: 400px;
            padding: 20px;
            background: #f7f7f7;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Centra el contenido */
        }

        .form-container h2 {
            margin-bottom: 20px;
        }

        .form-container p {
            margin-bottom: 20px;
        }

        .form-container button {
            background-color: #0F7EF1;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 16px;
        }

        .form-container button:hover {
            background-color: #006FFF;
        }
    </style>
@endsection

@section('content')
<div class="container"> <!-- Contenedor principal -->
    <div class="form-container"> <!-- Contenedor del formulario -->
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
    </div>
</div>
@endsection
