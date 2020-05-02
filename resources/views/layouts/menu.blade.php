@if(auth()->user()->role == 'admin')
    <li>
        <a href="{{ route('dashboard') }}">
            <i class="fa fa-tachometer fa-2x" style="margin-left: 10px;color:white;height: 40px;width: 40px;"></i>
            <span class="nav-label" style="color:white">Dashboard</a>
    </li>
    <li>
        <a href="#"><i class="fa fa-edit fa-2x" style="margin-left: 10px;color:white;height: 40px;width: 40px;"></i> <span class="nav-label" style="color:white">Alumno</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('nuevoCursante')}}"><i class="glyphicon glyphicon-plus-sign"></i>Inscribir Alumno</a></li>
            <li><a href="{{ route('modificarCursante') }}"><i class="glyphicon glyphicon-edit"></i>Modificar Alumno</a></li>
            <!--<li><a href="{{ route('director.calificarCursanteSelecMateria')}}"><i class="fa fa-edit"></i>Evaluar Cursante</a></li>-->
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-book nav_icon fa-2x" style="margin-left: 10px;color:white;height: 40px;width: 40px;"></i> <span class="nav-label" style="color:white">Docentes</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('nuevoDocente')}}"><i class="glyphicon glyphicon-plus-sign"></i>Inscribir nuevo</a></li>
            <li><a href="{{ route('modificarDocente') }}"><i class="glyphicon glyphicon-edit"></i>Modificar Docente</a></li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-graduation-cap fa-2x" style="margin-left: 10px;color:white;height: 40px;width: 40px;"></i> <span class="nav-label" style="color:white">Asignación</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ url('asignar') }}"><i class="fa fa-list-ol"></i>Asignar Alumno</a></li>
            <li><a href="{{ url('asignarDocentes') }}"><i class="fa fa-list-ol"></i>Asignar Docente</a></li>
            <!--<li><a href="{{ route('sortearIndex') }}"><i class="fa fa-list-ol"></i>Sorteo de grupos</a></li>-->
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-file-text-o fa-2x" style="margin-left: 10px;color:white;height: 40px;width: 40px;"></i> <span class="nav-label" style="color:white">Reportes</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('porCursante') }}"><i class="fa fa-list-ol"></i>Por Horario</a></li>
            <li><a href="{{ route('director.reportePorMateria')}}"><i class="fa fa-list-ol"></i>Por alumno</a></li>
        </ul>
    </li>
   <li>
        <a href="#"><i class="fa fa-cogs fa-2x" style="margin-left: 10px;color:white;height: 40px;width: 40px;"></i> <span class="nav-label" style="color:white">Administración</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('grados') }}"><i class="fa fa-list-ol"></i>Cursos </a></li>
        </ul>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('horarios') }}"><i class="fa fa-folder"></i>Horarios </a></li>
        </ul>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('mensajes') }}"><i class="fa fa-send"></i>Bandeja de entrada </a></li>
        </ul>
    </li>
@elseif(auth()->user()->role == 'director')
    <li>
        <a href="#"><i class="glyphicon glyphicon-user"></i> <span class="nav-label">Cursantes</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('nuevoCursante')}}"><i class="glyphicon glyphicon-plus-sign"></i>Inscribir nuevo</a></li>
            <li><a href="{{ route('modificarCursante') }}"><i class="glyphicon glyphicon-edit"></i>Modificar Cursante</a></li>
            <li><a href="{{ route('director.calificarCursanteSelecMateria')}}"><i class="fa fa-edit"></i>Evaluar Cursante</a></li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-graduation-cap"></i> <span class="nav-label">Docentes</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('nuevoDocente')}}"><i class="glyphicon glyphicon-plus-sign"></i>Inscribir nuevo</a></li>
            <li><a href="{{ route('modificarDocente') }}"><i class="glyphicon glyphicon-edit"></i>Modificar Docente</a></li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-graduation-cap"></i> <span class="nav-label">Asignación</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ url('asignar') }}"><i class="fa fa-list-ol"></i>Asignar Cursante</a></li>
            <li><a href="{{ url('asignarDocentes') }}"><i class="fa fa-list-ol"></i>Asignar Docente</a></li>
            <!--<li><a href="{{ route('sortearIndex') }}"><i class="fa fa-list-ol"></i>Sorteo de grupos</a></li>-->
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Reportes</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('porCursante') }}"><i class="fa fa-list-ol"></i>Por Cursante</a></li>
            <li><a href="{{ route('director.reportePorMateria')}}"><i class="fa fa-list-ol"></i>Por Matria</a></li>
        </ul>
    </li>
    <!--<li>
        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Administracion</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('grados') }}"><i class="fa fa-list-ol"></i>Grados </a></li>
        </ul>
    </li>-->
@elseif(auth()->user()->role == 'docente')
    <li>
        <a href="{{ route('cursante.selecMateriaCalificarCursante')}}">
            <i class="fa fa-book fa-2x" style="margin-left: 10px;color:white;height: 40px;width: 40px;"></i>
            <span class="nav-label" style="color:white">Subir tareas</span>
        </a>
    </li>
    <li>
        <a href="{{ route('docente.verCalificaciones')}}">
            <i class="fa fa-edit fa-2x" style="margin-left:10px;color:white; width: 30px;height: 40px;"></i>
            <span style="color:white">Calificar tareas </span>
        </a>
    </li>
    <li>
        <a href="{{ route('mensajes') }}">
            <i class="fa fa-send fa-2x" style="margin-left:10px;color:white; width: 30px;height: 40px;"></i>
            <span style="color:white">Bandeja </span>
        </a>
    </li>
@elseif(auth()->user()->role == 'cursante')
    <li>
        <a href="{{ route('cursante.calificarCursante')}}">
            <i class="glyphicon glyphicon-list-alt fa-2x" style="margin-left: 10px;color:white;height: 40px;width: 40px;"></i> 
            <span class="nav-label" style="color:white">Ver Tareas</span></a>
    </li>
    <!--li>
        <a href="#"><i class="glyphicon glyphicon-dashboard"></i> <span class="nav-label">Asistencia</span></a>
    </li-->
    <li>
        <a href="{{ route('cursante.ver_notas') }}">
            <i class="fa fa-edit fa-2x" style="margin-left: 10px;color:white;height: 40px;width: 40px;"></i> 
            <span class="nav-label" style="color:white">Ver notas</span></a>
    </li>

     <li>
        <a href="{{ route('mensajes') }}">
            <i class="fa fa-send fa-2x" style="margin-left: 10px;color:white;height: 40px;width: 40px;"></i><span class="nav-label" style="color:white">Bandeja</span></a>
        </a>
    </li>
@endif
