<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <style>
        body {
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
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #333;
            color: white;
        }
        input[type="number"] {
            width: 50px;
            padding: 5px;
            text-align: center;
        }
        .remove-button {
            background-color: #dc3545;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .remove-button:hover {
            background-color: #c82333;
        }
        .total {
            text-align: right;
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
        .checkout-button {
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
        .checkout-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Carrinho de Compras</h1>
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
            <tbody>
                <!-- Produto 1 -->
                <tr>
                    <td>Produto 1</td>
                    <td><input type="number" value="1" min="1"></td>
                    <td>R$ 100,00</td>
                    <td>R$ 100,00</td>
                    <td><button class="remove-button">Remover</button></td>
                </tr>
                <!-- Produto 2 -->
                <tr>
                    <td>Produto 2</td>
                    <td><input type="number" value="2" min="1"></td>
                    <td>R$ 150,00</td>
                    <td>R$ 300,00</td>
                    <td><button class="remove-button">Remover</button></td>
                </tr>
                <!-- Produto 3 -->
                <tr>
                    <td>Produto 3</td>
                    <td><input type="number" value="1" min="1"></td>
                    <td>R$ 200,00</td>
                    <td>R$ 200,00</td>
                    <td><button class="remove-button">Remover</button></td>
                </tr>
            </tbody>
        </table>

        <div class="total">
            Total: R$ 600,00
        </div>
        <a href="{{route('sale.index')}}">
            <button class="checkout-button">Finalizar Compra</button>
        </a>
    </div>

</body>
</html>
