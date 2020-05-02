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
    use App\Entities\Materia;
    use App\Entities\Tarea;
    use App\Entities\ContratoDocente;
    use App\Entities\CalificarTareas;
    $tarea = Tarea::find($id);
    if ($tarea) {
         $materia_nombre = $tarea->nombre;
    }
    $id_alumno = auth()->user()->id;
    $validar = CalificarTareas::where('tarea_id',$id)->where('alumno_id',$id_alumno)->first();
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
<div class="inner-block">
    <div class="portlet-grid-page">  
        <center><h1 style="color:#68AE00">{{ $materia_nombre }}</h1>   </center>
        <div class="portlet panel-default">
          <div class="panel-heading" style="background-color: #ff8000">
            <center><h3 class="panel-title" style="font-weight: bold"> {{$status}}</h3></center>
          </div>
          <div class="panel-body">
            <p style="font-size: 18px;">
                Valor: {{$tarea->ponderacion}} pts<br>
                Descripcion: {{ $tarea->descripcion }}<br>
                Material de apoyo: <a href="{{ $tarea->archivo }}" download>Descargar</a><br><br>
                @if($status == "No enviada")
                    <form class="form-horizontal" action="{{route('subirTarea',$tarea->id)}}" method="post" enctype="multipart/form-data" data-toggle="validator"><input type="file" name="file" id="file"><br>
                        <input type="text" name="tarea_id" id="tarea_id" hidden value="{{$tarea->id}}">
                        <input type="text" name="alumno_id" id="alumno_id" hidden value="{{$id_alumno}}">
                    
                        <button type="submit" class="btn btn-success" style="font-size: 18px">Subir Tarea</button>
                    </form>
                @endif
            </p>     
          </div>
          <br>
        </div>
        
        
        <div class="clearfix"> </div>
  </div>
</div>

@endsection

