<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/vervacantes.css') }}">
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

        #main-header {
            background-color: #FFFFFF; /* Blanco */
            padding: 10px;
        }

        #main-header nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            width: 100px;
            height: auto;
        }

        #main-header nav ul {
            list-style-type: none;
            display: flex;
            margin-left: auto; /* Mueve todos los enlaces a la derecha */
            padding: 0; /* Elimina el rellado predeterminado de la lista */
        }

        #main-header nav ul li {
            margin-left: 10px; /* Espacio entre enlaces */
        }

        #main-header nav ul li:first-child {
            margin-left: 0; /* Eliminar margen izquierdo del primer enlace */
        }

        #main-header nav ul li a {
            text-decoration: none;
            color: #0F7EF1; /* Negro */
            font-weight: bold;
            padding: 5px 10px; /* Espacio interior de cada enlace */
            border: 1px solid #000000; /* Borde para separar los enlaces */
            border-radius: 5px; /* Bordes redondeados */
        }

        #main-header nav ul li a:hover {
            color: #000000; /* Rojo */
            background-color: #006FFF; /* Amarillo */
        }
    </style>
    <title>SkillSift</title>
</head>
<body>
    <header id="main-header">
        <nav>
            <div class="logo">
                <img src="{{ asset('img/skillsiftfonde.jpeg') }}" alt="Tu Empresa">
            </div>
            <ul>
                @guest <!-- Si el usuario no ha iniciado sesión -->
                    <li><a href="{{ route('user.create') }}">Registrarse</a></li>
                    <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                @else <!-- Si el usuario ha iniciado sesión -->
                    @if(auth()->user()->role_id == 1)
                        <li><a href="{{ route('welcome') }}">Inicio</a></li>
                        <li><a href="{{ route('user.index') }}">Visualizar Usuarios</a></li>
                        <li><a href="{{ route('instructor.index') }}">Visualizar Instructores</a></li>
                        <li><a href="{{ route('candidate.create') }}">Registrar candidatos</a></li>
                    @elseif(auth()->user()->role_id == 2)
                        <li><a href="{{ route('user.index') }}">Visualizar Usuarios</a></li>
                        <li><a href="{{ route('vacancy.index') }}">Visualizar vacantes</a></li>
                        <li><a href="{{ route('candidate.create') }}">Registrar candidatos</a></li>
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
                @endguest
            </ul>
        </nav>
    </header>

    @yield('content')
</body>
</html>