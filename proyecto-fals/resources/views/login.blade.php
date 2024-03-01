@extends('layouts.app')

@section('estilos')
    <style>
        .formulario-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            max-width: 400px;
            padding: 20px;
            background: #f7f7f7;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .login-form input {
            width: 100%;
            margin: 8px 0;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .login-form input[type="submit"] {
            background-color: #0F7EF1;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s;
        }

        .login-form input[type="submit"]:hover {
            background-color: #006FFF;
        }

        .login-form p {
            text-align: center;
        }
    </style>
@endsection

@section('content')
<div class="formulario-container">
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
</div>
@endsection