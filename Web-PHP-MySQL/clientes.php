<?php
  include_once("config.php");

  $query = mysqli_query($conexao,'SELECT * FROM cliente');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Lista de Clientes | Prova</title>
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
            <a class="nav-link" href="#">Lista de Clientes<span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="form1.php">Adicionar Produto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="form2.php">Adicionar Cliente</a>
        </li>
        
        </ul>
    </div>
    </nav>

    <h1 style="text-align: center; margin: 10px">Lista de Clientes</h1>

    <table style="margin: 50px" class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Telefone</th>
            <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            while($user_data = mysqli_fetch_assoc($query))
            {

                echo "<tr>";
                echo "<td>". $user_data["idCliente"] ."</td>";
                echo "<td>". $user_data["nome_cliente"] ."</td>";
                echo "<td>". $user_data["endereco_cliente"] ."</td>";
                echo "<td>". $user_data["telefone_cliente"] ."</td>";
                echo "<td>". $user_data["email_cliente"] ."</td>";
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>
</body>
</html>