@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        <h3>Nuevo Cursante</h3>
        <hr>
        @if($errors->has())
            <div class="alert alert-warning" role="alert">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        @if(Session::has('status'))
        <div class="alert alert-dismissible alert-success" class="col-md-10">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <i class="fa fa-check-square"></i>Usuario Creado!!
        </div>
        @endif
        <form class="form-horizontal" action="nuevoCursante" method="post" data-toggle="validator"><!--ponwer action osea la ruta -->
            <fielset>
                <div class="form-group has-feedback">
                    <label for="Nickname"class="col-sm-3 control-label">Nickname</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Nickname" name="nickname" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label for="Password"class="col-sm-3 control-label">Contraseña</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label for="Nombre"class="col-sm-3 control-label">Nombre</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombres" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label for="ApellidoP"class="col-sm-3 control-label">Apellido Paterno</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Apellido Paterno" name="paterno" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label for="ApellidoM"class="col-sm-3 control-label">Apellido Materno</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Apellido Materno" name="materno" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label for="Email"class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" placeholder="email" name="email" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label for="Telefono"class="col-sm-3 control-label">Telefono</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Telefono" name="telefono" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Sexo"class="col-sm-3 control-label">Sexo</label>
                    <div class="col-sm-9">

                        <select class="form-control" placeholder="Sexo">
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                        </select>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label for="Telefono"class="col-sm-3 control-label">Fecha de nacimiento</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" placeholder="dd/mm/aa" name="fnac" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                {{--<div class="control-group">
                    <label for="date-picker-2" class="col-sm-3 control-label">Fecha de Nacimiento</label>
                    <div class="controls">
                        <div class="input-group col-sm-9">
                            <input id="date-picker-2" type="text" class="date-picker form-control" />
                            <label for="date-picker-2" class="input-group-addon btn"><span class="glyphicon glyphicon-calendar"></span>

                            </label>
                        </div>
                    </div>
                </div>--}}
                <div class="form-group has-feedback">
                    <label for="Direccion"class="col-sm-3 control-label">Dirección</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Dirección" name="direccion" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label for="Profesion"class="col-sm-3 control-label">Profesión</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Profesión" name="profesion" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="reset" class="btn btn-default">Cancelar</button>

                    </div>
                </div>

            </fielset>
        </form>


    </div>

@endsection