<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Catalogo StarMoveis</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">

        <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

        <style>
        /* Estilos personalizados */
        .navbar {
                background-color: #343a40;
            }
            .navbar-brand, .navbar-nav .nav-link {
                color: #ffffff !important;
            }
            .hero {
                background: url('link_para_imagem_do_banner.jpg') no-repeat center center;
                background-size: cover;
                height: 60vh;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #ffffff;
                text-align: center;
            }
            .hero h1 {
                font-size: 3rem;
                font-weight: bold;
            }
            .hero p {
                font-size: 1.25rem;
                margin-top: 15px;
            }
            .product-card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                cursor: pointer;
            }
            .product-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            }
            .product-card img {
                height: 200px;
                object-fit: cover;
            }
            .product-card .card-body {
                padding: 15px;
                text-align: center;
            }
            .product-card .card-title {
                font-size: 1.1rem;
                font-weight: bold;
            }
            .product-card .card-text {
                font-size: 1rem;
                color: #28a745;
            }
            .cart-counter {
                background-color: #ff5722;
                color: #ffffff;
                border-radius: 50%;
                padding: 5px 10px;
                font-weight: bold;
                margin-left: 5px;
            }
        </style>
    </head>
    <body class="hold-transition layout-top-nav">
        <div class="wrapper">
            @include('home::layouts.navbar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('img/1.webp') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('img/2.webp') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('img/3.webp') }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- Seção de Produtos -->
                <div class="container my-5" id="produtos">
                    <h2 class="text-center mb-4">Nossos Produtos</h2>
                    <div class="row">
                        @if (isset($data) && $data->isNotEmpty())
                            @foreach ($data as $produto)
                                 <!-- Card do Produto -->
                                <div class="col-md-3 col-sm-6 mb-4">
                                    <div class="card product-card h-100">
                                        <img src="{{ route('media.show', [$produto->media[0]->id,'350-300-png']) }}" class="card-img-top" alt="Produto 1">
                                        <div class="card-body">
                                            <h5 class="card-title">Produto 1</h5>
                                            <p class="card-text">R$ 99,99</p>
                                            <button class="btn btn-outline-primary btn-sm mt-2 add-to-cart" data-id="1" data-name="Produto 1" data-price="99.99">Adicionar ao Carrinho</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif



                        <!-- Card do Produto -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card product-card h-100">
                                <img src="link_da_imagem_do_produto.jpg" class="card-img-top" alt="Produto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Produto 1</h5>
                                    <p class="card-text">R$ 99,99</p>
                                    <button class="btn btn-outline-primary btn-sm mt-2 add-to-cart" data-id="1" data-name="Produto 1" data-price="99.99">Adicionar ao Carrinho</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card do Produto -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card product-card h-100">
                                <img src="link_da_imagem_do_produto.jpg" class="card-img-top" alt="Produto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Produto 1</h5>
                                    <p class="card-text">R$ 99,99</p>
                                    <button class="btn btn-outline-primary btn-sm mt-2 add-to-cart" data-id="1" data-name="Produto 1" data-price="99.99">Adicionar ao Carrinho</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card do Produto -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card product-card h-100">
                                <img src="link_da_imagem_do_produto.jpg" class="card-img-top" alt="Produto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Produto 1</h5>
                                    <p class="card-text">R$ 99,99</p>
                                    <button class="btn btn-outline-primary btn-sm mt-2 add-to-cart" data-id="1" data-name="Produto 1" data-price="99.99">Adicionar ao Carrinho</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Card do Produto -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card product-card h-100">
                                <img src="link_da_imagem_do_produto.jpg" class="card-img-top" alt="Produto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Produto 1</h5>
                                    <p class="card-text">R$ 99,99</p>
                                    <button class="btn btn-outline-primary btn-sm mt-2 add-to-cart" data-id="1" data-name="Produto 1" data-price="99.99">Adicionar ao Carrinho</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card do Produto -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card product-card h-100">
                                <img src="link_da_imagem_do_produto.jpg" class="card-img-top" alt="Produto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Produto 1</h5>
                                    <p class="card-text">R$ 99,99</p>
                                    <button class="btn btn-outline-primary btn-sm mt-2 add-to-cart" data-id="1" data-name="Produto 1" data-price="99.99">Adicionar ao Carrinho</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card do Produto -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card product-card h-100">
                                <img src="link_da_imagem_do_produto.jpg" class="card-img-top" alt="Produto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Produto 1</h5>
                                    <p class="card-text">R$ 99,99</p>
                                    <button class="btn btn-outline-primary btn-sm mt-2 add-to-cart" data-id="1" data-name="Produto 1" data-price="99.99">Adicionar ao Carrinho</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card do Produto -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card product-card h-100">
                                <img src="link_da_imagem_do_produto.jpg" class="card-img-top" alt="Produto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Produto 1</h5>
                                    <p class="card-text">R$ 99,99</p>
                                    <button class="btn btn-outline-primary btn-sm mt-2 add-to-cart" data-id="1" data-name="Produto 1" data-price="99.99">Adicionar ao Carrinho</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Card do Produto -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card product-card h-100">
                                <img src="link_da_imagem_do_produto.jpg" class="card-img-top" alt="Produto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Produto 1</h5>
                                    <p class="card-text">R$ 99,99</p>
                                    <button class="btn btn-outline-primary btn-sm mt-2 add-to-cart" data-id="1" data-name="Produto 1" data-price="99.99">Adicionar ao Carrinho</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card do Produto -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card product-card h-100">
                                <img src="link_da_imagem_do_produto.jpg" class="card-img-top" alt="Produto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Produto 1</h5>
                                    <p class="card-text">R$ 99,99</p>
                                    <button class="btn btn-outline-primary btn-sm mt-2 add-to-cart" data-id="1" data-name="Produto 1" data-price="99.99">Adicionar ao Carrinho</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card do Produto -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card product-card h-100">
                                <img src="link_da_imagem_do_produto.jpg" class="card-img-top" alt="Produto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Produto 1</h5>
                                    <p class="card-text">R$ 99,99</p>
                                    <button class="btn btn-outline-primary btn-sm mt-2 add-to-cart" data-id="1" data-name="Produto 1" data-price="99.99">Adicionar ao Carrinho</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card do Produto -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card product-card h-100">
                                <img src="{{ route('media.show', [1,'350-300-png']) }}" class="card-img-top" alt="Produto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Produto 1</h5>
                                    <p class="card-text">R$ 99,99</p>
                                    <button class="btn btn-outline-primary btn-sm mt-2 add-to-cart" data-id="1" data-name="Produto 1" data-price="99.99">Adicionar ao Carrinho</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
            </footer>
        </footer>
    </div>
    <!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="../../dist/js/demo.js"></script>


                <script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script> --}}

</body>
</html>
