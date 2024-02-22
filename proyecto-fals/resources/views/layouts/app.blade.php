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
    <title>Hola</title>
</head>
<body>
    <header id="main-header">
        <nav>
            <div class="logo">
                <img src="{{ asset('img/skillsiftfonde.jpeg') }}" alt="Tu Empresa">
            </div>
            <ul>
                <li><a href="{{ route('user.create') }}">Registrarse</a></li>
                @auth
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
                    @else
                        <li>No está registrado.</li>
                    @endif
                @endauth
            </ul>
        </nav>
    </header>

    @yield('content')
</body>
</html>

