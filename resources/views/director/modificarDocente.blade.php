@extends('layouts.main')
@section('content')
    @if(Session::has('update'))
        <div class="alert alert-dismissible alert-success" class="col-md-10">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <i class="fa fa-check-square"></i>Cursante Actualizado!!
        </div>
    @endif

    <div class="row border-bottom white-bg dashboard-header">
        <h2>Modificar Cursante</h2>
        <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
            <th>CI</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Sexo</th>
            <th>Fecha de Nacimiento</th>
            <th>Direccion</th>
            <th>Grado/Profesión</th>
            <th>Acción</th>
            </thead>
            @foreach($docentes as $docente)
                @if($docente->role == 'docente')
                    <tbody>
                    <td>{{$docente->id}}</td>
                    <td>{{$docente->nombres}}</td>
                    <td>{{$docente->paterno}}</td>
                    <td>{{$docente->materno}}</td>
                    <td>{{$docente->email}}</td>
                    <td>{{$docente->telefono}}</td>
                    <td>{{$docente->sexo}}</td>
                    <td>{{$docente->fnac}}</td>
                    <td>{{$docente->direccion}}</td>
                    @if($docente->grado == 'Civil')
                        <td>{{$docente->profesion}}</td>
                    @else
                        <td>{{$docente->grado}}</td>
                    @endif
                    <td>
                        {!! link_to_route('editDocente',
                                            $title = 'Editar',
                                            $parameters = $docente->id,
                                            $attributes = ['class'=>'btn btn-primary']) !!}

                    </td>

                    </tbody>
                @endif
            @endforeach
        </table>
        </div>


    </div>
@endsection

