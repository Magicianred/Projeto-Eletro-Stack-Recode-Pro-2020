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
    <title>Eletro Stack</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/faleconosco.css" rel="stylesheet">
    <link href="css/animacao.css" rel="stylesheet">
    <link rel="icon" href="imagens/icon-logo.png">
    <script async defer src="js/script.js"></script>
</head>
<body>
    
    <div class="container">
        <header>
            <?php
                include('menu.html');
            ?>
        </header>

        <form class="formulario" method="POST">
            <h2>Envie uma mensagem para nós</h2>
            <div class="input">
                <span>Nome</span>
                <input type="text" placeholder="Digite seu nome" required>
            </div><!-- input -->

            <div class="input">
                <span>Mensagem</span>
                <textarea placeholder="Digite sua mensagem"></textarea>
            </div><!-- input -->

            <div class="input-submit">
                <input onclick="contato()" type="submit" value="Enviar">
            </div><!-- input-submit -->

            <div class="clear"></div>
        </form>

        <footer>
            <p>Todos os direitos reservados &copy; 2020</p>
        </footer>
    </div><!-- container -->

</body>
</html>