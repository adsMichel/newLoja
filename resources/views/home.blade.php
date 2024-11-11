@extends('adminlte::page')

@section('title', 'Loja')

@section('content_header')
    <div class="header">
        <h1>Home Loja</h1>
        <a class="cart-link" href="#">Carrinho de Compras</a>
    </div>
@stop

@section('content')
    <cards-home-component>
        <div class="container">
            <div class="product-grid">
            </div>
        </div>

        <div class="cartTab">
            <h1>Carrinho</h1>
            <div class="listCart">
            </div>
            <div class="d-flex justify-content-between p-2">
                <span>Total</span><span>R$ <span class="totalPrice"></span></span>
            </div>
            <div class="btn" style="height: 60px;">
                <button type="button" class="fechar">FECHAR</button>
                <button type="button" class="checkOut">Finalizar</button>
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

        .cart-link {
            text-decoration: none;
            color: white;
            font-weight: bold;
            position: absolute;
            margin-top: 75px;
            top: 15px;
            right: 20px;
            background-color: #007bff;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .cart-link:hover {
            background-color: #0056b3;
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

        header {
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
            margin-top: 60px;
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

        .cartTab .btn .fechar {
            background-color: #eee;
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
    </style>
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
        let img = @json(asset('assets/'));

        let iconCart = document.querySelector('.cart-link');
        let closeCart = document.querySelector('.fechar');
        let body = document.querySelector('body');
        let listProductHTML = document.querySelector('.product-grid');
        let listCartHTML = document.querySelector('.listCart');
        let iconCartSpan = document.querySelector('.icon-cart span');
        let totalPriceHTML = document.querySelector('.totalPrice');


        let listProduct = [];
        let carts = [];

        iconCart.addEventListener('click', () => {
            body.classList.toggle('showCart');
        })
        closeCart.addEventListener('click', () => {
            body.classList.toggle('showCart');
        })

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
                    totalPrice = totalPrice + (listProduct.find((value) => value.id == cart.product_id).price *
                        cart.quantity);
                    let newCart = document.createElement('div');
                    newCart.classList.add('item');
                    newCart.dataset.id = cart.product_id;
                    let positionProduct = listProduct.findIndex((value) => value.id == cart.product_id);
                    let info = listProduct[positionProduct];
                    newCart.innerHTML = `
                    <div class="image">
                        <img src="${img}/${info.image}" alt="">
                    </div>
                    <div class="name">
                        ${info.name}
                    </div>
                    <div class="totalPrice">
                        R$ ${info.price * cart.quantity}
                    </div>
                    <div class="quantity">
                        <span class="minus">
                            <</span>
                                <span>${cart.quantity}</span>
                                <span class="plus">></span>
                    </div>`;
                    listCartHTML.appendChild(newCart);
                })
            }
            // iconCartSpan.innerText = totalQuantity;
            totalPriceHTML.innerText = totalPrice;
        }

        const addCartToMemory = () => {
            localStorage.setItem('cart', JSON.stringify(carts));
        }

        listCartHTML.addEventListener('click', (event) => {
            let positionClick = event.target;
            if (positionClick.classList.contains('minus') || positionClick.classList.contains('plus')) {
                let product_id = positionClick.parentElement.parentElement.dataset.id;
                let type = 'minus';
                if (positionClick.classList.contains('plus')) {
                    type = 'plus';
                }
                changeQuantity(product_id, type);
            }
        })

        const changeQuantity = (product_id, type) => {
            let positionItemInCart = carts.findIndex((value) => value.product_id == product_id);
            if (positionItemInCart >= 0) {
                switch (type) {
                    case 'plus':
                        carts[positionItemInCart].quantity = carts[positionItemInCart].quantity + 1;
                        break;
                    default:
                        let valueChange = carts[positionItemInCart].quantity - 1;
                        if (valueChange > 0) {
                            carts[positionItemInCart].quantity = valueChange;
                        } else {
                            carts.splice(positionItemInCart, 1);
                        }
                        break;
                }
            }
            addCartToMemory();
            addCartToHTML();
        }

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
