@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

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
<form action="{{route('user.store')}}" method="POST">
    @csrf
<span>Tipo documento</span>
<select name="doc_type"> 
<option value="cc">CC</option>
<option value="ti">TI</option>
</select>

<input type="text" name="doc_num", placeholder="Numero de documento">
<input type="text" name="name", placeholder="nombre">
<input type="text" name="last_name", placeholder="apellido">
<input type="text" name="phone", placeholder="Telefono">
<input type="text" name="user_name", placeholder="Nombre de usuario">
<input type="text" name="email", placeholder="Correo electronico">
<input type="password" name="password", placeholder="Clave">

<span>Rol de usuario</span>
<select name="role_id">
    @foreach ($roles as $id => $role_name)
 <option value="{{$id}}">{{$role_name}}</option>
    @endforeach
</select>

<!--<input type="text" name="role_id", placeholder="Id rol">-->
<input type="submit" name="send">
</form>

@endsection