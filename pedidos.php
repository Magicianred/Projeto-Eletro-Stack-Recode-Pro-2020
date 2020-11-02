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
    <link href="css/main.css" rel="stylesheet">
    <link href="css/faleconosco.css" rel="stylesheet">
    <title>Pedidos</title>
</head>
<body>
    <header>
    <?php 
    include('menu.html');
    ?>
    </header>

    <form class="formulario" method="POST" action="meuspedidos.php">
        <h2>Envie uma mensagem para nós</h2>
        <div class="input">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
        </div><!-- input -->

        <div class="input">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" placeholder="Digite seu nome" required>
        </div><!-- input -->

        <div class="input">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" placeholder="Digite seu nome" required>
        </div><!-- input -->

        <div class="input">
            <label class="produto" for="produto">Produto</label>
            <select id="produto" name="produto">
                <?php while($row = $result->fetch_assoc()){ ?>
                <option><?php
                     echo $row['descricao'];
                     echo " R$ ".$row['precovenda'];
                     ?></option>
                <?php } ?>
            </select>
        </div><!-- input -->

        <div class="input">
            <label for="preco">Preço<label>
            <input type="text" name="preco" id="preco" required>
        </div><!-- input -->

        <div class="input">
            <label for="quantidade">Quantidade<label>
            <input type="text" name="quantidade" id="quantidade" required>
        </div><!-- input -->

        <div class="input">
            <label for="total">Valor Total<label>
            <input type="text" name="total" id="total" required>
        </div><!-- input -->

        <div class="input-submit">
            <input type="submit" name="enviar" value="Enviar">
        </div><!-- input-submit -->

    </form>

</body>
</html>