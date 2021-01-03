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
    <link href="../css/lojas.css" rel="stylesheet">
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

    <section class="stores">
        <div class="center">
            <div class="locations">
                <h3>Rio de Janeiro</h3>
                <p>Avenida Presidente Vargas, 5000</p>
                <p>10&ordm; andar</p>
                <p>Centro</p>
                <p>(21) 3333 3333</p>
            </div><!-- locais -->

            <div class="locations">
                <h3>São Paulo</h3>
                <p>Avenida Paulista, 895</p>
                <p>3&ordm; andar</p>
                <p>Jardins</p>
                <p>(11) 4444 4444</p>
            </div><!-- locais -->

            <div class="locations">
                <h3>Santa Catarina</h3>
                <p>Rua Major &Aacute;vila, 370</p>
                <p>Vila Mariana</p>
                <p>(41) 5555 5555</p>
                <br>
            </div><!-- locations -->
        </div><!-- center -->
    </section><!-- stores -->
</body>
</html>