@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? __('Show') . " " . __('User') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Datos del Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Id de usuario:</strong>
                            {{ $user->id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre de usuario:</strong>
                            {{ $user->name }}
                        </div>

                        <div class="form-group mb-2 mb20">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Extension telefonica:</strong>
                            {{ $user->extension_telefonica }}
                        </div>

                        <div class="form-group mb-2 mb20">
                            <strong>Telefono:</strong>
                            @php
                                $extension=$user->extension_telefonica;
                                $extension=substr($extension,strlen($extension)-3);
                            @endphp
                            {{ $extension.' '.$user->telefono }}
                        </div>

                        <div class="form-group mb-2 mb20">
                            <strong>Fecha de creacion de la cuenta:</strong>
                            {{ $user->created_at }}
                        </div>

                        <div class="form-group mb-2 mb20">
                            <strong>Fecha de la ultima actualizacion de la cuenta:</strong>
                            {{ $user->updated_at }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
