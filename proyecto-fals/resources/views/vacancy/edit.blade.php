@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; height: 100vh;">
        <h3 style="text-align: center; color: #000000; margin-bottom: 20px;">Editar Vacante</h3>
        
        <form action="{{ route('vacancy.update', $vacancy->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 10px;">
                <label for="company_id" style="color: #000000; margin-right: 10px;">Compañía:</label>
                <input type="text" name="company_id" id="company_id" value="{{ $vacancy->company_id }}" style="padding: 5px; border: 1px solid #0F7EF1;">
            </div>

            <div style="margin-bottom: 10px;">
                <label for="description" style="color: #000000; margin-right: 10px;">Descripción:</label>
                <textarea name="description" id="description" style="padding: 5px; border: 1px solid #0F7EF1;">{{ $vacancy->description }}</textarea>
            </div>

            <!-- Agrega los campos restantes de acuerdo a tus necesidades -->

            <div>
                <button type="submit" style="background-color: #0F7EF1; /* Blue */
                                            border: none;
                                            color: white;
                                            padding: 5px 10px;
                                            cursor: pointer;">Actualizar Vacante</button>
            </div>
        </form>
    </div>
@endsection