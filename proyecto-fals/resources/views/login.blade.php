@extends('layouts.app')

@section('estilos')
    <style>
        /* Estilos para el contenedor del formulario */
        .login-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: #f7f7f7;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para los campos de entrada */
        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            margin: 8px 0;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Estilos para el botón de inicio de sesión */
        .login-form input[type="submit"] {
            width: 100%;
            margin: 10px 0;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50; /* Color verde */
            color: white;
            cursor: pointer;
        }

        .login-form input[type="submit"]:hover {
            background-color: #45a049; /* Cambio de color al pasar el mouse */
        }

        /* Estilos para el enlace de registro */
        .login-form a {
            color: #4CAF50;
            text-decoration: none;
        }

        .login-form a:hover {
            text-decoration: underline;
        }
    </style>
@endsection

@section('content')

<div class="login-form">
    <h2>Iniciar sesión</h2>
    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
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
    <p>¿No estás registrado? <a href="{{ route('user.create') }}">Regístrate</a></p>
</div>

@endsection
