@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

@if(session('registration_message'))
        <p>{{ session('registration_message') }}</p>
    @endif

<div class="form-container">
<form action="{{route('instructor.store')}}" method="POST">
    @csrf


<input type="text" name="user_id", placeholder="Id del usuario">
<input type="text" name="profession", placeholder="Profesion">
<input type="text" name="speciality", placeholder="Especialidad">

<input type="submit" name="send">
</form>

</div>

@endsection