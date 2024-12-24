<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ClothSha') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{asset('images/logo.ico')}}" type="image/x-icon">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
            body {
            background-image: image-set("{{asset('/images/1287136.webp')}}"); /*Uso asset para ingresar a la carpeta public que me proporicona Laravel*/ 
            color: #FFFFFF;
            border-radius: 10px;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .circle{
            background-size: cover;
            border-radius: 50%;
            margin: 0 auto;
        }
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('principal') }}">
                    {{ config('app.name', 'ClothSha') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Izquierda de la barra de navegacion -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('Secciones') }}
                            </a> <!--Desplegable SECCIONES-->
                            
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('prendas.index') }}">{{ __('Ver Prendas') }}</a>
                                <a class="dropdown-item" href="{{ route('juguetes.index') }}">{{ __('Ver Juguetes')}}</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('Sobre el proyecto') }}
                            </a> <!--Desplegable SOBRE EL PROYECTO-->
                            
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('ODS') }}">{{ __('¿Que son los ODS?') }}</a>
                                <a class="dropdown-item" href="{{ route('objetivo-proyecto') }}">{{ __('¿Cuanto contaminan nuestras prendas y juguetes?')}}</a>
                                <a class="dropdown-item" href="{{ route('cuidadoprenda')}}">{{ __('Consejos para el cuidado de la ropa')}}</a>
                                <a class="dropdown-item" href="{{ route('cuidadojuguetes')}}">{{ __('Consejos para el cuidado de los juguetes')}}</a>
                            </div>
                        </li>
                        <!--<a class="nav-link" href="{ { route('aboutus') }}">{ { __('Sobre nosotros') }}</a>-->
                    </ul>
                    
                    <!-- Derecha de la barra de navegacion -->
                    <ul class="navbar-nav ms-auto">
                        <li>
                            
                        </li>
                        <!-- Links -->
                        @guest <!--Verifica si el usuario esta autenticado, si no lo esta muestra lo de arriba, su opuesto es @ auth-->
                            @if (Route::has('login')) <!--Verifica si la ruta 'login' existe, esta ruta esta disponible al no estar loggeado y no lo esta cuando se loggea el usuario-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else 
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if ( Auth::user()->imagen_perfil==null)
                                    <img src="{{asset('/images/default_profile_photo.webp')}}" alt="" width="45px" height="45px" class="circle">
                                    @else
                                    <img src="{{ url('image-user/'.Auth::id())}}" alt="{{Auth::id()}}" width="45px" height="45px" class="circle">
                                    @endif
                                     {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('users.index') }}">{{ __('Ver datos') }}</a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
