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
            <i class="fa fa-check-square"></i>Cursante Actualizado!!
        </div>
    @endif

    <div class="row border-bottom white-bg dashboard-header">
        <h2>Modificar Cursante</h2>

        <div class="table-responsive">
            <table class="table table-hover ">
                <thead>
                    <th>CI</th>
                    <th>Grado/Profesión</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Sexo</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Direccion</th>

                    <th colspan="2">Acción</th>
                </thead>
                @foreach($cursantes as $cursante)
                    @if($cursante->role == 'cursante')
                    <tbody>
                    <td>{{$cursante->id}}</td>
                    @if($cursante->grado == 'Civil')
                        <td>{{$cursante->profesion}}</td>
                    @else
                        <td>{{$cursante->grado}}</td>
                    @endif
                    <td>{{$cursante->nombres}}</td>
                    <td>{{$cursante->paterno}}</td>
                    <td>{{$cursante->materno}}</td>
                    <td>{{$cursante->email}}</td>
                    <td>{{$cursante->fnac}}</td>
                    <td>{{$cursante->telefono}}</td>
                    <td>{{$cursante->sexo}}</td>
                    <td>{{$cursante->direccion}}</td>
                    <td>
                            {!! link_to_route('editCursante',
                                            $title = 'Editar',
                                            $parameters = $cursante->id,
                                            $attributes = ['class'=>'btn btn-primary']) !!}
                    </td>
                    <td>
                        {!! Form::open(['route'=>['eliminar',$cursante->id],'method'=>'DELETE']) !!}
                        {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>

                    </tbody>
                    @endif
                    @endforeach
            </table>
        </div>
        <br>
        {!! link_to_action('PdfController@cursantes', $title = 'Imprimir', $parameters = null, $attributes = ['class'=> 'btn btn-primary']) !!}
    </div>
@endsection

