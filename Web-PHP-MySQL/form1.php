<?php

if(isset($_POST["submit"]))
{
  include_once("config.php");

  $nome = $_POST["nome_prod"];
  $desc = $_POST["desc_prod"];
  $fabricante = $_POST["fabricante_prod"];
  $preco = $_POST["preco_prod"];
  $quantidade = $_POST["quantidade_prod"];
  $data_de_validade = $_POST["data_de_validade"];

  $response = mysqli_query($conexao,"INSERT INTO produto(nome_prod,desc_prod,fabricante_prod,preco_prod,quantidade_prod,data_de_validade) VALUES('$nome','$desc','$fabricante','$preco','$quantidade','$data_de_validade')");
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Form 1 | Prova</title>
</head>
<body>
<nav style="padding: 10px;" class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="login.php">
    <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Pague Menos
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Produto <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form2.php">Cliente</a>
      </li>
      
    </ul>
  </div>
</nav>

    <form action="form1.php" method="post" style="margin: 100px;">

        <h1>Cadastro de Produtos</h1>

        <div class="form-group">
          <label>Nome do Produto</label>
          <input type="text" class="form-control" name="nome_prod">
          <small class="form-text text-muted">Digite o nome completo do produto para melhor identificação</small>
        </div>
        <div class="form-group">
          <label>Descrição do produto</label>
          <input type="text" class="form-control" name="desc_prod">
        </div>
        <div class="form-group">
          <label>Fabricante</label>
          <input type="text" class="form-control" name="fabricante_prod">
        </div>
        <div class="form-group">
          <label>Preço</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">R$</span>
            </div>
            <input type="text" class="form-control" aria-label="Quantia em Dollar (com ponto e duas casas decimais)">
          </div>
        </div>
        <div class="form-group">
          <label>Quantidade</label>
          <input type="number" class="form-control" name="quantidade_prod">
        </div>
        <div class="form-group">
          <label>Data de Validade</label>
          <input type="date" class="form-control" name="data_de_validade">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" required id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Clique aqui para confirmar o produto</label>
        </div>
        <input type="submit" name="submit" id="open-modal" class="btn btn-danger">
      </form>
</body>
</html>