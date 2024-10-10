<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#Acerca">Acerca</a></li>
        <li class="nav-item"><a class="nav-link" href="#Ubicaciones">Ubicaciones</a></li>
        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="nav-link btn btn-link" style="text-decoration: none; color: inherit;">
                    Cerrar Sesión
                </button>
            </form>
        </li>
    </ul>
</div>
