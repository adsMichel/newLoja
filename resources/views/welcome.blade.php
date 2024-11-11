@extends('adminlte::page')

@section('title', 'Loja')

@section('content_header')
    <div class="header-products">
        <h1>Produtos Disponíveis</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModalCenter">
            Carrinho de Compras
        </button>
    </div>
@stop

@section('content')
    <cards-home-component>
        <div class="container">
            <div class="product-grid">
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
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
    </cards-home-component>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .container {
            padding: 20px;
        }

        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-around;
        }

        .product-card {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 250px;
        }

        .product-card img {
            width: 100%;
            height: auto;
        }

        .product-card button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .product-card button:hover {
            background-color: #218838;
        }

        section,
        .section {
            color: var(--default-color);
            background-color: var(--background-color);
            padding: 60px 0;
            scroll-margin-top: 92px;
            overflow: clip;
        }

        .section-title {
            text-align: center;
            padding-bottom: 60px;
            position: relative;
        }

        .section-title h2 {
            font-size: 13px;
            letter-spacing: 1px;
            font-weight: 400;
            padding: 0;
            margin: 0;
            color: color-mix(in srgb, var(--default-color), transparent 50%);
            display: inline-block;
            text-transform: uppercase;
            font-family: var(--default-font);
        }

        .section-title p {
            color: var(--heading-color);
            margin: 10px 0 0 0;
            font-size: 48px;
            font-weight: 500;
            font-family: var(--heading-font);
        }

        .section-title p .description-title {
            color: var(--accent-color);
        }

        .section-title {
            text-align: center;
            padding-bottom: 60px;
            position: relative;
        }

        .section-title h2 {
            font-size: 13px;
            letter-spacing: 1px;
            font-weight: 400;
            padding: 0;
            margin: 0;
            color: color-mix(in srgb, var(--default-color), transparent 50%);
            display: inline-block;
            text-transform: uppercase;
            font-family: var(--default-font);
        }

        .section-title p {
            color: var(--heading-color);
            margin: 10px 0 0 0;
            font-size: 48px;
            font-weight: 500;
            font-family: var(--heading-font);
        }

        .section-title p .description-title {
            color: var(--accent-color);
        }

        .menu .nav-tabs {
            border: 0;
        }

        .menu .nav-link {
            background-color: var(--background-color);
            color: color-mix(in srgb, var(--default-color), transparent 20%);
            margin: 0 15px;
            padding: 10px 5px;
            transition: 0.3s;
            border-radius: 0;
            cursor: pointer;
            height: 100%;
            border: 0;
            border-bottom: 2px solid color-mix(in srgb, var(--default-color), transparent 80%);
        }

        @media (max-width: 575px) {
            .menu .nav-link {
                margin: 0 10px;
                padding: 10px 0;
            }
        }

        .menu .nav-link i {
            padding-right: 15px;
            font-size: 48px;
        }

        .menu .nav-link h4 {
            font-size: 18px;
            font-weight: 400;
            margin: 0;
            font-family: var(--default-font);
        }

        @media (max-width: 575px) {
            .menu .nav-link h4 {
                font-size: 16px;
            }
        }

        .menu .nav-link:hover {
            color: var(--accent-color);
            border-color: var(--accent-color);
        }

        .menu .nav-link.active {
            background-color: var(--background-color);
            color: var(--accent-color);
            border-color: var(--accent-color);
        }

        .menu .tab-content .tab-header {
            padding: 30px 0;
        }

        .menu .tab-content .tab-header p {
            font-size: 14px;
            text-transform: uppercase;
            color: color-mix(in srgb, var(--default-color), transparent 20%);
            margin-bottom: 0;
        }

        .menu .tab-content .tab-header h3 {
            font-size: 48px;
            font-weight: 700;
            color: var(--accent-color);
        }

        .menu .tab-content .menu-item {
            text-align-last: center;
        }

        .menu .tab-content .menu-item .menu-img {
            padding: 0 60px;
            margin-bottom: 15px;
        }

        .menu .tab-content .menu-item h4 {
            font-size: 24px;
            font-weight: 400;
            margin-bottom: 5px;
            font-family: var(--default-font);
        }

        .menu .tab-content .menu-item .ingredients {
            font-family: var(--nav-font);
            color: color-mix(in srgb, var(--default-color), transparent 50%);
            margin-bottom: 5px;
        }

        .menu .tab-content .menu-item .price {
            font-size: 24px;
            font-weight: 700;
            color: var(--accent-color);
        }

        .container {
            width: 900px;
            margin: auto;
            max-width: 90vw;
            text-align: center;
            padding-top: 10px;
            transition: transform .5s;
        }

        svg {
            width: 30px;
        }

        .header-products {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .icon-cart {
            position: relative;
        }

        .icon-cart span {
            position: absolute;
            background-color: red;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: #fff;
            top: 50%;
            right: -20px;
        }

        .cartTab {
            width: 400px;
            background-color: #353432;
            color: #eee;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            inset: 0 -400px 0 auto;
            display: grid;
            grid-template-rows: 70px 1fr 70px;
            transition: 0.5s;
        }

        .cartTab h1 {
            padding: 20px;
            margin: 0;
            font-weight: 300;
        }

        body.showCart .cartTab {
            inset: 0 0 0 auto;
        }

        body.showCart .container {
            transform: translateX(-200px);
        }

        .cartTab .btn {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .cartTab .btn button {
            background-color: #e8bc0e;
            border: none;
            font-family: Poppins;
            font-weight: 500;
            cursor: pointer;
        }

        .cartTab .listCart .item img {
            width: 100%;
        }

        .cartTab .listCart .item {
            display: grid;
            grid-template-columns: 70px 150px 50px 1fr;
            gap: 10px;
            text-align: center;
            align-items: center;
        }

        .cartTab .quantity span {
            display: inline-block;
            width: 25px;
            height: 25px;
            background-color: #eee;
            color: #555;
            border-radius: 50%;
            cursor: pointer;
        }

        .listCart .quantity span:nth-child(2) {
            background-color: transparent;
            color: #eee;
        }

        .listCart .item:nth-child(even) {
            background-color: #eee1;
        }

        .listCart {
            overflow: auto;
        }

        .listCart::-webkit-scrollbar {
            width: 0;
        }

        /* Modal */

        /* body {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            font-family: Arial, sans-serif;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            margin: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            padding: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            background-color: #f4f4f4;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        .container {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            max-width: 800px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            margin: 50px auto;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            padding: 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            background-color: white;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            border-radius: 8px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        } */
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
@stop

@section('js')
    <script>
        let img = @json(asset('assets/'));
        let body = document.querySelector('body');
        let listProductHTML = document.querySelector('.product-grid');
        let listCartHTML = document.querySelector('.listCart');
        let iconCartSpan = document.querySelector('.icon-cart span');
        let totalPriceHTML = document.querySelector('.totalPriceCart');

        let listProduct = [];
        let carts = [];

        const addDataToHTML = () => {
            listProductHTML.innerHTML = '';
            if (listProduct.length > 0) {
                listProduct.forEach(product => {
                    let url = img + '/' + product.image;
                    let newProduct = document.createElement('div');
                    newProduct.classList.add('product-card');
                    newProduct.dataset.id = product.id;
                    newProduct.innerHTML = `
                    <img class="menu-img img-fluid" src="https://via.placeholder.com/200" alt="${product.name}" width="200" height="200">
                    <h3>${product.name}</h3>
                    <p>${product.description}</p>
                    <p class="price"><strong>R$ ${product.price}</strong></p>
                    <button type="button" class="addCart btn btn-sm btn-outline-warning button-hover-background fs-6">Adicionar ao carrinho</button>
                `;
                    listProductHTML.appendChild(newProduct);
                })
            }
        }

        listProductHTML.addEventListener('click', (event) => {
            let positionClick = event.target;
            if (positionClick.classList.contains('addCart')) {
                let product_id = positionClick.parentElement.dataset.id;
                addToCart(product_id);
                // alert("Adicionado ao carrinho!");
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
                    <td class="price">${info.price}</td>
                    <td class="totalPrice">R$ ${info.price * cart.quantity}</td>
                    <td><button class="remove-button">Remover</button></td>
                    `;
                    listCartHTML.appendChild(newCart);
                });
            }
            // iconCartSpan.innerText = totalQuantity;
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
                    addDataToHTML();

                    // Recuperar carrinho da memoria
                    if (localStorage.getItem('cart')) {
                        carts = JSON.parse(localStorage.getItem('cart'));
                        addCartToHTML();
                    }
                })
        }

        initApp();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    @stop
