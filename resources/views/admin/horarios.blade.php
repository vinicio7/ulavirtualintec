@extends('layouts.main')
@section('content')
    {{--modal--}}
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Horario</h4>
                </div>
                <form class="form-horizontal" action="{{route('nuevoHorario')}}" method="post" data-toggle="validator">
                <div class="modal-body">
                        <div class="form-group has-feedback" >
                            <label for="grado">Horario</label>
                            <input type="text" class="form-control" id="horario" name="horario" required>
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

    <div class="container">
        <div class="row border-bottom white-bg dashboard-header">
            <div class="col-sm-10">
                <h2>Horarios</h2>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Agregar
                </button>
                <br>
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
                        <i class="fa fa-check-square"></i>Horario Creado!!
                    </div>
                @endif
                <br>
                 <div align="right" style="margin-top: 20px;margin-right: 20px">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar .."> 
                    </div>
                <div class="table-responsive">

                    <table id="myTable" class="table table-striped">
                        
                        <tr class="header">
                            <th>No.</th>
                            <th>Horario</th>
                            <th colspan="2" style="text-align: center;">Acción</th>
                        </tr>
                        <tbody>
                        @foreach($horarios as $index => $horario)
                            <tr>
                                <td>{{$index + $horarios->firstItem()}}</td>
                                <td>{{$horario->descripcion}}</td>
                                <td align="right">
                                    {!! link_to_route('editHorario',
                                                    $title = 'Editar',
                                                    $parameters = $horario->id,
                                                    $attributes = ['class'=>'btn btn-primary']) !!}
                                </td>
                                <td>
                                    <form class="form-horizontal" action="{{route('eliminarHorario',$horario->id)}}" method="get" data-toggle="validator">
                                    <button class="btn btn-danger" type="submit">Eliminar</button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <h5>Mostrando {{ $horarios->firstItem() }} - {{ $horarios->lastItem() }}</h5>
                     {!! $horarios->render() !!}
                </div>

            </div>

        </div>
    </div>
@endsection