@extends('layouts.app')

@section('template_title')
    {{ $prenda->name ?? __('Show') . " " . __('Prenda') }}
@endsection

@section('content')
<style>
    .circulo{
        background-size: cover;
        margin: 0 auto;
    }
    .centrar{
        display: grid;
        align-content: center;
    }
</style>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Informacion de la Prenda </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('prendas.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                            <div class="form-group mb-2 mb20 centrar">
                                    <img src="{{ url('image-prenda/'. $prenda->id) }}" alt="{{$prenda->id}}" width="400px" height="350px" class="circulo">
                            </div>
                            <div class="form-group mb-2 mb20">
                                <strong>Descripcion:</strong>
                                {{ $prenda->descripcion }}
                            </div>
                            <div class="form-group mb-2 mb20">
                                <strong>Precio:</strong>
                                @if ($prenda->precio==null or $prenda->precio==0)
                                    {{ 'Gratis'}}
                                @else 
                                    {{ $prenda->precio }} soles
                                @endif
                            </div>
                            <div class="form-group mb-2 mb20">
                                <strong>Talla:</strong>
                                {{ $prenda->talla }}
                            </div>
                            <div class="form-group mb-2 mb20">
                                <strong>Tiempo Uso:</strong>
                                @if ($prenda->tiempo_uso>365)
                                {{ round(($prenda->tiempo_uso)/365,2) }} años
                                @elseif ($prenda->tiempo_uso>30)
                                {{ round(($prenda->tiempo_uso)/30,2) }} meses
                                @elseif ($prenda->tiempo_uso>7)
                                {{ round(($prenda->tiempo_uso)/7,2) }} semanas
                                @else
                                {{ $prenda->tiempo_uso }} dias
                                @endif
                            </div>
                            <div class="form-group mb-2 mb20">
                                <strong>User ID:</strong>
                                {{ $prenda->user_id }}
                            </div>
                            <div class="form-group mb-2 mb20">
                                <strong>Usuario:</strong>
                                @if ($prenda->user_name)
                                    {{ $prenda->user_name }}
                                @else
                                    {{'No hay ningun valor establecido, porfavor edite la informacion de esta prenda'}}
                                @endif
                            </div>
                            <dd>
                                <div class="form-group mb-2 mb20">
                                    <strong>Correo electronico del usuario:</strong>
                                    {{ $user->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Numero de telefono del usuario:</strong>
                                    @php
                                    $extension=$user->extension_telefonica;
                                    $extension=substr($extension,strlen($extension)-3);
                                    @endphp
                                    {{ $extension.' '.$user->telefono }}
                                </div>
                            </dd>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
