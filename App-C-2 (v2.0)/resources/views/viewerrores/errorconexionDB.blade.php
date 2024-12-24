@extends('viewerrores.plantilla')

@section('contenido')
<div>
    <p>{{ __('ERROR-500') }}</p>
    <p>{{ __('Hubo un problema al procesar tu solicitud. Por favor, intenta nuevamente más tarde.') }}</p>
</div>
@endsection