@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        <h2>Nuevo Cursante</h2>
        <hr>
        @if($errors->has())
            <div class="alert alert-warning" role="alert">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif



        <form class="form-horizontal" action="nuevoCursante" method="post" data-toggle="validator"><!--ponwer action osea la ruta -->
            <fielset>
                <h3 class="col-md-offset-1">Datos de Usuario</h3>
                <hr>
                <div class="form-group has-feedback">
                    <label for="ci"class="col-sm-3 control-label">CI</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Carnet de Identidad" name="id" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Expedido</label>
                    <div class="col-sm-4">
                        <select class="form-control" placeholder="Expedido en:" name="expedido">
                            <option value="LP">La Paz</option>
                            <option value="CBBA">Cochabamba</option>
                            <option value="SCZ">Santa Cruz</option>
                            <option value="P">Potosi</option>
                            <option value="O">Oruro</option>
                            <option value="S">Chuquisaca</option>
                            <option value="Ta">Tarija</option>
                            <option value="PA">Pando</option>
                            <option value="BE">Beni</option>
                        </select>
                    </div>
                </div>

                <div class="form-group has-feedback">
                    <label for="Nickname"class="col-sm-3 control-label">Nombre de Usuario</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Nickname" name="nickname" required="required">
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
                <h3 class="col-md-offset-1">Datos Personales</h3>
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
                <div class="form-group has-feedback">
                    <label for="fnac"class="col-sm-3 control-label">Fecha de nacimiento</label>
                    <input type="date" name="fnac">
                </div>

                <h3 class="col-md-offset-1">Persona de referencia</h3>
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
                <h4 class="col-md-offset-1">Direccion</h4>
                <hr>
                <div class="form-group has-feedback">
                    <label for="Direccion"class="col-sm-3 control-label">Dirección</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Dirección" name="direccion" required="required">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <h3 class="col-md-offset-1">Datos Profesionales</h3>
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
                                @if($grado->fuerza == 'policia')
                                    <option value="{{$grado->id}}">{{$grado->id}} {{$grado->grado}}</option>
                                @endif
                            @endforeach
                        </select>
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
@section('scripts')
    <script>
        function acc(){
            var prof = document.getElementById('Profesion').value;

            switch(prof) {
                case 'civil':
                    document.getElementById('pol').classList.add('hidden');
                    document.getElementById('mil').classList.add('hidden');
                    document.getElementById('civ').classList.remove('hidden');
                break;
                case 'policia':
                    document.getElementById('civ').classList.add('hidden');
                    document.getElementById('mil').classList.add('hidden');
                    document.getElementById('pol').classList.remove('hidden');

                    break;
                case 'militar':
                    document.getElementById('civ').classList.add('hidden');
                    document.getElementById('pol').classList.add('hidden');
                    document.getElementById('mil').classList.remove('hidden');
                    break;
            }
        }
    </script>
@endsection

        <option value="">{{$grado->id}} {{$grado->grado}}</option>
