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
                <form class="form-horizontal" action="{{route('nuevoGrado')}}" method="post" data-toggle="validator">
                <div class="modal-body">
                        <div class="form-group has-feedback" >
                            <label for="grado">Grado</label>
                            <input type="text" class="form-control" id="grado" name="grado" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                    <div class="form-group">
                        <select class="form-control" placeholder="" name="fuerza">
                            <option value="militar">MILITAR</option>
                            <option value="policia">POLICIA</option>
                            <option value="civil">CIVIL</option>

                        </select>
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

    <div class="container">
        <div class="row border-bottom white-bg dashboard-header">
            <div class="col-sm-10">
                <h2>Grados</h2>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Agregar
                </button>
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
                @if(Session::has('status'))
                    <div class="alert alert-dismissible alert-success" class="col-md-10">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <i class="fa fa-check-square"></i>Grado Creado!!
                    </div>
                @endif
                <div class="table-responsive">

                    <table class="table table-hover ">
                        <thead>

                        <th>Grado</th>
                        <th>Fuerza</th>
                        <th colspan="2" style="text-align: center;">Acción</th>
                        </thead>
                        <tbody>
                        @foreach($grados as $grado)
                            <tr>
                                <td>{{$grado->grado}}</td>
                                <td>{{$grado->fuerza}}</td>
                                <td align="right">
                                    {!! link_to_route('editGrado',
                                                    $title = 'Editar',
                                                    $parameters = $grado->id,
                                                    $attributes = ['class'=>'btn btn-primary']) !!}
                                </td>
                                <td>
                                    <form class="form-horizontal" action="{{route('eliminarGrado',$grado->id)}}" method="get" data-toggle="validator">
                                    <button class="btn btn-danger" type="submit">Eliminar</button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
@endsection