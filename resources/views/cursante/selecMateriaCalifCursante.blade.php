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
                        <i class="fa fa-check-square"></i>Tarea Creada!!
                    </div>
                @endif
<?php
    use App\Entities\Materia;
    use App\Entities\Tarea;
    use App\Entities\ContratoDocente;
    $grados = Materia::all();
    $nombre_grupo = '';
    $id_user = '';
    if (auth()->user()->role == 'docente') {
       //$grupo = ContratoDocente::where('user',auth()->user()->id);
       $grupo = \DB::table('contrato_docentes')->where('user',auth()->user()->id)->first();
       $nombre_grupo = $grupo->gestion;
       $id_user =  auth()->user()->id;

    }
    $tareas = \DB::table('tareas')->where('docente_id',auth()->user()->id)->get();

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

   <div class="inner-block" style="padding-top: 0px">
    <div class="portlet-grid-page">  
        <h1 style="color: #5cb85c"> Lista de tareas - {{$nombre_grupo}}</h1> 
        <br>
          <button type="button" class="btn btn-lg btn-success btn-rounced" data-toggle="modal" data-target="#myModal2" style="border-radius: 6px;background-color: #5cb85c;border-color: #5cb85c"> + Nueva tarea</button>  
          <br>
          <br>
        
            <div class="portlet-grid-page">
                @foreach($tareas as $tarea)
                
                    <?php 
                        $materia = \DB::table('materias')->where('id',$tarea->materia_id)->first();
                        $materia_nombre = "";
                        if($materia){
                            $materia_nombre = $materia->nombreMateria;
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
                            Material de apoyo: <a href="{{ $tarea->archivo }}" download>Descargar</a><br><br>
                            <form class="form-horizontal" action="{{route('eliminarTarea',$tarea->id)}}" method="get" data-toggle="validator">
                                <button type="submit" class="btn btn-danger" data-dismiss="modal">Eliminar</button>
                            </form>
                        </div>
                    </div> 
                    
                @endforeach  
           </div>
        
       
        
        
        
        <div class="clearfix"> </div>
  </div>
</div>
@endsection

