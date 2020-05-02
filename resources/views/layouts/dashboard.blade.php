@extends('layouts.main')
@section('content')

<?php
    use App\Entities\User;
    use App\Entities\Tarea;
    use App\Entities\Horarios;
    $grados = User::all();
    $count = count($grados);
    $users = User::orderby('created_at','DESC')->get(); 
    $contador = 0;
    $visitantes = \DB::table('visitas_login')->first();
    $calculo_visitantes = $visitantes->numero;
    $nuevos_mensajes = \DB::table('bandeja')->where('id_user',auth()->user()->id)->where('estado',0)->get();
    $cantidad_mensajes = count ($nuevos_mensajes);
    $horarios = Horarios::all();
    //$tareas_ = Tareas::where()
?>
<div class="inner-block">
<!--market updates updates-->
   <div class="market-updates">
      <div class="col-md-4 market-update-gd">
        <div class="market-update-block clr-block-1">
          <div class="col-md-8 market-update-left">
            <h3>{{ $count }}</h3>
            <h4>Usuarios Registrados</h4>
            <p>Incluye Administradores, Catedraticos y Estudiantes</p>
          </div>
          <div class="col-md-4 market-update-right">
            <i class="fa fa-file-text-o"> </i>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
      <div class="col-md-4 market-update-gd">
        <div class="market-update-block clr-block-2">
         <div class="col-md-8 market-update-left">
          <h3>{{ $calculo_visitantes }}</h3>
          <h4>Visitantes</h4>
          <p>Conteo del total de visitantes que ha tenido la plataforma</p>
          </div>
          <div class="col-md-4 market-update-right">
            <i class="fa fa-eye"> </i>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
      <div class="col-md-4 market-update-gd">
        <div class="market-update-block clr-block-3">
          <div class="col-md-8 market-update-left">
            <h3>{{$cantidad_mensajes}}</h3>
            <h4>Nuevos Mensajes</h4>
            <p>Se ha recibido mensajeria con dudas o consultas</p>
          </div>
          <div class="col-md-4 market-update-right">
            <i class="fa fa-envelope-o"> </i>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
       <div class="clearfix"> </div>
    </div>
<!--market updates end here-->
<!--mainpage chit-chating-->
<br>
<div class="chit-chat-layer1">
  <div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Usuarios recientes
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Usuario</th>
                                      <th>Tipo</th>                                                              
                                      <th>Nombre</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($users as $user)
                                <?php
                                    $contador++;
                                    $nombre = '';
                                    if ($user->role == 'cursante') {
                                      $nombre = 'Alumno';
                                    }elseif ($user->role == 'admin') {
                                      $nombre = 'Administrador';
                                    }elseif ($user->role == 'docente') {
                                      $nombre  = 'Docente';
                                    }
                                ?>
                                @if($contador < 11)
                                  <tr>  
                                    <td>{{ $contador}}</td>
                                    <td>{{ $user->nickname}}</td>
                                    <td>{{ $nombre}}</td> 
                                    <td>{{ $user->nombres}} {{ $user->paterno}} {{ $user->materno}}</td>                                
                                 </tr>
                               @endif  
                              @endforeach
                          </tbody>
                      </table>
                  </div>
             </div>
      </div>
      <div class="col-md-6 chit-chat-layer1-rit">     
        <div class="main-page-chart-layer1">
          <div class="col-md-12 chart-layer2-right">
      <div class="prograc-blocks">
         <!--Progress bars-->
          <div class="home-progres-main">
             <h3>Tareas entregadas por grupo</h3>
           </div>
          <div class='bar_group' style="height: 200px;width: 430px; overflow-y: auto;">
            @foreach($horarios as $horario)
            <?php
              $tareas = Tarea::Where('grupo',$horario->id)->get();
              $contador = count($tareas);
            ?>
              <div style="margin-right: 15px" class='bar_group__bar thin' label='{{$horario->descripcion}}' show_values='true' tooltip='false' value='{{$contador}}'></div>
            @endforeach
        </div>

        <!--//Progress bars-->
        </div>
  </div>
    </div>
   <div class="clearfix"> </div>
  </div>
      </div>
     <div class="clearfix"> </div>
</div>
<!--main page chit chating end here-->
<!--main page chart start here-->
<div class="main-page-charts">
   
 </div>
@endsection