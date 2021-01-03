<?php

require_once('db-connect.php');

$sql = "select * from produtos";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Eletro Stack</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/faleconosco.css" rel="stylesheet">
    <link href="../css/animacao.css" rel="stylesheet">
    <link rel="icon" href="../imagens/icon-logo.png">
    <script async defer src="../js/script.js"></script>
</head>
<body>
    
    <header>
        <?php
            include('menu.php');
        ?>
    </header>

    <div class="container">
        <form method="POST" action="meuspedidos.php">
            <h2 class="titulo-pedido">Enviar mensagem</h2>
            <div class="form-group">
                <label class="text-white" for="nome">Nome</label>
                <input type="text" class="form-control bg-transparent" name="nome" id="nome">
            </div>

            <div class="form-group">
                <label class="text-white" for="nome">Mensagem</label>
                <textarea type="text" class="form-control bg-transparent" name="nome" id="nome"></textarea>
            </div>

            <button class="btn btn-primary" name="enviar" type="submit">Enviar</button>
        </form>
    </div><!-- container -->

</body>
</html>