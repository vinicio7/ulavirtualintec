@extends('layouts.main')
@section('content')
    @if(Session::has('message'))
        <div class="alert alert-dismissible alert-success" class="col-md-10">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <i class="fa fa-check-square"></i>{{Session::get('message')}}
        </div>
    @endif
    @if(Session::has('update'))
        <div class="alert alert-dismissible alert-success" class="col-md-10">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <i class="fa fa-check-square"></i>Docente Actualizado!!
        </div>
    @endif

    <div class="row border-bottom white-bg dashboard-header">
        <h2>Modificar Docente</h2>
        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <th>Id</th>
            <th>DPI</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Sexo</th>
            <th>Fecha de Nacimiento</th>
            <th>Direccion</th>
            <th>Parentesco</th>
            <th>Nombres</th>
            <th>Telefono</th>
            <th colspan="2">Acción</th>
            </thead>
            @foreach($docentes as $docente)
                @if($docente->role == 'docente')
                    <tbody>
                    <td>{{$docente->id}}</td>
                    <td>{{$docente->dpi}}</td>
                    <td>{{$docente->nombres}}</td>
                    <td>{{$docente->paterno}}</td>
                    <td>{{$docente->materno}}</td>
                    <td>{{$docente->email}}</td>
                    <td>{{$docente->telefono}}</td>
                    <td>{{$docente->sexo}}</td>
                    <td>{{$docente->fnac}}</td>
                    <td>{{$docente->direccion}}</td>
                    <td>{{$docente->parentesco}}</td>
                    <td>{{$docente->nomYap}}</td>
                    <td>{{$docente->tel}}</td>
                    <td>
                        {!! link_to_route('editDocente',
                                            $title = 'Editar',
                                            $parameters = $docente->id,
                                            $attributes = ['class'=>'btn btn-primary']) !!}

                    </td>
                    <td>
                        {!! Form::open(['route'=>['eliminar',$docente->id],'method'=>'DELETE']) !!}
                        {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>

                    </tbody>
                @endif
            @endforeach
        </table>

        </div>
        <br>
        {!! link_to_action('PdfController@docentes', $title = 'Imprimir', $parameters = null, $attributes = ['class'=> 'btn btn-primary']) !!}

    </div>
@endsection

