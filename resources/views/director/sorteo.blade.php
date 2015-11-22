@extends('layouts.main')
@section('content')
    <div class="row border-bottom white-bg dashboard-header">
    <div class="row">
        <h3>Sorteo de grupos</h3>
        {!! link_to_action('PdfController@grupos', $title = 'Imprimir', $parameters = $materia, $attributes = ['class'=> 'btn btn-primary']) !!}
    </div>
        <hr>
        <br>
        @if($shuffled)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <th>CI</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    </thead>
                        <tbody id="datos">
                        @foreach($shuffled as $cursante)
                            <tr>
                                <td id="ci">{{$cursante->id}}</td>
                                <td>{{$cursante->nombres}}</td>
                                <td>{{$cursante->paterno}}</td>
                                <td>{{$cursante->materno}}</td>
                                <td id="grupo">
                                </td>


                            </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        @endif

    </div>
@endsection
@section('scripts')
    <script>

        $(document).ready(function(){
            recargar();
            var tabla = document.getElementById('datos').getElementsByTagName('tr');
            var n = tabla.length;
            //var num = $("#numero").val();
            var num =  <?php echo $numero ; ?> ;

            if( num <2 ){
                alert("no puedes formar grupos de menos de dos integrantes");
            }else{
                var cont = 1;

                tabla[0].classList.add('info');

                for(i=0;i<=n;++i){
                    //console.log(grupo);
                    //group[i].innerHTML = grupo;
                        if(cont == num ){

                            tabla[i+1].classList.add('info');
                            cont =0;
                            grupo++;
                        }

                        cont++;
                    //grupo ++;
                    //tabla[i].classList.add('info');
                    //console.log(document.getElementById('ci'));
                    //console.log(document.tabla[i].getElementById('ci'));
                    //cadena = document.getElementById('ci');
                    //console.log(cadena);
                }
            }
        });
        function recargar(){
            var tabla = document.getElementById('datos').getElementsByTagName('tr');

            $('#datos tr').removeClass('info');
        }

    </script>
@endsection