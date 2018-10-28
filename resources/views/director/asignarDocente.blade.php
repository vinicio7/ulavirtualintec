@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        <h3>Docentes</h3>
        @if($docentes)
            <div class="container">
                <div class="table-responsive" style="margin-right: 100px;">
                    <table class="table table-hover">
                        <thead>
                        <th>DPI</th>
                        <th>Nombres</th>
                        <th>Curso</th>
                        <th>Gestión</th>
                        <th>Acción</th>
                        </thead>
                        @foreach($docentes as $docente)
                            <tbody >
                            <td>{{$docente->id}}</td>
                            <td>{{$docente->nombres}} {{$docente->paterno}} {{$docente->materno}}</td>
                            
                            <?php
                                $materia_nombre = '';
                                //$materia =  Materia::where('id',$cursante->materia_id)->first();
                                $materia = \DB::table('materias')->where('id',$docente->materia_id)->first();
                                if ($materia){
                                    $materia_nombre = $materia->nombreMateria;
                                }else
                                {
                                    $materia_nombre = "Sin asignar";
                                }
                            ?>
                            <td>{{$materia_nombre}}</td>

                            <td>{{$docente->gestion}}</td>
                            <td>
                                {!! link_to_route('asignarContrato',
                                                            $title = 'Asignar',
                                                            $parameters = $docente->id,
                                                            $attributes = ['class'=>'btn btn-primary']) !!}
                            </td>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
    </div>
    @else
        <p>No existen Docentes</p>
    @endif
@endsection