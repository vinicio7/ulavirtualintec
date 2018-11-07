@extends('layouts.main')
@section('content')
<?php
    use App\Entities\ContratoDocente;
    use App\Entities\Mensaje;
    use App\Entities\Kardex;
    use App\Entities\Bandeja;
    use App\Entities\User;
    use Auth;
    dd(auth()->user());
    $id_user =  auth()->user()->id;
    $bandeja = Bandeja::where('id_user',$id_user)->get();
    if (auth()->user()->role == 'docente') {
        $alumnos = User::where('role','cursante')->get();
    }
    if (auth()->user()->role == 'cursante') {
        $docentes = User::where('role','docente')->get();
    }
?>
    {{--modal--}}
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                @if(auth()->user()->role == 'admin')
                                    <option value="1">Todos</option>
                                    <option value="2">Profesores</option>
                                    <option value="3">Alumnos</option>
                                @endif
                                @if(auth()->user()->role == 'cursante')
                                    <option value="1">Administrador</option>
                                    @foreach($docentes as $item)
                                        <option value="{{$item->id}}">{{$item->nombre}} {{$item->paterno}} {{$item->materno}}</option>
                                    @endforeach
                                @endif
                                @if(auth()->user()->role == 'docente')
                                    <option value="1">Administrador</option>
                                     @foreach($alumnos as $item)
                                        <option value="{{$item->id}}">{{$item->nombre}} {{$item->paterno}} {{$item->materno}}</option>
                                    @endforeach
                                @endif
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
            <div class="col-sm-10">
                <h2>Bandeja de entrada</h2>
                <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
                    <i class="fa fa-plus"></i> Nuevo mensaje
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
                        <i class="fa fa-check-square"></i>Mensaje Enviado!!
                    </div>
                @endif
                <br>

                <table class="table tab-border">
                        <tbody>
                            <tr class="read" style="background-color: green;color: white">
                                    <td width="10%" style="">
                                        <center style="font-weight: bold">Accion</center>
                                    </td>
                                    <td width="20%" style="font-weight: bold">
                                        Enviado
                                    </td>
                                    <td width="20%" style="font-weight: bold">
                                        Asunto
                                    </td>
                                    <td width="20%" style="font-weight: bold">
                                        Fecha
                                    </td>
                            </tr>
                            @if(count($bandeja)> 0)
                                @foreach($bandeja as $individual)
                                    @if($individual->estado == 0)
                                        <tr class="unread checked">
                                    @else
                                        <tr class="checked">
                                    @endif
                                        <?php
                                            $mensaje = Mensaje::where('id',$individual->id_mensaje)->first();
                                            $usuario = User::where('id',$mensaje->enviado)->first();
                                            //dd($usuario);
                                            $nombre_enviado = $usuario->nombres.$usuario->apellidos;
                                        ?>
                                        <td width="10%">
                                            <center>
                                                <form class="form-horizontal" action="{{route('verMensaje',$individual->id) }}" method="get" data-toggle="validator">
                                                    <button class="btn btn-info"><i class="fa fa-eye"></i>  Leer</button>
                                                </form>
                                            </center>
                                        </td>
                                        <td width="20%" style="padding-top: 15px;">
                                            {{$nombre_enviado}}
                                        </td>
                                        <td width="20%" style="padding-top: 15px;">
                                            {{$mensaje->asunto}}
                                        </td>
                                        <td width="20%" style="padding-top: 15px;">
                                            {{$mensaje->fecha}}
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>

            </div>

        </div>
    </div>
@endsection