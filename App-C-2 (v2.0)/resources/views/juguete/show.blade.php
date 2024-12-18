@extends('layouts.app')

@section('template_title')
    {{ $juguete->name ?? __('Show') . " " . __('Juguete') }}
@endsection

@section('content')
    <style>
        .centrar{
            display: grid;
            align-content: center;
        }
        .imagen{
            background-size: cover;
            margin: 0 auto;
        }
    </style>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Informacion del Juguete</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('juguetes.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20 centrar">
                            @if ($juguete->image)
                                <!--<img src="{ { asset($prenda->image) }}" alt="{ {$prenda->id}}" width="200px" height="250px">-->
                                <img src="{{ url('image-juguete/'. $juguete->id) }}" alt="{{$juguete->id}}" width="400px" height="350px" class="imagen">
                            @endif
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripcion:</strong>
                            <p>{{ $juguete->descripcion }}</p>
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Precio:</strong>
                            @if ($juguete->precio==null or $juguete->precio==0)
                            {{ 'Gratis' }}
                            @else
                            {{ $juguete->precio }} soles
                            @endif
                            
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tiempo de uso:</strong>
                            @if ($juguete->tiempo_uso>365)
                            {{ round(($juguete->tiempo_uso)/365,2) }} años
                            @elseif ($juguete->tiempo_uso>30)
                            {{ round(($juguete->tiempo_uso)/30,2) }} meses
                            @elseif ($juguete->tiempo_uso>7)
                            {{ round(($juguete->tiempo_uso)/7,2) }} semanas
                            @else
                            {{ $juguete->tiempo_uso }} dias
                            @endif
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>ID de usuario:</strong>
                            {{ $juguete->user_id}}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Usuario:</strong>
                            {{ $juguete->user_name }}
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
