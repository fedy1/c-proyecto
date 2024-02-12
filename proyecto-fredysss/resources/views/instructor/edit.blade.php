@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

<form action="{{ route('instructor.update', $instructor->id) }}" method="POST">
    @method('PUT')
    @csrf

<input type="text" name="profession", placeholder="Profesion">
<input type="text" name="speciality", placeholder="Especialidad">
    <input type="submit" name="send">
</form>

@endsection