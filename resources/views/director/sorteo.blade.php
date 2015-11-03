@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
    <h3>Sorteo de grupos</h3>
        <hr>
        <a href="{{ url('sortear') }}" class="btn btn-primary">Sortear Grupos</a>
        {{--{!! link_to_action('PdfController@cursantes', $title = 'Imprimir', $parameters = array(), $attributes = array() !!}--}}
        @if($shuffled)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <th>CI</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    </thead>
                    @foreach($shuffled as $cursante)
                        <tbody>
                            <td>{{$cursante->id}}</td>
                            <td>{{$cursante->nombres}}</td>
                            <td>{{$cursante->paterno}}</td>
                            <td>{{$cursante->materno}}</td>
                        </tbody>
                    @endforeach
                </table>
            </div>
        @endif

    </div>
@endsection