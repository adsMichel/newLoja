<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online - Home</title>
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
            top: 15px;
            right: 20px;
            background-color: #007bff;
            padding: 10px 15px;
            border-radius: 5px;
        }
        .cart-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <header>
        <h1>Loja Online</h1>
        <a href="{{route('admin.index')}}" style="color: #fff;">admin</a>
        <a class="cart-link" href="{{route('carrinho.index')}}">Carrinho de Compras</a>
        
    </header>

    <div class="container">
        <h2>Produtos Disponíveis</h2>
        <div class="product-grid">
            <!-- Produto 1 -->
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produto 1">
                <h3>Produto 1</h3>
                <p>Descrição do produto 1</p>
                <p><strong>R$ 100,00</strong></p>
                <button>Adicionar ao Carrinho</button>
            </div>

            <!-- Produto 2 -->
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produto 2">
                <h3>Produto 2</h3>
                <p>Descrição do produto 2</p>
                <p><strong>R$ 150,00</strong></p>
                <button>Adicionar ao Carrinho</button>
            </div>

            <!-- Produto 3 -->
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produto 3">
                <h3>Produto 3</h3>
                <p>Descrição do produto 3</p>
                <p><strong>R$ 200,00</strong></p>
                <button>Adicionar ao Carrinho</button>
            </div>
        </div>
    </div>

</body>
</html>

<!--
<h1>Tela de Home</h1>
<p>caminhos relacionado: login, adm, carrinho</p>

<a href="#">tela de login</a>
<a href="{{route('admin.index')}}">carrinho</a>
-->