@extends('layouts.main')
@section('content')
<div class="row border-bottom white-bg dashboard-header">
    <h3>Nueva Materia</h3>
    @if(Session::has('message'))
        <div class="alert alert-dismissible alert-success" class="col-md-10">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <i class="fa fa-check-square"></i> {{Session::get('message')}}
        </div>
    @endif
    <form class="form-horizontal" action="{{route('asignarMateria',[$id])}}" method="post">
        <fielset>
            <div class="form-group">
                <label class="col-sm-3 control-label">Gestion</label>
                <div class="col-sm-4">
                    <select class="form-control" placeholder="Gestion Academica" name="gestion">
                        <option value="I/2015">I/2015</option>
                        <option value="II/2015">II/2015</option>
                        <option value="I/2016">I/2016</option>
                        <option value="II/2016">II/2016</option>
                        <option value="I/2017">I/2017</option>
                        <option value="II//2017">II/2017</option>
                        <option value="I/2018">I/2018</option>
                        <option value="II/2018">II/2018</option>
                        <option value="I/2019">I/2019</option>
                        <option value="II/2019">II/2019</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Materia</label>
                <div class="col-sm-4">
                    <select class="form-control" placeholder="Gestion Academica" name="materia_id" id="materia_id">
                        <?php
                        foreach( $quu as $mat){
                            echo '<option value="'.$mat->id.'">'. $mat->nombreMateria .'</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Unidad Academica</label>
                <div class="col-sm-4">
                    <select class="form-control" placeholder="Unidad Academica" name="ua_id">
                        <option value="1">La Paz</option>
                        <option value="2">Cochabamba</option>
                        <option value="3">Santa Cruz</option>

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
