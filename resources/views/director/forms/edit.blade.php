<fielset>
    <h3 class="col-md-offset-1">Datos de Usuario</h3>
    <hr>
    <div class="form-group has-feedback">
        {!! Form::label('id', 'Carnet de Identidad', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::text('id',null,['class'=>'form-control', 'placeholder'=>'Carnet de Identidad']) !!}
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('expedido', 'Expedido', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-4">
            {!! Form::select('expedido', array('LP' => 'La Paz', 'CBBA' => 'Cochabamba','SCZ'=>'Santa Cruz', 'P'=>'Potosi', 'O'=>'Oruro','S'=>'Chuquisaca','TA'=>'Tarija','PA'=>'Pando','BE'=>'Beni')) !!}

        </div>
    </div>

    <div class="form-group has-feedback">
        {!! Form::label('nickname', 'Nombre de Usuario', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::text('nickname',null,['class'=>'form-control', 'placeholder'=>'Nombre de Usuario']) !!}
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
    <div class="form-group has-feedback">
        {!! Form::label('password', 'Contraseña', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::password('password', array('class' => 'form-control','placeholder'=>'Ingrese la contraseña')) !!}
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
    <h3 class="col-md-offset-1">Datos Personales</h3>
    <hr>
    <div class="form-group has-feedback">
        {!! Form::label('nombres', 'Nombre', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::text('nombres',null,['class'=>'form-control', 'placeholder'=>'Nombre']) !!}
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
    <div class="form-group has-feedback">
        {!! Form::label('paterno', 'Apellido Paterno', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::text('paterno',null,['class'=>'form-control', 'placeholder'=>'Apellido Paterno','required'=>'required']) !!}
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
    <div class="form-group has-feedback">
        {!! Form::label('materno', 'Apellido Materno', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::text('materno',null,['class'=>'form-control', 'placeholder'=>'Apellido Materno']) !!}
        </div>
    </div>
    <div class="form-group has-feedback">
        {!! Form::label('email', 'Email', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::text('email',null,['class'=>'form-control', 'placeholder'=>'ejemplo@email.com']) !!}
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
    <div class="form-group has-feedback">
        {!! Form::label('telefono', 'Telefono', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::text('telefono',null,['class'=>'form-control', 'placeholder'=>'Telefono']) !!}
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('sexo', 'Sexo', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::select('sexo', array('masculino' => 'Masculino', 'femenino' => 'Femenino')) !!}
        </div>
    </div>
    <div class="form-group has-feedback">
        {!! Form::label('fnac', 'Fecha de Nacimiento', array('class' => 'col-sm-3 control-label')) !!}
        {!! Form::date('fnac', \Carbon\Carbon::now()) !!}

    </div>

    <h4 class="col-md-offset-1">Direccion</h4>
    <hr>
    <div class="form-group has-feedback">
        {!! Form::label('direccion', 'Dirección', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::text('direccion',null,['class'=>'form-control', 'placeholder'=>'Direccion']) !!}
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
    <h3 class="col-md-offset-1">Datos Profesionales</h3>
    <hr>
    <div class="form-group has-feedback">
        {!! Form::label('grade_id', 'Grado', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::select('grade_id', array('1' => 'CIVIL','2' => 'CN. DAEN.','3' => 'CN. DEMN.','4' => 'CF. DEMN.','5' => 'CF. DIM.','6' => 'CC. DEMN.','7' => 'CC. DIM.','8' => 'CNL. DEM.','9' => 'CNL. DIM.','10' => 'TCNL. DEM.','11' => 'TCNL. DIM.')) !!}{{-- si quieres ->* , null, ['class' => 'form-control'] *<-  --}}
        </div>
    </div>
    <div class="form-group has-feedback">

        {!! Form::label('profesion', 'Profesión', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">

            {!! Form::text('profesion',null,['class'=>'form-control', 'placeholder'=>'Profesión']) !!}
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
        </div>
    </div>
</fielset>