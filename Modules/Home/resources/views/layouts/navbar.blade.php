<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img src="{{ asset('img/docitos.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">
                Docitos da Ruth
            </span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index3.html" class="nav-link">Chocolates</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Doces</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Balas</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Biscoitos</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Brigadeiros</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Brownies</a>
                </li>

            </ul>
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link icon-cart" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge badge-danger navbar-badge"></span>
                </a>
            </li>
            @if (Auth::guest())
                <!-- Links de Registro e Login -->
                <li class="nav-item">
                    <a href="{{ route('client.register') }}" class="btn btn-outline-primary mx-1">
                        <i class="fas fa-user-plus"></i> Registre-se
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('client.login') }}" class="btn btn-primary mx-1">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                </li>
            @else
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="/vendor/adminlte/dist/img/avatar.png" class="user-image img-circle elevation-2"
                            alt="Luiz Fernando">
                        <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <li class="user-header bg-primary">
                            <img src="/vendor/adminlte/dist/img/avatar.png" class="img-circle elevation-2"
                                alt="Luiz Fernando">
                            <p class=""> Luiz Fernando <small></small></p>
                        </li>
                        <li class="user-footer">
                            <a href="https://sigin.df.senac.br/instrutor/meu-perfil" class="btn btn-default btn-flat">
                                <i class="fa fa-fw fa-user text-lightblue"></i>
                                Perfil
                            </a>
                            <a class="btn btn-default btn-flat float-right" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-fw fa-power-off text-red"></i>
                                Sair
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            @endif

        </ul>
    </div>
</nav>
<!-- /.navbar -->
