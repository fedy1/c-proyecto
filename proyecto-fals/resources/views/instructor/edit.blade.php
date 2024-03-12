@extends('layouts.app')

@section('content')
<style>
    .center-container {
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
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #555;
    }

    .form-control {
        width: calc(100% - 20px);
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
    }

    .btn {
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
        border: none;
    }
</style>

<div class="container">
    <div class="center-container">
        <div class="form-container">
            <h3 style="text-align: center; margin-bottom: 20px;">Editar Instructor</h3>
            <form action="{{ route('instructor.update', $instructor->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="profession">Profesión:</label>
                    <input type="text" id="profession" name="profession" value="{{ $instructor->profession }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="speciality">Especialidad:</label>
                    <input type="text" id="speciality" name="speciality" value="{{ $instructor->speciality }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
            <div style="margin-top: 20px; text-align: center;">
                <a href="{{ route('instructor.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection
