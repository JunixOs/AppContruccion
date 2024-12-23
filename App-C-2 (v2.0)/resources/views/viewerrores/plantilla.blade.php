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
        background-image: image-set("{{asset('/images/1287136.webp')}}");
        border-radius: 10px;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        display: grid;
        place-items: center;
        height: 100vh;
    }
    .contenedor{
        width: 850px;
        height: 150px;
    }
    .etiqueta_error{
        display: flex;
        justify-content: center;
        align-items: center; 
        height: max-content;
        background-color: red;
        color: white;
        font-style:italic;
        font-weight: bold;
    }
    .texto_error{
        height: 150px;
        display: flex;
        justify-content: center;
        align-items: center; 
    }
</style>
<body>
    <main class="py-4">
        <div class="container contenedor">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" style="">
                        <div class="card-header etiqueta_error">{{ __('Error') }}</div>
        
                        <div style="height: max-content;text-align:center" class="card-body texto_error d-flex flex-column">
        
                            @yield('contenido')

                            <a class="btn btn-sm btn-primary" href="{{ route('home') }}">
                                <i class="fa fa-fw fa-edit"></i> {{ __('Volver') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>