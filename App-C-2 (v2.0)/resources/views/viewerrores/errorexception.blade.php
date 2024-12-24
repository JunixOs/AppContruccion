@extends('viewerrores.plantilla')

@section('contenido')
<p>
    {{ __('ERROR-EXCEPTION')}}
</p>
<p>
    {{ __('Hubo un error dentro de la aplicacion o se intento acceder a un recurso no valido.')}}
</p>
@endsection