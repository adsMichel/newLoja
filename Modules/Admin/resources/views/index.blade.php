
    <!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <title>Carrinho De Compras| Home</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Carrinho de Compras</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('home.index')}}">LOJA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./sobre.html">SOBRE</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<main>
  <div class="container">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">Produto </th>
          <th scope="col">Estoque</th>
          <th scope="col">Preço</th>
          <th scope="col">Sobre</th>
          <th scope="col">Validade</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1 Barra de Chocolate</th>
          <td>4 unidade</td>
          <td>9,90</td>
          <td>Barra de chocolate lacta shot de 80g</td>
          <td>12/12/24</td>
         <td> <button class="btn btn-primary me-2">Editar</button> 
          <button class="btn btn-danger">Excluir<button>
        </td>
        </tr>
        <tr>
          <th scope="row">2  Caixa de bombom</th>
          <td>4 unidade</td>
          <td>12,45 </td>
          <td>Caixa de bombom nestle 251g</td>
          <td>13/12/24</td>
          <td> <button class="btn btn-primary">Editar</button>
            <button class="btn btn-danger">Excluir<button>
        </tr>
        <tr>
          <th scope="row">3 Café</th>
          <td>4 unidade</td>
          <td>19,99</td>
          <td>Café do Sitío de 500g</td>
          <td>25/12/24</td>
          <td> <button class="btn btn-primary">Editar</button>
            <button class="btn btn-danger">Excluir<button>
        </tr>
        <button type="button" class="button-hover-backgroun>Adicionar novo Produto"> Cadastra Novo Produto</button>
      </tbody>

    </table>
  </div>
</main>
  </body>
</html>


