@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
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

        /* Estilos para la tabla de enlaces */
        .links-table {
            margin-left: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .links-table ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .links-table li {
            margin-bottom: 10px;
        }

        .links-table li a {
            text-decoration: none;
            color: #007bff;
            font-size: 16px;
        }

        .links-table li a:hover {
            text-decoration: underline;
        }
    </style>
@endsection

@section('content')

<div class="container">
    <div class="form-container">
        <form action="{{ route('company.store') }}" method="POST">
            @csrf
            <input type="text" name="NIT" placeholder="NIT">
            <input type="text" name="name" placeholder="Razón social">
            <input type="text" name="legalRepresentative" placeholder="Representante legal">
            <input type="text" name="email" placeholder="Correo empresarial">
            <input type="text" name="municipality_code" placeholder="Código de municipio">
            <input type="text" name="economic_activity_code" placeholder="Código de actividad económica">
            <input type="submit" name="send">
        </form>
    </div>

    <div class="links-table">
        <ul>
            <li><a href="{{ route('task.create') }}">Crear Función</a></li>
            <li><a href="{{ route('job_position.create') }}">Crear Cargo</a></li>
            <li><a href="{{ route('salary.create') }}">Crear Salario</a></li>
            <li><a href="{{ route('contract.create') }}">Crear Contrato</a></li>
            <li><a href="{{ route('economic_activity.create') }}">Crear Actividad Económica</a></li>
        </ul>
    </div>
</div>

@endsection