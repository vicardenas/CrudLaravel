<nav>
    <ul id="menu">
        <li class="active">
            <a href="{{ route('admin.article.index') }}" class="option">
                <i class="fas fa-rss fa-fw"></i>
                <span>Artículos</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.user.index') }}" class="option">
                <i class="fas fa-users fa-fw"></i>
                <span>Usuarios</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.account.index') }}" class="option">
                <i class="fas fa-user-tie fa-fw"></i>
                <span>Mi Cuenta</span>
            </a>
        </li>

        <li class="logout">
            <a href="{{ route('logout') }}" class="option">
                <i class="fas fa-power-off fa-fw"></i>
                <span>Salir</span>
            </a>
        </li>

        {{--<li class="dropdown selected">
                <span class="option">
                    <i class="fas fa-user fa-fw"></i>
                    <span>Menú 3</span>
                </span>
            <ul>
                <li><a href="#"><i class="fas fa-user fa-fw"></i> Item 1</a></li>
                <li><a href="#"><i class="fas fa-user fa-fw"></i> Item 2</a></li>
                <li><a href="#"><i class="fas fa-user fa-fw"></i> Item 3</a></li>
            </ul>
        </li>--}}
    </ul>
</nav>