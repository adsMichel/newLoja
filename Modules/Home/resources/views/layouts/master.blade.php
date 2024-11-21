<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Docitos da Ruth</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    <style>
        /* Estilos personalizados */
        .navbar {
            background-color: #343a40;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
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

        /* Modal */
        .modal h1 {
            text-align: center;
        }

        .modal table {
            width: 100%;
            border-collapse: collapse;
        }

        .modal table th,
        table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .modal table th {
            background-color: #333;
            color: white;
        }

        .modal input[type="number"] {
            width: 50px;
            padding: 5px;
            text-align: center;
        }

        .modal .remove-button {
            background-color: #dc3545;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .modal .remove-button:hover {
            background-color: #c82333;
        }

        .modal .total {
            text-align: right;
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }

        .modal .checkout-button {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            margin-top: 20px;
        }

        .modal .checkout-button:hover {
            background-color: #218838;
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
                <div class="row listProduct">
                    @if (isset($data) && $data->isNotEmpty())
                        @foreach ($data as $produto)
                            <!-- Card do Produto -->
                            <div class="col-md-3 col-sm-6 mb-4" data-id="{{ $produto->id }}">
                                <div class="card product-card h-100">
                                    <img src="{{ route('media.show', [$produto->media[0]->id, '350-300-webp']) }}"
                                        class="card-img-top" alt="{{ $produto->name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $produto->name }}</h5>
                                        <p class="card-text">R$ {{ $produto->price }}</p>
                                        <button class="btn btn-outline-primary btn-sm mt-2 addCart" data-id="1"
                                            data-name="{{ $produto->name }}" data-price="99.99">Adicionar ao
                                            Carrinho</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    @if (!isset($data) && !$data->isNotEmpty())
                        @for ($i = 0; $i < 12; $i++)
                            <!-- Card do Produto -->
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="card product-card h-100">
                                    <img src="{{ route('media.show', [1, '350-300-png']) }}" class="card-img-top"
                                        alt="{{ $produto->name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">Brigadeiro</h5>
                                        <p class="card-text">R$ 5,99</p>
                                        <button class="btn btn-outline-primary btn-sm mt-2 addCart" data-id="1"
                                            data-name="{{ $produto->name }}" data-price="99.99">Adicionar ao
                                            Carrinho</button>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    @endif
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalCenterTitle">Carrinho</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Produto</th>
                                            <th>Quantidade</th>
                                            <th>Preço Unitário</th>
                                            <th>Total</th>
                                            <th>Remover</th>
                                        </tr>
                                    </thead>
                                    <tbody class="listCart">
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-between mx-5"><span>Total</span><span>R$ <span
                                        class="totalPriceCart"></span></span></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success checkout-button">Finalizar</button>
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
            <div class="float-center d-none d-sm-block">
                <b>Versão</b> 1.0.0
            </div>
           <strong>Copyright &copy; 2024 <a href="{{ route('home.turma') }}">ADS - Senac - 3º Semestre </a>.</strong> Todos os direitos
            reservado.

        </footer>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- CARRINHO SCRIPTS -->
    <script>
        // let img = @json(asset('assets/'));
        // let body = document.querySelector('body');
        let listProductHTML = document.querySelector('.listProduct');
        let listCartHTML = document.querySelector('.listCart');
        let iconCartSpan = document.querySelector('.icon-cart span');
        let totalPriceHTML = document.querySelector('.totalPriceCart');

        let listProduct = [];
        let carts = [];

        listProductHTML.addEventListener('click', (event) => {
            let positionClick = event.target;
            if (positionClick.classList.contains('addCart')) {
                let product_id = positionClick.parentElement.parentElement.parentElement.dataset.id;
                addToCart(product_id);
            }
        })

        const addToCart = (product_id) => {
            let positionThisProductInCart = carts.findIndex((value) => value.product_id == product_id);
            if (carts.length <= 0) {
                carts = [{
                    product_id: product_id,
                    quantity: 1
                }]
            } else if (positionThisProductInCart < 0) {
                carts.push({
                    product_id: product_id,
                    quantity: 1
                })
            } else {
                carts[positionThisProductInCart].quantity = carts[positionThisProductInCart].quantity + 1;
            }
            // toastr.success('Adicionado ao carrinho!')
            addCartToHTML();
            addCartToMemory();
        }

        const addCartToHTML = () => {
            listCartHTML.innerHTML = '';
            let totalQuantity = 0;
            let totalPrice = 0;
            if (carts.length > 0) {
                carts.forEach(cart => {
                    totalQuantity = totalQuantity + cart.quantity;
                    totalPrice = totalPrice + (listProduct.find((value) => value.id == cart
                            .product_id).price *
                        cart.quantity);
                    let newCart = document.createElement('tr');
                    newCart.dataset.id = cart.product_id;
                    let positionProduct = listProduct.findIndex((value) => value.id == cart
                        .product_id);
                    let info = listProduct[positionProduct];
                    newCart.innerHTML = `
                    <td class="name">${info.name}</td>
                    <td><input type="number" class="quantity-input" value="${cart.quantity}" min="1"></td>
                    <td class="price">R$ ${info.price}</td>
                    <td class="totalPrice">R$ ${info.price * cart.quantity}</td>
                    <td><button class="remove-button">Remover</button></td>
                    `;
                    listCartHTML.appendChild(newCart);
                });
            }
            iconCartSpan.innerText = totalQuantity;
            totalPriceHTML.innerText = totalPrice;
            addQuantityChangeEvent();
            addRemoveButtonEvent();
        }

        const addCartToMemory = () => {
            localStorage.setItem('cart', JSON.stringify(carts));
        }

        const addQuantityChangeEvent = () => {
            const quantityInputs = document.querySelectorAll('.quantity-input');
            quantityInputs.forEach(input => {
                input.addEventListener('change', (event) => {
                    let newQuantity = parseInt(event.target.value);
                    let product_id = event.target.parentElement.parentElement.dataset.id;
                    changeQuantity(product_id, newQuantity);
                });
            });
        };

        const addRemoveButtonEvent = () => {
            const removeButtons = document.querySelectorAll('.remove-button');
            removeButtons.forEach(button => {
                button.addEventListener('click', (event) => {
                    let product_id = event.target.parentElement.parentElement.dataset.id;
                    removeFromCart(product_id);
                });
            });
        };
        const removeFromCart = (product_id) => {
            let positionItemInCart = carts.findIndex((value) => value.product_id == product_id);
            if (positionItemInCart >= 0) {
                carts.splice(positionItemInCart, 1);
            }
            addCartToMemory();
            addCartToHTML();
            // toastr.success('Removido do carrinho!');
        };

        const changeQuantity = (product_id, newQuantity) => {
            let positionItemInCart = carts.findIndex((value) => value.product_id == product_id);
            if (positionItemInCart >= 0) {
                if (newQuantity > 0) {
                    carts[positionItemInCart].quantity = newQuantity;
                } else {
                    carts.splice(positionItemInCart, 1);
                }
            }
            addCartToMemory();
            addCartToHTML();
        };

        const initApp = () => {
            fetch('api/products')
                .then(response => response.json())
                .then(data => {
                    listProduct = data;

                    // Recuperar carrinho da memoria
                    if (localStorage.getItem('cart')) {
                        carts = JSON.parse(localStorage.getItem('cart'));
                        addCartToHTML();
                    }
                })
        }

        initApp();
    </script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="../../dist/js/demo.js"></script> -->

    {{-- <script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script> --}}

</body>

</html>
