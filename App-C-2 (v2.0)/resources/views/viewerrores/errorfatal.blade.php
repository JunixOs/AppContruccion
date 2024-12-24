@extends('viewerrores.plantilla')

@section('contenido')
<p>
    {{ __('ERROR-FATAL')}}
</p>
<p>
    {{ __('Hubo un error fatal dentro de la aplicacion, esto puede deberse a una desconexion inesperada con la base de datos o a componentes que no funcionan adecuadamente, disculpe los inonvenientes')}}
</p>
@endsection