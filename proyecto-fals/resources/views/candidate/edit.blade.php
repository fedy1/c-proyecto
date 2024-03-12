@extends('layouts.app')

@section('estilos')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        select {
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="text"]:focus,
        select:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 15px 30px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
@endsection

@section('content')
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <form action="{{ route('candidate.update', ['candidate' => $candidate->id]) }}" method="POST">
            @method('PUT')
            @csrf

            <h2>Editar Candidato</h2>

            <div>
                <label for="user_id">ID del usuario:</label>
                <input type="text" name="user_id" id="user_id" value="{{ $candidate->user_id }}">
            </div>

            <div>
                <label for="selection_status">Estado de selección:</label>
                <select name="selection_status" id="selection_status">
                    <option value="being studied" {{ $candidate->selection_status == 'being studied' ? 'selected' : '' }}>Being Studied</option>
                    <option value="selected" {{ $candidate->selection_status == 'selected' ? 'selected' : '' }}>Selected</option>
                </select>
            </div>

            <div>
                <label for="points">Puntaje:</label>
                <input type="text" name="points" id="points" value="{{ $candidate->points }}">
            </div>

            <div style="text-align: center;">
                <input type="submit" value="Guardar cambios">
            </div>
        </form>
    </div>
@endsection