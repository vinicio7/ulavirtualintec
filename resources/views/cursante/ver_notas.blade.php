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
    use App\Entities\User;
    use App\Entities\ContratoDocente;
    use App\Entities\CalificarTareas;
    $id = auth()->user()->id;
    $tareas = CalificarTareas::where('alumno_id',$id)->get();
?>
<div class="row border-bottom white-bg dashboard-header">
    <h1 style="color:#68AE00">Mis notas</h1>
        <div class="table table-striped">
            <table class="table text-center table table-hover">
                <tr>
                    <td class="success" width="30%">Materia</td>
                    <td class="success" width="20%">Grupo</td>
                    <td class="success" width="10%">Archivo</td>
                    <td class="success" width="20%">Ponderacion</td>
                    <td class="success" width="20%">Calificacion</td>
                </tr>

                @foreach($tareas as $tarea)
                    <tr>
                        <form class="form-horizontal" action="{{route('calificar_tarea',$tarea->id)}}" method="put"  data-toggle="validator">
                        <?php
                            $tarea_doc  = Tarea::where('id',$tarea->tarea_id)->first();
                            $materia    = Materia::where('id',$tarea_doc->materia_id)->first();
                            $alumno     = User::where('id',$tarea->alumno_id)->first();
                            
                            //$tarea_doc  = Tarea::where('id',$tarea->tarea_id)->first();
                        ?>
                            <td class='active'>{{ $materia->nombreMateria }}</td>
                            <td class="active">{{ $tarea_doc->grupo }}</td>
                            <td class="active"><a href="{{ $tarea->file }}" download>Descargar</a></td>
                            <td class="active">
                                @if($tarea->calificacion > 0)
                                    <input type="number" style="width: 20%" min="0" max="{{$tarea_doc->ponderacion}}" value="{{$tarea_doc->ponderacion}}" disabled>
                                @else
                                    <input type="number" style="width: 20%" min="0" max="{{$tarea_doc->ponderacion}}" value="{{$tarea_doc->ponderacion}}" name="calificacion" id="calificacion">
                                @endif
                            </td>
                            <td class="active">
                                @if($tarea->calificacion > 0)
                                    <span>{{ $tarea->calificacion }}</span>
                                @else
                                    <span>{{ $tarea->calificacion }}</span>
                                @endif
                            </td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection

