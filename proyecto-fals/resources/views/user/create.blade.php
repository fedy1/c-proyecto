@extends('layouts.app')

@section('estilos')
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            display: flex;
            justify-content: space-between;
            width: 80%;
        }

        .form-column {
            flex: 0 0 48%; /* 48% para dejar un pequeño espacio entre columnas */
        }

        .form-part {
            padding: 20px;
            background: #f7f7f7;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .form-part input[type="text"],
        .form-part input[type="password"],
        .form-part select {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            color: black; /* Cambio de color de texto a negro */
        }

        .form-part select {
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="#ccc" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/><path fill="none" d="M0 0h24v24H0z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px center;
            padding-right: 30px;
            color: black; /* Cambio de color de texto a negro */
        }

        .form-part input[type="submit"] {
            background-color: #0F7EF1;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .form-part input[type="submit"]:hover {
            background-color: #006FFF;
        }

        .form-part span {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }

        /* Estilos para los enlaces de registro e inicio de sesión */
        .form-links {
            text-align: right;
        }

        .form-links a {
            color: white;
            text-decoration: none;
            margin-left: 10px; /* Espacio entre enlaces */
        }
    </style>
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

<!-- Contenedor para centrar en el medio -->
<div class="container">
    <div class="form-container">
        <div class="form-column">
            <div class="form-part">
                <form action="{{route('user.store')}}" method="POST">
                    @csrf
                    <span>Tipo documento</span>
                    <select name="doc_type"> 
                        <option value="cc">CC</option>
                        <option value="ti">TI</option>
                        <option value="extranjeria">CE</option>
                    </select>

                    <input type="text" name="doc_num" placeholder="Numero de documento">
                    <input type="text" name="name" placeholder="Nombre">
                    <input type="text" name="last_name" placeholder="Apellido">
                    <input type="text" name="phone" placeholder="Telefono">

                    <span>Género</span>
                <select name="gender">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                </select>
            </div>
        </div>

        <div class="form-column">
            <div class="form-part">
            <label for="birthdate" :options="['maxDate' => '2006-12-31']" >Fecha de Nacimiento</label>
            <x-flatpickr name="birthdate" />
                <input type="text" name="user_name" placeholder="Nombre de usuario">
                <input type="text" name="email" placeholder="Correo electronico">
                <input type="password" name="password" placeholder="Clave">

                <span>Rol de usuario</span>
                <select name="role_id">
                    @foreach ($roles as $id => $role_name)
                        <option value="{{$id}}">{{$role_name}}</option>
                    @endforeach
                </select>

                <!--<input type="text" name="role_id", placeholder="Id rol">-->
                <input type="submit" name="send" value="Registrarse">
                </form> 
                <x-flatpickr::style />
                <x-flatpickr::script /><!-- Cierre del formulario aquí -->
            </div>
        </div>
    </div>
</div>



@endsection