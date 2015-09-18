@if($person->role == 'admin')

    <li>
        <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Afiliados</span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('admin.agregarAfiliado') }}">Dar de alta afiliado</a></li>
            <li><a href="#">Dar de baja afiliado</a></li>
            <li><a href="{{ route('admin.detalle') }}">Relación nominal</a></li>
            <li><a href="{{ route('admin.activos') }}">Afiliados activos</a></li>
            <li><a href="{{ route('admin.noactivos') }}">Afiliados no activos</a></li>
            <li><a href="#">Buscar afiliado</a></li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-mortar-board"></i> <span class="nav-label">Aportes</span></a>
        <ul class="nav nav-second-level">
            <li><a href="#">Buscar afiliado</a></li>
            <li><a href="{{ route('admin.agregarAporte') }}">Agregar aporte</a></li>
            <li><a href="{{ route('admin.verAportes') }}">Ver aportes</a></li>
        </ul>
    </li>

@else

    <li>
        <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Aportes</span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('user.aportesDepositados') }}">Ver aportes depositados</a></li>
            <li><a href="{{ route('user.aportesDevueltos') }}">Ver aportes devueltos</a></li>
            <li><a href="{{ route('user.aportes') }}">Ver todos los aportes</a></li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Préstamos</span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ route('prestamos.calcular') }}">Calcular préstamo</a></li>
        </ul>
    </li>
@endif

