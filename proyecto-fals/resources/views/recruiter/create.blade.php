@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
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
<form action="{{route('recruiter.store')}}" method="POST">
    @csrf


<input type="text" name="user_id", placeholder="Id del usuario">
<span>Fecha de admision</span>
<input type="date" name="addmision_date" value="2022-01-01" min="2022-01-01" max="2024-12-31" >

<input type="submit" name="send">
</form>
</div>

@endsection