<nav class="top-navbar">
    <div class="navbar-left">
        <a href="{{ route('home') }}"><span class="page-title">Unimon</span></a>
    </div>

    <ul class="navbar-menu">
        <li class="navbar-item {{ Request::is('/') ? 'active' : '' }}">
            <a href="{{ route('home') }}"><i class="fas fa-chart-line"></i> Painel</a>
        </li>
        <li class="navbar-item {{ Request::is('servicos') ? 'active' : '' }}">
            <a href="{{ route('servicos') }}"><i class="fas fa-concierge-bell"></i> Serviços</a>
        </li>
    </ul>

    <div class="navbar-right">
        <div class="dropdown">
            <a href="#" class="user-dropdown" data-bs-toggle="dropdown">
                <i class="fas fa-user-circle"></i>
                <span class="d-none d-md-inline">Usuário</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Perfil</a></li>
                <li><a class="dropdown-item text-danger" href="#">Sair</a></li>
            </ul>
        </div>
    </div>
</nav>