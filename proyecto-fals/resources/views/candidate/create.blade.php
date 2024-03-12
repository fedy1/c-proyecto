@extends('layouts.app')

@section('content')

<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div class="form-container">
        <form action="{{ route('candidate.store') }}" method="POST" style="text-align: center;">
            @csrf

            <input type="text" name="user_id" placeholder="ID del usuario" style="margin-bottom: 10px; padding: 5px;">
            <select name="selection_status" style="margin-bottom: 10px; padding: 5px;">
                <option value="being studied">BEING STUDIED</option>
                <option value="selected">SELECTED</option>
            </select>
            <input type="number" name="points" placeholder="Puntaje" style="margin-bottom: 10px; padding: 5px;">

            <input type="submit" name="send" value="Enviar" style="background-color: #0F7EF1; /* Blue */
                                                                border: none;
                                                                color: white;
                                                                padding: 5px 10px;
                                                                cursor: pointer;">

        </form>

        <form action="{{ route('candidate.index') }}" style="text-align: center;">
            <input type="submit" value="Visualizar Candidatos" style="background-color: #0F7EF1; /* Blue */
                                                                        border: none;
                                                                        color: white;
                                                                        padding: 5px 10px;
                                                                        cursor: pointer;">
        </form>
    </div>
</div>

@endsection