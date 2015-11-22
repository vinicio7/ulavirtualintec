@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        <h3>Docentesd</h3>
        @if($docentes)
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <th>CI</th>
                        <th>Nombreslkjlkj</th>
                        <th>Materia</th>
                        <th>Gestión</th>
                        <th>Acción</th>
                        </thead>
                        @foreach($docentes as $docente)
                            <tbody >
                            <td>{{$docente->id}}</td>
                            <td>{{$docente->nombres}} {{$docente->paterno}} {{$docente->materno}}</td>
                            <td>{{$docente->materia_id}}</td>
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