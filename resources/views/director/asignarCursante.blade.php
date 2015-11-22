@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        <h3>Cursantes</h3>
        @if($cursantes)
        <div class="container">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <th>CI</th>
                    <th>Nombres</th>
                    <th>Materia</th>
                    <th>Gestion</th>
                    <th>Grupo</th>
                    <th>Acción</th>
                    </thead>
                    @foreach($cursantes as $cursante)
                    <tbody >
                    <td>{{$cursante->id}}</td>
                    <td>{{$cursante->nombres}} {{$cursante->paterno}} {{$cursante->materno}}</td>
                    <td>{{$cursante->materia_id}}</td>
                    <td>{{$cursante->gestion}}</td>
                    <td>{{$cursante->grupo}}</td>
                    <td>
                        {!! link_to_route('asignarMateria',
                                                    $title = 'Asignar',
                                                    $parameters = $cursante->id,
                                                    $attributes = ['class'=>'btn btn-primary']) !!}
                    </td>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @else
    <p>No hay Cursantes Registrados</p>
    @endif
@endsection