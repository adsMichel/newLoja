<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovante de Venda</title>
</head>
<body>
    <div class="recept-container">
        <div class="receipt-header">
            <h2>Comprovante de Venda</h2>
            <p>Data: 07/11/2024</p>
        </div>
        <div class="receipt-content">
            <p><strong>Nome do Cliente:</strong> João Silva</p>
            <p><strong>Produto:</strong> Televisor Amart 42"</p>
            <p><strong>Valor da Compra:</strong> R$ 2.500,00</p>
        </div>
        <div class="receipt-footer">
            <p>Obrigado pela compra!</p>
            <p>Loja XYZ - Todos os direitos reservados.</p>
        </div>
    </div>
    <a href="{{route('home.index')}}">Voltar</a><!-- link apenas para voltar ao home - modificar depois -->>
</body>
</html>
