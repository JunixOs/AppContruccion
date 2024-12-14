@extends('layouts.app')

@section('template_title')
    Juguete
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Juguetes') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('redirect-misjuguetes') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Ver mis juguetes') }}
                                </a>
                              </div>

                             <div class="float-right">
                                <a href="{{ route('juguetes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir Juguete') }}
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
										<th>Tiempo de Uso</th>
										<th>Usuario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($juguetes as $juguete)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td> 
                                                @if ($juguete->image)
                                                <!--<img src="{ { asset($prenda->image) }}" alt="{ {$prenda->id}}" width="200px" height="250px">-->
                                                <img src="{{ url('image-juguete/'. $juguete->id) }}" alt="{{$juguete->id}}" width="200px" height="250px">
                                                @endif
                                            </td>
											<td>{{ $juguete->descripcion }}</td>
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
                                                <form action="{{ route('juguetes.destroy',$juguete->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('juguetes.show',$juguete->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    @if (Auth::id()==$juguete->id)
                                                    <a class="btn btn-sm btn-success" href="{{ route('juguetes.edit',$juguete->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class="btn btn-danger btn-sm" href="{{ route('confirmacion-juguetes',$juguete->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Borrar') }}</a>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
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
