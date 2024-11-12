<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce - Página Inicial</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
<body>

<!-- Barra de Navegação -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Minha Loja</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Produtos</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
            <li class="nav-item">
                <a class="nav-link" href="#">Carrinho
                    <span class="cart-counter" id="cart-counter">0</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Seção de Banner Principal -->
<div class="hero">
    <div>
        <h1>Bem-vindo à Nossa Loja</h1>
        <p>Encontre os melhores produtos com descontos exclusivos</p>
        <a href="#produtos" class="btn btn-primary mt-3">Ver Produtos</a>
    </div>
</div>

<!-- Seção de Produtos -->
<div class="container my-5" id="produtos">
    <h2 class="text-center mb-4">Nossos Produtos</h2>
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
        <!-- Repetir para outros produtos -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Função para carregar o contador do carrinho
    function loadCartCounter() {
        const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
        document.getElementById('cart-counter').textContent = cartItems.length;
    }

    // Função para adicionar item ao carrinho
    function addToCart(id, name, price) {
        const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
        cartItems.push({ id, name, price });
        localStorage.setItem('cart', JSON.stringify(cartItems));
        loadCartCounter();  // Atualiza o contador
        alert(`${name} foi adicionado ao carrinho!`);
    }

    // Carrega o contador ao iniciar a página
    loadCartCounter();

    // Evento de clique nos botões de adicionar ao carrinho
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const name = this.getAttribute('data-name');
            const price = this.getAttribute('data-price');
            addToCart(id, name, price);
        });
    });
</script>

</body>
</html>
