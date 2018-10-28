@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        <h3>Asignacion Docente</h3>
        @if(Session::has('message'))
            <div class="alert alert-dismissible alert-success" class="col-md-10">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <i class="fa fa-check-square"></i> {{Session::get('message')}}
            </div>
        @endif
        <form class="form-horizontal" action="{{route('asignarContrado',[$id])}}" method="post">
            <fielset>

                <div class="form-group">
                <label class="col-sm-3 control-label">Horario</label>
                <div class="col-sm-4">
                    <select class="form-control" placeholder="Gestion Academica" name="gestion">
                        <option value="Sabado 7:00 - 10:00">Sabado 7:00 - 10:00</option>
                        <option value="Sabado 10:00 - 1:00">Sabado 10:00 - 1:00</option>
                        <option value="Sabado 01:00 - 04:00">Sabado 01:00 - 04:00</option>
                        <option value="Sabado 04:00 - 07:00">Sabado 04:00 - 07:00</option>
                        <option value="Domingo 7:00 - 10:00">Domingo 7:00 - 10:00</option>
                        <option value="Domingo 10:00 - 1:00">Domingo 10:00 - 1:00</option>
                        <option value="Domingo 01:00 - 04:00">Domingo 01:00 - 04:00</option>
                        <option value="Domingo 04:00 - 07:00">Domingo 04:00 - 07:00</option>
                    </select>
                </div>
            </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Curso</label>
                    <div class="col-sm-4">
                        <select class="form-control" placeholder="Gestion Academica" name="materia_id">
                            <?php
                            foreach( $quu as $mat){
                                echo '<option value="'.$mat->id.'">'. $mat->nombreMateria .'</option>';
                            }
                            ?>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Grupo</label>
                    <div class="col-sm-4">
                        <select class="form-control" placeholder="Unidad Academica" name="ua_id">
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
    </div>
@endsection