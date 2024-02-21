@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="form-container">
    <form action="{{ route('vacancy.store') }}" method="POST">
        @csrf

        <input type="text" name="company_id" placeholder="Id de la compañia">
        <textarea name="description" placeholder="Descripcion"></textarea>
        <input type="text" name="salary_id" placeholder="Salario">
        <input type="text" name="contract_id" placeholder="Contrato">
        <input type="text" name="task_id" placeholder="Funciones">
        <input type="text" name="job_position_id" placeholder="Cargo">
        <input type="text" name="ocupation_id" placeholder="Ocupacion">
        <input type="date" name="end_date" value="2022-01-01" min="2022-01-01" max="2024-12-31">
        <input type="number" name="avaliable_jobs" placeholder="Puestos disponibles">
        <input type="submit" name="send">
    </form>

    <form action="{{ route('vacancy.index') }}">

</div>

@endsection