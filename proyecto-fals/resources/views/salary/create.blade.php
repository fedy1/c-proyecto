@extends('layouts.app')

@section('estilos')
    <style>
        /* Estilos para el contenedor principal */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Estilos para el contenedor del formulario */
        .form-container {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para los campos de entrada */
        .form-container input[type="text"] {
            width: calc(100% - 20px);
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        /* Estilos para el botón de enviar */
        .form-container input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Estilos para el botón de volver */
        .back-button {
            background-color: #f9f9f9;
            color: #007bff;
            border: 1px solid #007bff;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .back-button:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
@endsection

@section('content')

<div class="container">
    <div class="form-container">
        <form action="{{ route('task.store') }}" method="POST">
            @csrf
            <input type="text" name="ocupation_id" placeholder="Id de la ocupación">
            <input type="text" name="description" placeholder="Descripción">
            <input type="submit" name="send" value="Enviar">
        </form>
        <a href="{{ route('company.create') }}" class="back-button">Volver</a>
    </div>
</div>

@endsection