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
@endif
