@extends('layouts.app')

@section('template_title')
    Prenda
@endsection

@section('content')
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
										<th>Tiempo de Uso</th>
										<th>User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($prendas as $prenda)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>
                                                @if ($prenda->image)
                                                <img src="{{ asset($prenda->image) }}" alt="{{$prenda->id}}" width="200px" height="250px">
                                                @endif
                                            </td>
											<td>{{ $prenda->descripcion }}</td>
                                            @if ($prenda->precio==null or $prenda->precio==0)
                                                <td>Gratis</td>

                                            @else 
                                                <td>{{ $prenda->precio }} soles</td>
                                            @endif
											<td>{{ $prenda->tiempo_uso }} dias</td>
											<td>{{ $prenda->user_id }}</td>


                                            <td>
                                                <form action="{{ route('prendas.destroy',$prenda->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('prendas.show',$prenda->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    @if (Auth::id()==$prenda->user_id)
                                                        <a class="btn btn-sm btn-success" href="{{ route('prendas.edit',$prenda->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
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
                {!! $prendas->links() !!}
            </div>
        </div>
    </div>
@endsection
