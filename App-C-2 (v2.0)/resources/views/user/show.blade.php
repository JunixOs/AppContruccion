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
                            <span class="card-title">{{ __('Ver') }} Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Id de usuario:</strong>
                            {{ $user->id }}
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre de usuario:</strong>
                            {{ $user->name }}
                        </div>

                        <div class="form-group mb-2 mb20">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Telefono:</strong>
                            {{ $user->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
