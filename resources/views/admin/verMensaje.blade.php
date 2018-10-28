@extends('layouts.main')
@section('content')
<?php
    use App\Entities\Mensaje;
    use App\Entities\Bandeja;
    use App\Entities\User;
    $id_user =  auth()->user()->id;
    $mensaje = Mensaje::where('id',$id)->first();
    $usuario = User::where('id',$mensaje->enviado)->first();
?>
    {{--modal--}}
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Enviar mensaje</h4>
                </div>
                <form class="form-horizontal" action="{{route('nuevoMensaje')}}" method="post" data-toggle="validator">
                <div class="modal-body">
                        <div class="form-group has-feedback" >
                            <input type="text" name="id_user" id="id_user" value="{{ $id_user }}" hidden="">
                            <label for="grado">Para</label>
                            <select class="form-control" id="para" name="para">
                                
                            </select>
                        </div>
                          <div class="form-group has-feedback" >
                            <label for="grado">Asunto</label>
                            <input type="text" class="form-control" id="asunto" name="asunto" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group has-feedback" >
                            <label for="grado">Mensaje</label>
                            <textarea class="form-control" name="mensaje" id="mensaje">
                            </textarea>
                        </div>
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Enviar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{--modal--}}

    <div class="container">
        <div class="row border-bottom white-bg dashboard-header">
            <div class="col-sm-10" style="margin-bottom: 100px">
                <h1>Detalle de mensaje</h1>
                <br>
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
                        <i class="fa fa-check-square"></i>Mensaje Enviado!!
                    </div>
                @endif
                <br>

                <h2><b>De:</b> {{ $usuario->nombres}} {{$usuario->apellidos}}</h2>
                <h2><b>Asunto:</b> {{ $mensaje->asunto}}</h2>
                <h2><b>Fecha:</b> {{$mensaje->fecha}}</h2>
                <textarea class="form-control" disabled style="padding-top: 20px">
                    {{$mensaje->contenido}}
                </textarea>
                <br>
                 <form class="form-horizontal" action="{{route('mensajes')}}" method="get" data-toggle="validator">
                    <center><button class="btn btn-danger"><i class="fa fa-undo"></i> Regresar</button></center>
                </form>
            </div>

        </div>
    </div>
@endsection