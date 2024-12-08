<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{asset('images/logo.ico')}}" type="image/x-icon">
    <title>Confirmacion</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    .card {
        width: 300px;
        height: fit-content;
        background: rgb(255, 255, 255);
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 20px;
        padding: 30px;
        position: relative;
        box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.068);
    }
    .card-content {
        width: 100%;
        height: fit-content;
        display: flex;
        flex-direction: column;
        gap: 5px;
    }
    .card-heading {
    font-size: 20px;
    font-weight: 700;
    color: rgb(27, 27, 27);
    }
    .card-description {
    font-weight: 100;
    color: rgb(102, 102, 102);
    }
    .card-button-wrapper {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    .card-button {
        width: 50%;
        height: 35px;
        border-radius: 10px;
        border: none;
        cursor: pointer;
        font-weight: 600;
    }
    .primary {
    background-color: rgb(255, 114, 109);
    color: white;
    }
    .primary:hover {
    background-color: rgb(255, 73, 66);
    }
    .secondary {
    background-color: #ddd;
    }
    .secondary:hover {
    background-color: rgb(197, 197, 197);
    }
    .exit-button {
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        background-color: transparent;
        position: absolute;
        top: 20px;
        right: 20px;
        cursor: pointer;
    }
    .exit-button:hover svg {
    fill: black;
    }
    .exit-button svg {
        fill: rgb(175, 175, 175);
    }
    body{
        color: #FFFFFF;
        border-radius: 10px;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height: 100%; /* Asegura que el contenedor ocupe toda la altura de la pantalla */
        margin: 0; /* Elimina el margen predeterminado */
        display: grid;
        place-items: center;
    }
</style>
<body>
    <div class="card">
        <div class="card-content">
            <p class="card-heading">¿Esta seguro que desea eliminar su usuario?</p>
            <p class="card-description">Esta accion es irreversible</p>
        </div>
        <form action="{{ route('users.destroy',$id) }}" method="POST">
            <div class="card-button-wrapper">
                <a class="btn btn-sm btn-success" href="{{ route('users.index') }}"><i class="fa fa-fw fa-edit"></i> {{ __('Cancelar') }}</a>
                @csrf <!--Evita que el token expire o haya errores como el 419-->
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
            </div>
        </form>
        <a href="{{route('users.index')}}"><button class="exit-button">
            <svg height="20px" viewBox="0 0 384 512">
                <path
                d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
            </svg>
        </button>
        </a>
    </div>
</body>

