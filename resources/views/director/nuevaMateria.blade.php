@extends('layouts.main')
@section('content')
<?php
    use App\Entities\Materia;
    use App\Entities\Horarios;
    $materias = Materia::all();
    $horarios = Horarios::all();
?>
<div class="row border-bottom white-bg dashboard-header">
    <h3>Asignacion alumnos</h3>
    @if(Session::has('message'))
        <div class="alert alert-dismissible alert-success" class="col-md-10">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <i class="fa fa-check-square"></i> {{Session::get('message')}}
        </div>
    @endif
    <form class="form-horizontal" action="{{route('asignarMateria',[$id])}}" method="post">
        <fielset>
            <div class="form-group">
                <label class="col-sm-3 control-label">Horario</label>
                <div class="col-sm-4">
                    <select class="form-control" placeholder="Gestion Academica" name="gestion">
                        @foreach($horarios as $horario)
                            <option value="{{$horario->id}}">{{$horario->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Curso</label>
                <div class="col-sm-4">
                    <select class="form-control" placeholder="Gestion Academica" name="materia_id" id="materia_id">
                         @foreach($materias as $curso)
                            <option value="{{$curso->id}}">{{$curso->nombreMateria}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Sede</label>
                <div class="col-sm-4">
                    <select class="form-control" placeholder="Sede" name="ua_id">
                        <option value="1">Unica</option>
                        <option value="2">1</option>
                        <option value="3">2</option>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </fielset>
    </form>
    <form class="form-horizontal" action="{{url('asignar')}}" method="get" data-toggle="validator">
                    <center><button class="btn btn-danger"><i class="fa fa-undo"></i> Regresar</button></center>
                </form>
</div>
@endsection
