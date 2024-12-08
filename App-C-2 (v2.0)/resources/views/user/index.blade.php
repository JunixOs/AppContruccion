@extends('layouts.app')

@section('template_title')
    User
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Datos de usuario') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('prendas.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Volver') }}
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
                                        
                                        <th>ID de usuario</th>
										<th>Nombre de usuario</th>
										<th>Email</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            @if ($user->id==Auth::id()) 

                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->telefono }}</td>
                                            
                                            <td>
                                                <!--<form action="{ route('users.destroy',$user->id) }}" method="POST">-->
                                                    <a class="btn btn-sm btn-primary " href="{{ route('users.show',$user->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    <!--@ csrf
                                                    @ method('DELETE')-->
                                                    <a class="btn btn-danger btn-sm" href="{{ route('borrar-usuario',$user->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Borrar') }}</a>
                                                <!--</form>-->
                                            </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $users->links() !!}
            </div>
        </div>
    </div>
@endsection
