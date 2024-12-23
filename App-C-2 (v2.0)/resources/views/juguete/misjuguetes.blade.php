@extends('layouts.app')

@section('template_title')
    juguete
@endsection

@section('content')
    <style>
        .encabezado-tabla{
            position: sticky;
            top: 0;
            z-index: 1;
        }
        .tabla {
            width: 100%;
            border-collapse: collapse;
        }

        .circulo{
            background-size: cover;
            border-radius: 50%;
            margin: 0 auto;
        }
        .centrar{
            display: grid;
            align-content: center;
        }
        .scroll{
        max-width: 300px;
        word-wrap: break-word; 
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Mis Juguetes') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('juguetes.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Ver todos los juguetes') }}
                                </a>
                              </div>
                             <div class="float-right">
                                <a href="{{ route('juguetes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
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
                                <thead class="thead">
                                    <tr>
                                        <th class="encabezado-tabla">No</th>
                                        <th class="encabezado-tabla">Imagen</th>                                        
										<th class="encabezado-tabla">Descripcion</th>
										<th class="encabezado-tabla">Precio</th>
										<th class="encabezado-tabla">Tiempo de Uso</th>
										<th class="encabezado-tabla">Usuario</th>

                                        <th class="encabezado-tabla"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($juguetes as $juguete)
                                        @if (Auth::id()==$juguete->user_id)
                                        
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>
                                                @if ($juguete->image)
                                                <div class="centrar">
                                                    <img src="{{ url('image-juguete/'. $juguete->id) }}" alt="{{$juguete->id}}" width="200px" height="200px" class="circulo">
                                                </div>
                                                @endif
                                            </td>
											<td class="scroll">{{ $juguete->descripcion }}</td>
                                            @if ($juguete->precio==null or $juguete->precio==0)
                                                <td>Gratis</td>

                                            @else 
                                                <td>{{ $juguete->precio }} soles</td>

                                            @endif
                                            
                                            @if ($juguete->tiempo_uso>365)
											<td>{{ round(($juguete->tiempo_uso)/365,2) }} años</td>
                                            @elseif ($juguete->tiempo_uso>30)
                                            <td>{{ round(($juguete->tiempo_uso)/30,2) }} meses</td>
                                            @elseif ($juguete->tiempo_uso>7)
                                            <td>{{ round(($juguete->tiempo_uso)/7,2) }} semanas</td>
                                            @else
                                            <td>{{ $juguete->tiempo_uso }} dias</td>
                                            @endif
											<td>{{ $juguete->user_name }}</td>
    

                                            <td>
                                                <!--<form action="{ route('juguetes.destroy',$juguete->id) }}" method="POST">-->
                                                    <a class="btn btn-sm btn-primary " href="{{ route('juguetes.show',$juguete->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('juguetes.edit',$juguete->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class="btn btn-danger btn-sm" href="{{ route('confirmacion',$juguete->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Borrar') }}</a>
                                                    <!--<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> { __('Borrar') }}</button>-->
                                                </form>
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $juguetes->links() !!}
            </div>
        </div>
    </div>
@endsection