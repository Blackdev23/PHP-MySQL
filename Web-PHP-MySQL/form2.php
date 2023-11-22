<?php

if(isset($_POST["submit"]))
{
  include_once("config.php");

  $nome = $_POST["nome_cliente"];
  $endereco = $_POST["endereco_cliente"];
  $telefone = $_POST["telefone_cliente"];
  $email = $_POST["email_cliente"];

  $response = mysqli_query($conexao,"INSERT INTO cliente(nome_cliente,endereco_cliente,telefone_cliente,email_cliente) VALUES('$nome','$endereco','$telefone','$email')");
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Form 2 | Prova</title>
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
        <a class="nav-link" href="#">Cliente<span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form1.php">Produto</a>
      </li>
      
    </ul>
  </div>
</nav>

    <form action="form2.php" method="post" style="margin: 100px;">

        <h1>Cadastro de Clientes</h1>

        <div class="form-group">
          <label>Nome do Cliente</label>
          <input type="text" class="form-control" name="nome_cliente">
          <small class="form-text text-muted">Digite o nome completo do cliente para melhor identificação</small>
        </div>
        <div class="form-group">
          <label>Endereço do Cliente</label>
          <input type="text" class="form-control" name="endereco_cliente">
        </div>
        <div class="form-group">
          <label>Telefone</label>
          <input type="text" class="form-control" name="telefone_cliente">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" name="email_cliente">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" required id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Eu li e aceito os termos de utilização de dados</label>
        </div>
        <input type="submit" name="submit" class="btn btn-danger">
      </form>
</body>
</html>