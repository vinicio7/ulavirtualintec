<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula virtual</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="css/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


</head>
<style type="text/css">
    #myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}
#myTable {
    border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
}
#myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
}
#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd; 
}
#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}
</style>
<body style="background-color: #202121">
<div id="wrapper" style="background-color: #202121">
 {{--modal--}}
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title" id="myModalLabel">Perfil</h2>
                </div>
                <form class="form-horizontal" action="{{route('subirImagen')}}" method="post" enctype="multipart/form-data" data-toggle="validator">
                <div class="modal-body">
                        <div class="form-group has-feedback" >
                            <input type="text" name="id_user" id="id_user" value="{{ auth()->user()->id }}" hidden="">
                            <label for="foto">Fotografia</label>
                            <input type="file" name="foto" id="foto" accept=".jpg">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Guardar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{--modal--}}
    @if($errors->has())
        <div class="alert alert-warning" role="alert">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif
    @if(Session::has('message2'))
        <div class="alert alert-dismissible alert-success" class="col-md-10">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <i class="fa fa-check-square"></i>{{Session::get('message2')}}
        </div>
    @endif
    @if(Session::has('status2'))
        <div class="alert alert-dismissible alert-success" class="col-md-10">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <i class="fa fa-check-square"></i>Fotografia Subida!!
        </div>
    @endif
    <nav class="navbar-default navbar-static-side" role="navigation" style="background-color: #202121">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu" style="background-color: #202121">
                <li class="nav-header" style="background-color: #202121!important; background:#202121">
                    <div class="dropdown profile-element"> <span>
                            <a data-toggle="modal" data-target="#myModal3"><img style="width: 100px;height: 100px" class="img-circle" src="fotosUsuarios/{{auth()->user()->id}}.jpg" /></a>
                             </span>
                        <!--a data-toggle="dropdown" class="dropdown-toggle" href="#"-->
                        <a>
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{auth()->user()->completeName()}}</strong>
                             </span> 
                             @if(auth()->user()->getRole() == 'Cursante')
                             <span class="text-muted text-xs block"-->Alumno <!--b class="caret"></b-->
                             </span> 
                             @endif
                             @if(auth()->user()->getRole() == 'admin')
                             <span class="text-muted text-xs block"-->Administrador <!--b class="caret"></b-->
                             </span> 
                             @endif
                             @if(auth()->user()->getRole() == 'Docente')
                             <span class="text-muted text-xs block"-->Docente <!--b class="caret"></b-->
                             </span> 
                             @endif
                         </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Datos Personales</a></li>
                            <!--li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li-->

                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>

                @include('layouts.menu')

            </ul>
        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Aula Virtual</span>
                    </li>
                    <li class="dropdown">
                        <!--a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-warning">8</span>
                        </a>
                        <!--ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="grid_options.html">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Calificaciones
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul-->
                    </li>


                    <li>
                        <a href="{{route('logout')}}">
                            <i class="fa fa-sign-out"></i> SALIR
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        @yield('content')

    </div>

<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Flot -->
<script src="js/jquery.flot.js"></script>
<script src="js/jquery.flot.tooltip.min.js"></script>
<script src="js/jquery.flot.spline.js"></script>
<script src="js/jquery.flot.resize.js"></script>
<script src="js/jquery.flot.pie.js"></script>
<!-- Peity -->
<script src="js/jquery.peity.min.js"></script>
<script src="js/peity-demo.js"></script>
<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/pace.min.js"></script>
<!-- jQuery UI -->
<script src="js/jquery-ui.min.js"></script>
<!-- GITTER -->
<script src="js/jquery.gritter.min.js"></script>
<!-- Sparkline -->
<script src="js/jquery.sparkline.min.js"></script>
<!-- Sparkline demo data  -->
<script src="js/sparkline-demo.js"></script>
<!-- ChartJS-->
<script src="js/Chart.min.js"></script>
<!-- Toastr -->
<script src="js/skycons.js"></script>
<script src="js/bars.js"></script>
<script src="js/toastr.min.js"></script>
<script src="js/jquery-1.11.2.min.js"></script>
<script>
function myFunction() {
  // Declare variables 
 var $rows = $('#myTable tr');
$('#myInput').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
    $('.header').show();
});
}
</script>
    <script src="js/validator.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-4625583-2', 'webapplayers.com');
    ga('send', 'pageview');

</script>


    <script type="text/javascript">




    </script>
</div>
@section('scripts')
@show
</body>
</html>