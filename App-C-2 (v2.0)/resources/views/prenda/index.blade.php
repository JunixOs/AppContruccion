@extends('layouts.app')

@section('template_title')
    Prenda
@endsection

@section('content')
<style>
    .circulo{
        background-size: cover;
        border-radius: 50%;
        margin: 0 auto;
    }
    .centrar{
        display: grid;
        align-content: center;
    }

    .encabezado-tabla{
        position: sticky;
        top: 0;
        z-index: 1;
    }
    .tabla {
        width: 100%;
        border-collapse: collapse;
    }
</style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Prendas') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('redirect') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Ver mis prendas') }}
                                </a>
                              </div>

                             <div class="float-right">
                                <a href="{{ route('prendas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive" style="max-height: 73vh; overflow-y: scroll;">
                            <table class="table table-striped table-hover tabla">
                                <thead class="thead encabezado-tabla">
                                    <tr>
                                        <th class="encabezado-tabla">No</th>
                                        <th class="encabezado-tabla">Imagen</th>                                    
										<th class="encabezado-tabla">Descripcion</th>
										<th class="encabezado-tabla">Precio</th>
                                        <th class="encabezado-tabla">Talla</th>
										<th class="encabezado-tabla">Tiempo de Uso</th>
										<th class="encabezado-tabla">Usuario</th>

                                        <th class="encabezado-tabla"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($prendas as $prenda)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>
                                                @if ($prenda->image)
                                                <!--<img src="{ { asset($prenda->image) }}" alt="{ {$prenda->id}}" width="200px" height="250px">-->
                                                <div class="centrar">
                                                    <img src="{{ url('image-prenda/'. $prenda->id) }}" alt="{{$prenda->id}}" width="200px" height="200px" class="circulo">
                                                </div>
                                                @endif
                                            </td>
											<td>{{ $prenda->descripcion }}</td>
                                            @if ($prenda->precio==null or $prenda->precio==0)
                                                <td>Gratis</td>

                                            @else 
                                                <td>{{ $prenda->precio }} soles</td>
                                            @endif
                                            <td>{{ $prenda->talla }}</td>
                                            
                                            @if ($prenda->tiempo_uso>365)
											<td>{{ round(($prenda->tiempo_uso)/365,2) }} años</td>
                                            @elseif ($prenda->tiempo_uso>30)
                                            <td>{{ round(($prenda->tiempo_uso)/30,2) }} meses</td>
                                            @elseif ($prenda->tiempo_uso>7)
                                            <td>{{ round(($prenda->tiempo_uso)/7,2) }} semanas</td>
                                            @else
                                            <td>{{ $prenda->tiempo_uso }} dias</td>
                                            @endif
											<td>{{ $prenda->user_name }}</td>

                                            <td>
                                                <!--<form action="{ route('prendas.destroy',$prenda->id) }}" method="POST">-->
                                                    <a class="btn btn-sm btn-primary " href="{{ route('prendas.show',$prenda->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    @if (Auth::id()==$prenda->user_id)
                                                        <a class="btn btn-sm btn-success" href="{{ route('prendas.edit',$prenda->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                        @csrf
                                                        <!--@ method('DELETE')-->
                                                        <a class="btn btn-danger btn-sm" href="{{ route('confirmacion',$prenda->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Borrar') }}</a>
                                                    @endif
                                                <!--</form>-->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $prendas->links() !!}
            </div>
        </div>
    </div>
@endsection
