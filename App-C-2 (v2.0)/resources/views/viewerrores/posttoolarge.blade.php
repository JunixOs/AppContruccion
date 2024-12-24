@extends('viewerrores.plantilla')

@section('contenido')
<p>{{ __('HA OCURRIDO UN ERRROR') }}</p>
<p>{{ __('La peticion fue denegada.')}}</p>
<p>{{ __('Se ha detectado un archivo demasiado largo a la hora de subir los datos.') }}</p>
@endsection