@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

<form action="{{ route('candidate.update', $candidate->id) }}" method="POST">
    @method('PUT')
    @csrf

    <input type="text" name="user_id" placeholder="Id del usuario" value="{{ $candidate->user_id }}">
    <select name="selection_status">
        <option value="being studied">BEING STUDIED</option>
        <option value="selected">SELECTED</option>
    </select>
    <input type="text" name="points" placeholder="Puntaje" value="{{ $candidate->points }}">

    <input type="submit" name="send">
</form>
      
@endsection