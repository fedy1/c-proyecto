@extends('layouts.app')

@section('estilos')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        form {
            text-align: center;
        }

        input[type="text"],
        input[type="date"] {
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="text"]:focus,
        input[type="date"]:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        input[type="submit"] {
            background-color: #0F7EF1;
            color: #0F7EF1;
            border: none;
            border-radius: 5px;
            padding: 15px 30px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #006FFF;
        }
    </style>
@endsection

@section('content')

@if(session('registration_message'))
    <p>{{ session('registration_message') }}</p>
@endif

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
    <h3 style="text-align: center; margin-bottom: 20px;">Crear Reclutador</h3>
    <form action="{{ route('recruiter.store') }}" method="POST">
        @csrf

        <input type="text" name="user_id" placeholder="ID del usuario">
        <span>Fecha de admisión:</span>
        <input type="date" name="addmision_date" value="2022-01-01" min="2022-01-01" max="2024-12-31">
        <br>
        <input type="submit" name="send">
    </form>
</div>

@endsection
