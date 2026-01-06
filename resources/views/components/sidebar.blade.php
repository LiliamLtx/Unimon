<aside id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <button class="sidebar-toggle" id="sidebarToggle" type="button" aria-label="Toggle sidebar">
            <i class="fas fa-bars"></i>
        </button>
        <div class="sidebar-logo">
            <a href="{{ route('home') }}" class="text-white text-decoration-none" id="name-logo">Unimon</a>
        </div>
    </div>

    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="{{ route('home') }}" class="sidebar-link">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" href="#painelCollapse" role="button" aria-expanded="false" aria-controls="painelCollapse">
                <i class="fas fa-chart-line"></i>
                <span>Paineis</span>
            </a>
            <ul class="sidebar-dropdown list-unstyled collapse" id="painelCollapse" data-bs-parent=".sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-circle"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-circle"></i>
                        <span>Relatórios</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-circle"></i>
                        <span>Estatísticas</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" data-bs-toggle="collapse" href="#servicosCollapse" role="button" aria-expanded="false" aria-controls="servicosCollapse">
                <i class="fas fa-cogs"></i>
                <span>Serviços</span>
            </a>
            <ul class="sidebar-dropdown list-unstyled collapse" id="servicosCollapse" data-bs-parent=".sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-circle"></i>
                        <span>Gerenciar</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-circle"></i>
                        <span>Configurações</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" data-bs-toggle="collapse" href="#usuariosCollapse" role="button" aria-expanded="false" aria-controls="usuariosCollapse">
                <i class="fas fa-users"></i>
                <span>Usuários</span>
            </a>
            <ul class="sidebar-dropdown list-unstyled collapse" id="usuariosCollapse" data-bs-parent=".sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-circle"></i>
                        <span>Listar</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-circle"></i>
                        <span>Criar</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fas fa-circle"></i>
                        <span>Permissões</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="fas fa-cog"></i>
                <span>Configurações</span>
            </a>
        </li>
    </ul>
</aside>