<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "select * from produtos";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="css/main.css" rel="stylesheet">
    <link href="css/pedidos.css" rel="stylesheet">
    <title>Pedidos</title>
</head>
<body>
    <header>
        <?php 
            include('menu.html');
        ?>
    </header>

    <form method="POST" action="meuspedidos.php">
        <h2 class="titulo-pedido">Faça sua compra</h2>
        <div class="form-group">
            <label class="text-white" for="nome">Nome</label>
            <input type="text" class="form-control bg-transparent" name="nome" id="nome">
        </div>

        <div class="form-group">
            <label class="text-white" for="endereco">Endereço</label>
            <input type="text" class="form-control bg-transparent" name="endereco" id="endereco">
        </div>

        <div class="form-group">
            <label class="text-white" for="telefone">Telefone</label>
            <input type="text" class="form-control bg-transparent" name="telefone" id="telefone">
        </div>
        <div class="form-group">
            <label for="produto" class="text-white">Produto</label>
            <select name="produto" class="select form-control bg-transparent" id="produto">
                <?php while($row = $result->fetch_assoc()) { ?>
                <option class="option"><?php
                     echo $row['descricao'];
                     echo " R$ ".$row['precovenda'];
                     ?>
                </option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label class="text-white" for="preco">Preço R$</label>
            <input type="text" class="form-control bg-transparent" name="preco" id="preco">
        </div>

        <div class="form-group">
            <label class="text-white" for="quantidade">Quantidade</label>
            <input type="text" class="form-control bg-transparent" name="quantidade" id="quantidade">
        </div>

        <div class="form-group">
            <label class="text-white" for="total">Valor Total</label>
            <input type="text" class="form-control bg-transparent" name="total" id="total">
        </div>

        <button class="btn btn-primary" name="enviar" type="submit">Enviar</button>
        <a href="produtos.php" class="btn btn-danger">Cancelar</a>
    </form>

</body>
</html>