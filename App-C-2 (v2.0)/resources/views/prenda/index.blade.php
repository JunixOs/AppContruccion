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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Imagen</th>                                    
										<th>Descripcion</th>
										<th>Precio</th>
                                        <th>Talla</th>
										<th>Tiempo de Uso</th>
										<th>Usuario</th>

                                        <th></th>
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
