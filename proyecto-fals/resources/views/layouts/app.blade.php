<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/vervacantes.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="img/skillsift.jpeg">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&family=Montserrat&display=swap" rel="stylesheet">
    @yield('estilos')
    <style>
        body {
            background-image: url("{{ asset('img/fondo8.jpg') }}");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <title>Hola</title>
</head>
<body>
    <header id="main-header">
        <nav>
            <div class="logo">
                <img src="{{ asset('img/skillsiftfonde.jpeg') }}" alt="Tu Empresa" style="width: 100px; height: auto;">
            </div>
            <ul>
                <li><a href="{{ route('user.create') }}">Registrarse</a></li>
                @guest
                    <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                @else 
                    @if(auth()->user()->role_id == 1)
                        <li><a href="{{ route('welcome') }}">Inicio</a></li>
                        <li><a href="{{ route('user.index') }}">Visualizar Usuarios</a></li>
                        <li><a href="{{ route('instructor.index') }}">Visualizar Instructores</a></li>
                        <li><a href="{{ route('candidate.create') }}">Registrar candidato</a></li>
                    @elseif(auth()->user()->role_id == 2)
                        <li><a href="{{ route('user.index') }}">Visualizar Usuarios</a></li>
                        <li><a href="{{ route('vacancy.index') }}">Visualizar vacantes</a></li>
                        <li><a href="{{ route('candidate.create') }}">Registrar candidato</a></li>
                        <li><a href="{{ route('welcome') }}">Inicio</a></li>
                    @elseif(auth()->user()->role_id == 3)
                        <li><a href="{{ route('company.index') }}">Visualizar Empresas</a></li>
                        <li><a href="{{ route('company.create') }}">Crear empresas</a></li>
                        <li><a href="{{ route('candidate.index') }}">Visualizar candidatos</a></li>
                        <li><a href="{{ route('welcome') }}">Inicio</a></li>
                    @elseif(auth()->user()->role_id == 4)
                        <li><a href="{{ route('vacancy.index') }}">Visualizar vacantes</a></li>
                        <li><a href="{{ route('postulate.index') }}">Vacantes a las que aplique</a></li>
                        <li><a href="{{ route('welcome') }}">Inicio</a></li>
                    @endif
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </ul>
        </nav>
    </header>

    @yield('content')
</body>
</html>
