@if(auth()->user()->role == 'admin')
    <li>
        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Administrar Usuarios</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="form_basic.html">las acciones que realiza el administrador </a></li>

        </ul>
        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">otras tareas</span><span class="fa arrow"></span></a>
    </li>
@elseif(auth()->user()->role == 'director')
    <li>
        <a href="#"><i class="glyphicon glyphicon-user"></i> <span class="nav-label">Cursantes</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('nuevoCursante')}}"><i class="glyphicon glyphicon-plus-sign"></i>Inscribir nuevo</a></li>
            <li><a href="form_basic.html"><i class="glyphicon glyphicon-edit"></i>Modificar Cursante</a></li>
            <li><a href="form_basic.html"><i class="glyphicon glyphicon-file"></i>Reportes</a></li>
            <li><a href="{{ route('director.calificarCursanteSelecMateria')}}"><i class="fa fa-edit"></i>Evaluar Cursante</a></li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-graduation-cap"></i> <span class="nav-label">Docentes</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('nuevoDocente')}}"><i class="glyphicon glyphicon-plus-sign"></i>Inscribir nuevo</a></li>
            <li><a href="form_basic.html"><i class="glyphicon glyphicon-edit"></i>Modificar Docente</a></li>
            <li><a href="form_basic.html"><i class="glyphicon glyphicon-file"></i>Reportes</a></li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-graduation-cap"></i> <span class="nav-label">Asignación</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="form_basic.html"><i class="fa fa-list-ol"></i>Sorteo de grupos</a></li>
            <li><a href="form_basic.html"><i class="glyphicon glyphicon-file"></i>Reportes</a></li>
        </ul>
    </li>
@elseif(auth()->user()->role == 'docente')
    <li>
        <a href="{{ route('docente.calificar')}}"><i class="fa fa-edit"></i> <span class="nav-label">Cargar Calificaciones</span></a>
    </li>
    <li>
        <a href="{{ route('docente.verCalificaciones')}}"><i class="fa fa-edit"></i> <span class="nav-label">Ver Calificaciones</span></a>
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
    <!--li>
        <a href="#"><i class="glyphicon glyphicon-dashboard"></i> <span class="nav-label">Asistencia</span></a>
    </li-->
    <li>
        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Evaluar</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('cursante.selecMateriaCalificarCursante')}}"> Evaluar Cursante </a></li>
            <li><a href="{{ route('cursante.calificarDocente')}}"> Evaluar Docente </a></li>
        </ul>
    </li>
@endif
