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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="css/meuspedidos.css" rel="stylesheet">
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

        $insert = "insert into pedidos(nomecliente, endereco, telefone, nomeproduto, valorunitario, quantidade, valortotal) values('$nomecliente', '$endereco', '$telefone', '$produto', '$preco', '$quantidade', '$total')";
        $result = $conn->query($insert);
        $consulta = "select * from pedidos";
        $mostraConsulta = $conn->query($consulta);
    }else{
        $consulta = "select * from pedidos";
        $mostraConsulta = $conn->query($consulta);
    }
    
    ?>

    <div class="container">
        <?php
            if($result){
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>Pedido comprado com sucesso!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
                </div>";
            }else{
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Erro ao realizar compra<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
                </div>";
            }
        ?>
        <table class="table table-dark table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor Total</th>
                </tr>
            </thead>

            <tbody>
                <?php while($row = $mostraConsulta->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $row['nomecliente'] ?></td>
                    <td><?php echo $row['endereco'] ?></td>
                    <td><?php echo $row['telefone'] ?></td>
                    <td><?php echo $row['nomeproduto'] ?></td>
                    <td><?php echo $row['valorunitario'] ?></td>
                    <td><?php echo $row['quantidade'] ?></td>
                    <td><?php echo $row['valortotal'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>