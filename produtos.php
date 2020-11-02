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
    <link href="css/produtos.css" rel="stylesheet">
    <link href="css/animacao.css" rel="stylesheet">
    <link rel="icon" href="imagens/icon-logo.png">
    <script async defer src="js/script.js"></script>
</head>
<body>
    
    <header>
        <?php
            include('menu.html');
        ?>
    </header>

    <section class="container">
        <div class="category">
            <h2>Categorias</h2>
            <ul>
                <li><a href="#" onclick="exibirTodos()">Todos</a></li>
                <li><a href="#" onclick="exibirCategorias('celular')">Celular</a></li>
                <li><a href="#" onclick="exibirCategorias('notebook')">Notebook</a></li>
                <li><a href="#" onclick="exibirCategorias('console')">Consoles</a></li>
                <li><a href="#" onclick="exibirCategorias('televisao')">Televisões</a></li>
            </ul>
        </div><!-- category -->

        <div class="container-product">
        <?php
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
        ?>
            <div class="product" id="<?php echo $row['categoria']?>">
                <div class="img-product"><img src="<?php echo $row['nomeimagem'] ?>" alt="Galaxy S10" title="Galaxy S10"></div>

                <div class="title-product">
                    <p><?php echo $row['descricao'] ?></p>
                </div>

                <div class="price-product">
                    <h3 class="canceled">R$ <?php echo $row['preco'] ?></h3>
                    <h2>R$ <?php echo $row['precovenda'] ?></h2>
                </div>

                <div class="button-buy">
                    <a class="buy" href="pedidos.php">Comprar</a>
                </div>
            </div><!-- product -->

        <?php
            }
        }else{
            echo "Nenhum produto cadastrado!";
        }
        ?>

        </div><!-- container-product -->
        <div class="clear"></div>

    </section><!-- container -->
    
    <footer>
        <p>Todos os direitos reservados &copy; 2020</p>
    </footer>
    
</body>
</html>