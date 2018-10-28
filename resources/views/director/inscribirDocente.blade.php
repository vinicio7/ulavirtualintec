@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        <h2>Nuevo Docente</h2>
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
                <i class="fa fa-check-square"></i>Docente Creado!!
            </div>
        @endif
        <form class="form-horizontal" action="nuevoDocente" method="post" data-toggle="validator"><!--ponwer action osea la ruta -->
            <fielset>
                <h3 class="col-md-offset-1" style="font-weight: bold;color:black">Datos de Usuario</h3>
                <hr>
                <div class="form-group has-feedback">
                    <label for="ci"class="col-sm-3 control-label">DPI</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Documento de identificacion" name="id" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Lugar de origen</label>
                    <div class="col-sm-4">
                       <select class="form-control" placeholder="Expedido en:" name="expedido">
                            <option value="LP">Barberena</option>
                            <option value="CBBA">Casillas</option>
                            <option value="SCZ">Chiquimulilla</option>
                            <option value="P">Cuilapa</option>
                            <option value="O">Nueva Santa Rosa</option>
                            <option value="S">Oratorio</option>
                            <option value="Ta">Pueblo nuevo Viñas</option>
                            <option value="PA">Santa Cruz Naranjo</option>
                            <option value="BE">Otro</option>
                        </select>
                    </div>
                </div>

                <div class="form-group has-feedback">
                    <label for="Nickname"class="col-sm-3 control-label">Nombre de Usuario</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="nombre de Usuario" name="nickname" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label for="password"class="col-sm-3 control-label">Contraseña</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <h3 class="col-md-offset-1" style="font-weight: bold;color:black">Datos Personales</h3>
                <hr>
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
                <div class="form-group">
                    <label for="ApellidoM"class="col-sm-3 control-label">Apellido Materno</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Apellido Materno" name="materno">

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

                        <select class="form-control" placeholder="Sexo" name="sexo">
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fnac"class="col-sm-3 control-label">Fecha de nacimiento</label>
                    <div class="col-sm-9">
                            <input type="date" name="fnac">    
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label for="Direccion"class="col-sm-3 control-label">Dirección</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Dirección" name="direccion" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <h3 class="col-md-offset-1" style="font-weight: bold;color:black">Persona de referencia</h3>
                <hr>
                <div class="form-group has-feedback">
                    <label for="parentesco"class="col-sm-3 control-label">Parentesco</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Parentesco" name="parentesco" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label class="col-sm-3 control-label">Nombre y Apellido</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Nombres y Apellidos" name="nomYap" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label class="col-sm-3 control-label">Telefono</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Telefono" name="tel" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                
                <!--<h3 class="col-md-offset-1">Datos Profesionales</h3>
                <hr>
                <div class="form-group has-feedback">
                    <div class="form-group has-feedback">
                        <label for="Profesion"class="col-sm-3 control-label">Profesión</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="profesion" id="Profesion" onclick="acc()">
                                <option value="">Eliga una opcion</option>
                                <option value="militar">MILITAR</option>
                                <option value="policia">POLICIA</option>
                                <option value="civil">CIVIL</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div id="civ" class="hidden form-group">
                    <label class="col-sm-3 control-label" id="g">Grado</label>
                    <div class="col-sm-9">
                        <select class="form-control" placeholder="" name="grade_idc" id="civil">
                            @foreach($grados as $grado)
                                @if($grado->fuerza == 'civil')
                                    <option value="{{$grado->id}}">{{$grado->id}} {{$grado->grado}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div id="mil" class="hidden form-group">
                    <label class="col-sm-3 control-label" id="gg">Grado</label>
                    <div class="col-sm-9">
                        <select class="form-control" placeholder="" name="grade_idm" id="militar">
                            @foreach($grados as $grado)
                                @if($grado->fuerza == 'militar')
                                    <option value="{{$grado->id}}">{{$grado->id}} {{$grado->grado}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div id="pol" class="hidden form-group">
                    <label class="col-sm-3 control-label" id="ggg">Grado</label>
                    <div class="col-sm-9">
                        <select class="form-control" placeholder="" name="grade_idp" id="policia">
                            @foreach($grados as $grado)
                                    <option value="{{$grado->id}}">{{$grado->id}} {{$grado->grado}}</option>
                               
                            @endforeach
                        </select>
                    </div>
                </div>-->
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
