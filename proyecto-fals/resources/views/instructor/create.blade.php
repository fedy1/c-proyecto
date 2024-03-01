@extends('layouts.app')

@section('estilos')
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            width: 50%;
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container input[type="text"],
        .form-container input[type="submit"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-container input[type="submit"] {
            background-color: #0F7EF1;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .form-container input[type="submit"]:hover {
            background-color: #006FFF;
        }
    </style>
@endsection

@section('content')

@if(session('registration_message'))
    <p>{{ session('registration_message') }}</p>
@endif

<!-- Contenedor para centrar en el medio -->
<div class="container">
    <div class="form-container">
        <form action="{{route('instructor.store')}}" method="POST">
            @csrf

            <input type="text" name="user_id" placeholder="Id del usuario">
            <input type="text" name="profession" placeholder="Profesión">
            <input type="text" name="speciality" placeholder="Especialidad">

            <input type="submit" name="send" value="Enviar">
        </form>
    </div>
</div>

@endsection