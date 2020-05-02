@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
    {!! Form::model($docente,['route'=>['upDocente', $docente->id],'method'=>'PUT', 'class'=>'form-horizontal', 'data-toggle'=>'validator']) !!}
    @include('director.forms.edit')
    {!! Form::close() !!}
    </div>
@endsection
@section('scripts')
    <script>
        function acc(){
            var prof = document.getElementById('Profesion').value;

            switch(prof) {
                case 'civil':
                    document.getElementById('mil').classList.add('hidden');
                    document.getElementById('pol').classList.add('hidden');
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
