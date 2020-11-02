<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "select * from pedidos";
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

    <?php

    if(isset($_POST['enviar'])){
        $nomecliente = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $produto = $_POST['produto'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $total = $_POST['total'];

        $insert = "insert into pedidos values('$nomecliente', '$endereco', '$telefone', '$produto', '$preco', '$quantidade', '$total')";
        $result = $conn->query($insert);
        $consulta = "select * from pedidos";
        $mostraConsulta = $conn->query($consulta);
    
    }else{
        $consulta = "select * from pedidos";
        $mostraConsulta = $conn->query($consulta);
    }
    
    ?>

    <div class="container-pedidos">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Valor Total</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $mostraConsulta->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $row['nomecliente']?></td>
                    <td><?php echo $row['endereco']?></td>
                    <td><?php echo $row['telefone']?></td>
                    <td><?php echo $row['nomeproduto']?></td>
                    <td><?php echo $row['valorunitario']?></td>
                    <td><?php echo $row['quantidade']?></td>
                    <td><?php echo $row['valortotal']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>