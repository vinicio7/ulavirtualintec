@extends('layouts.main')
@section('content')
    {{--modal--}}
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Grado</h4>
                </div>
                <form class="form-horizontal" action="{{route('nuevoJefe')}}" method="post" data-toggle="validator">
                    <div class="modal-body">
                        <div class="form-group has-feedback" >
                            <label for="nombre">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" name="jefe_est" required placeholder="Ingrese nombre completo (incluyendo el grado)">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group has-feedback" >
                            <label for="localidad">Localidad</label>
                            <input type="text" class="form-control" id="localidad" name="localidad" required placeholder="Ciudad">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--modal--}}
    <div class="row border-bottom white-bg dashboard-header">
        @if($errors->has())
            <div class="alert alert-warning" role="alert">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif
        @if(Session::has('message'))
            <div class="alert alert-dismissible alert-success" class="col-md-10">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <i class="fa fa-check-square"></i>{{Session::get('message')}}
            </div>
        @endif
            <h2>Directores</h2>
            <div class="table-responsive">

                <table class="table table-hover ">
                    <thead>

                    <th>Nombre Completo</th>
                    <th>Cargo</th>
                    <th>Acción</th>
                    </thead>
                    <tbody>
                    @foreach($leaders as $leader)
                        <tr>
                            <td>{{$leader->nombreCompleto}}</td>
                            <td>{{$leader->cargo}}</td>
                            <td>
                                {!! link_to_route('editCargo',
                                                $title = 'Editar',
                                                $parameters = $leader->id,
                                                $attributes = ['class'=>'btn btn-primary']) !!}
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <h2>Directores Departamentales</h2>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Agregar
            </button>
            <div class="table-responsive">
                <table class="table table-hover ">

                    <thead>
                    <th>Nombre Completo</th>
                    <th>Localidad</th>
                    <th colspan="2" style="text-align: center;">Acción</th>
                    </thead>
                    <tbody>

                    @foreach($jefes as $jefe)
                        <tr>
                            <td>{{$jefe->jefe_est}}</td>
                            <td>{{$jefe->localidad}}</td>
                            <td align="right">
                                {!! link_to_route('editJefe',
                                                $title = 'Editar',
                                                $parameters = $jefe->id,
                                                $attributes = ['class'=>'btn btn-primary']) !!}
                            </td>
                            <td>
                                <form class="form-horizontal" action="{{route('eliminarJefe',$jefe->id)}}" method="get" data-toggle="validator">
                                    <button class="btn btn-danger" type="submit">Eliminar</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection