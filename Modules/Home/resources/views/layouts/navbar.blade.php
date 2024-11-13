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
                {{-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar"
                                class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div> --}}
            </li>
            <!-- Notifications Dropdown Menu -->
            {{-- <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li> --}}
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="/vendor/adminlte/dist/img/user5-128x128.jpg" class="user-image img-circle elevation-2"
                        alt="Luiz Fernando">
                    <span class="d-none d-md-inline"> Luiz Fernando </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <li class="user-header bg-primary">
                        <img src="/vendor/adminlte/dist/img/profile.jpeg" class="img-circle elevation-2"
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
                        <form id="logout-form" action="https://sigin.df.senac.br/logout" method="POST"
                            style="display: none;">
                            <input type="hidden" name="_token" value="Parz2frGwwpglmw014MltsEe2FrEpNYcbeeWaXs1">
                        </form>
                        <form id="logout-form" action="https://sigin.df.senac.br/logout" method="POST"
                            style="display: none;">
                            <input type="hidden" name="_token" value="Parz2frGwwpglmw014MltsEe2FrEpNYcbeeWaXs1">
                        </form>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
<!-- /.navbar -->
