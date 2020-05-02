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
    $tareas = CalificarTareas::where('tarea_id',$id)->get();
?>
<div class="row border-bottom white-bg dashboard-header">
        <div class="table table-striped">
            <table class="table text-center table table-hover">
                <tr>
                    <td class="success" width="30%">Nombre alumno</td>
                    <td class="success" width="20%">Tarea</td>
                    <td class="success" width="10%">Archivo</td>
                    <td class="success" width="20%">Ponderacion</td>
                    <td class="success" width="20%">Calificar</td>
                </tr>

                @foreach($tareas as $tarea)
                    <tr>
                        <form class="form-horizontal" action="{{route('calificar_tarea',$tarea->id)}}" method="put"  data-toggle="validator">
                        <?php
                            $alumno = User::where('id',$tarea->alumno_id)->first();
                            $tarea_doc  = Tarea::where('id',$tarea->tarea_id)->first();
                        ?>
                            <td class='active'>{{ $alumno->nombres }}{{ $alumno->paterno }}{{ $alumno->materno }}</td>
                            <td class="active">{{ $tarea_doc->nombre }}</td>
                            <td class="active"><a href="{{ $tarea->file }}" download>Descargar</a></td>
                            <td class="active">
                                @if($tarea->calificacion > 0)
                                    <input type="number" style="width: 20%" min="0" max="{{$tarea_doc->ponderacion}}" value="{{$tarea->calificacion}}" disabled>
                                @else
                                    <input type="number" style="width: 20%" min="0" max="{{$tarea_doc->ponderacion}}" value="{{$tarea->calificacion}}" name="calificacion" id="calificacion">
                                @endif
                            </td>
                            <td class="active">
                                @if($tarea->calificacion > 0)
                                    <button type="submit" class="btn btn-success" disabled>Calificar</button>
                                @else
                                        <button type="submit" class="btn btn-success">Calificar</button>
                                @endif
                            </td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection

