@if(auth()->user()->role == 'admin')
    <li>
        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Administrar Usuarios</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="form_basic.html">las vergas q tiene q hacer </a></li>

        </ul>
        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">otras tareas</span><span class="fa arrow"></span></a>
    </li>
@elseif(auth()->user()->role == 'docente')
    <li>
        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Tirar alumnos</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="form_basic.html">las vergas q tiene q hacer </a></li>

        </ul>
        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">asdfafs</span><span class="fa arrow"></span></a>
    </li>

@elseif(auth()->user()->role == 'facilitador')
    <li>
        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Calificar alumnos</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="form_basic.html">las vergas q tiene q hacer </a></li>

        </ul>
        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">asdfafs</span><span class="fa arrow"></span></a>
    </li>

@elseif(auth()->user()->role == 'cursante')
    <li>
        <a href="{{ route('cursante.verCalificaciones')}}"><i class="glyphicon glyphicon-list-alt"></i> <span class="nav-label">Ver Calificaciones</span></a>
    </li>
    <li>
        <a href="#"><i class="glyphicon glyphicon-dashboard"></i> <span class="nav-label">Asistencia</span></a>
    </li>
    <li>
        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Evaluar</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('cursante.calificarCursante')}}"> Evaluar Cursante </a></li>
            <li><a href="{{ route('cursante.calificarDocente')}}"> Evaluar Docente </a></li>
        </ul>
    </li>
@endif
