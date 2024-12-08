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
            </div>
        </div>
    </div>
</div>
@endsection
