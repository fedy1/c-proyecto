@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

<h1>Lista</h1>

<ul>
    @foreach($recruiters as $recruiter)
        <li>
            <strong>Recruiter ID:</strong> {{ $recruiter->id }} <br>
            <strong>Fecha de admision:</strong> {{ $recruiter->addmision_date }} <br>>
        </li>
        <hr>
    @endforeach
</ul>

@endsection