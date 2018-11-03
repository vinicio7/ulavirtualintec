@extends('layouts.main')

@section('content')
@if(Session::has('message'))
                    <div class="alert alert-dismissible alert-success" class="col-md-10">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <i class="fa fa-check-square"></i>{{Session::get('message')}}
                    </div>
                @endif
@if(Session::has('status'))
                    <div class="alert alert-dismissible alert-success" class="col-md-10">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <i class="fa fa-check-square"></i>Tarea Creado!!
                    </div>
                @endif
<?php
    use App\Entities\CalificarTareas;
    use App\Entities\Materia;
    use App\Entities\Tarea;
    use App\Entities\ContratoDocente;
    $grados = Materia::all();
    $nombre_grupo = '';
    $id_user = '';
    $id_user =  auth()->user()->id;
    //if (auth()->user()->role == 'cursante') {
       //$grupo = ContratoDocente::where('user',auth()->user()->id);
      // $grupo = \DB::table('contrato_docentes')->where('user',auth()->user()->id)->first();
       //$nombre_grupo = $grupo->gestion;
       //$
    //}
    $user = \DB::table('kardex1')->where('user',$id_user)->first();
    $tareas = \DB::table('tareas')->where('materia_id',$user->materia_id)->get();
?>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Agregar Nueva tarea</h4>
                </div>
                <form class="form-horizontal" action="{{route('selecMateriaCalificacionCursante')}}" method="post" data-toggle="validator" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="text" name="docente_id" id="docente_id" value="{{ $id_user }}" hidden="true">
                    <input type="text" name="grupo" id="grupo" value="{{ $nombre_grupo }}" hidden="true">
                        <div class="form-group has-feedback" >
                            <label for="grado">Curso</label>
                            <select class="form-control" name="curso" id="curso">
                                @foreach($grados as $grado)
                                <option value="{{$grado->id}}">{{$grado->nombreMateria}}</option>
                                @endforeach
                            </select>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group has-feedback" >
                            <label for="grado">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group has-feedback" >
                            <label for="grado">Descripcion</label><br>
                            <textarea class="form-control" placeholder="Ingrese la descripcion de la tarea" name="descripcion" id="descripcion"></textarea>
                        </div>
                        <div class="form-group has-feedback" >
                            <label>Imagen o archivo adicional:</label><br>
                           <input type="file" name="file" id="file">
                        </div>
                        <div class="form-group has-feedback" >
                            <label for="grado">Ponderacion</label>
                            <input type="number" min="1" class="form-control" id="ponderacion" name="ponderacion" required>
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

   <div class="inner-block" style="padding-top: 0px;">
    <div class="portlet-grid-page">  

       
        <br>
          <h1 style="color:#68AE00">Lista de tareas</h1>
        
            <div class="portlet-grid-page">
                @foreach($tareas as $tarea)
                
                    <?php 
                        $materia = \DB::table('materias')->where('id',$tarea->materia_id)->first();
                        $materia_nombre = "";
                        if($materia){
                            $materia_nombre = $materia->nombreMateria;
                        }
                        $validar = CalificarTareas::where('tarea_id',$tarea->id)->where('alumno_id',$id_user)->first();
                        $status = "No enviada";
                        if($validar)
                        {
                            if ($validar->ponderacion == 0 ) {
                                $status = "Enviada - Sin calificar";
                            }else{
                                $status = "Enviada - Calificada";
                            }
                        }
                    ?>
                     <div class="portlet-grid panel-primary">
                        <div class="panel-heading" style="background-color: #337ab7;border-color: #337ab7">
                            <h3 class="panel-title"><strong>Curso:</strong> {{ $materia_nombre }} </h3>
                            <h3 class="panel-title"><strong>Grupo:</strong>{{ $tarea->grupo}} </h3>
                            <h3 class="panel-title"><strong>Tarea: </strong>{{ $tarea->nombre }} </h3>
                        </div> 
                        <div class="panel-body">
                            Valor: {{$tarea->ponderacion}} pts<br>
                            Descripcion: {{ $tarea->descripcion }}<br>
                            Estado: {{$status}}
                            <br>
                            <br>
                            <form class="form-horizontal" action="{{route('cursante.prueba',$tarea->id) }}" method="get" data-toggle="validator">
                                <button type="submit" class="btn btn-success" data-dismiss="modal"><i class="fa fa-eye"></i>  Ver</button>
                            </form>
                        </div>
                    </div> 
                    
                @endforeach  
           </div>
        
       
        
        
        
        <div class="clearfix"> </div>
  </div>
</div>
@endsection

