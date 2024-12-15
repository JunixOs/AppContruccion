@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Principal') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Has iniciado sesion correctamente!!') }} <br>
                        {{ __('Por favor seleccione una opcion de la barra de navegacion en la parte superior de su pantalla') }}
                    
                    </div>
                    <div class="card-body">
                        {{ __('Bienvenido a ClothSha, esta es una pagina web interactiva que permite a los usuarios subir imágenes de prendas de vestir y juguetes, 
                        acompañadas de una descripción detallada y características clave del producto. La finalidad de esta página es ofrecer un espacio donde las personas puedan compartir, explorar y conectar con otros usuarios interesados en artículos específicos. El proceso es sencillo y accesible. Los usuarios pueden crear una cuenta en la página, donde tendrán la posibilidad de subir imágenes de sus prendas o juguetes, añadir descripciones que resalten las características más relevantes (como talla, estado, materiales, etc.) y establecer un precio o cualquier otra información adicional que consideren importante. Esta plataforma no solo actúa como un lugar para la visualización de productos, sino también como un espacio para facilitar el contacto entre los interesados y los propietarios de los artículos, fomentando así el intercambio y la compra-venta entre usuarios.')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
