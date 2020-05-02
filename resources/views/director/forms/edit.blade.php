<fielset>
    <h3 class="col-md-offset-1" style="font-weight: bold;color:black">Datos de Usuario</h3>
    <hr>
    <div class="form-group has-feedback">
        {!! Form::label('id', 'DPI', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::text('dpi',null,['class'=>'form-control', 'placeholder'=>'Carnet de Identidad']) !!}
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('expedido', 'Expedido', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-4">
            {!! Form::select('expedido', array('LP' => 'Barberena', 'CBBA' => 'Casillas','SCZ'=>'Chiquimulilla', 'P'=>'Cuilapa', 'O'=>'Nueva Santa Rosa','S'=>'Oratorio','TA'=>'Pueblo Nuevo Viñas','PA'=>'Santa Cruz Naranjo','BE'=>'Otros')) !!}

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
    <h3 class="col-md-offset-1" style="font-weight: bold;color:black">Datos Personales</h3>
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
        <div class="col-sm-9">
        {!! Form::date('fnac', \Carbon\Carbon::now()) !!}
        </div>
    </div>
    <h3 class="col-md-offset-1" style="font-weight: bold;color:black">Persona de referencia</h3>
    <hr>
    <div class="form-group has-feedback">
        <label for="parentesco"class="col-sm-3 control-label">Parentesco</label>
        <div class="col-sm-9">

            {!! Form::text('parentesco',null,['class'=>'form-control', 'placeholder'=>'Parentesco']) !!}
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
    <div class="form-group has-feedback">
        <label class="col-sm-3 control-label">Nombre y Apellido</label>
        <div class="col-sm-9">
            {!! Form::text('nomYap',null,['class'=>'form-control', 'placeholder'=>'Nombres y Apellidos']) !!}
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
    <div class="form-group has-feedback">
        <label class="col-sm-3 control-label">Telefono</label>
        <div class="col-sm-9">
            {!! Form::text('tel',null,['class'=>'form-control', 'placeholder'=>'Telefono']) !!}
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
    <div class="form-group has-feedback">
        {!! Form::label('direccion', 'Dirección', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::text('direccion',null,['class'=>'form-control', 'placeholder'=>'Direccion']) !!}
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
    
   
    <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
        </div>
    </div>
</fielset>