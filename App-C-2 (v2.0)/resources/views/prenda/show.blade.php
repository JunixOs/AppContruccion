@extends('layouts.app')

@section('template_title')
    {{ $prenda->name ?? __('Show') . " " . __('Prenda') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Prenda </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('prendas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                            <div class="form-group mb-2 mb20">
                                <strong>Imagen:</strong>
                                    <img src="{{ asset($prenda->image) }}" alt="{{$prenda->id}}" width="400px" height="350px">
                            </div>
                            <div class="form-group mb-2 mb20">
                                <strong>Descripcion:</strong>
                                {{ $prenda->descripcion }}
                            </div>
                            <div class="form-group mb-2 mb20">
                                <strong>Precio:</strong>
                                @if ($prenda->precio==null or $prenda->precio==0)
                                    <td>Gratis</td>
                                @else 
                                    {{ $prenda->precio }} soles
                                @endif
                            </div>
                            <div class="form-group mb-2 mb20">
                                <strong>Tiempo Uso:</strong>
                                {{ $prenda->tiempo_uso }} dias
                            </div>
                            <div class="form-group mb-2 mb20">
                                <strong>User ID:</strong>
                                {{ $prenda->user_id }}
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
