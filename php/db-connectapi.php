<?php

function query($sql){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";

    $connect = mysqli_connect($servername, $username, $password, $database);
    $resultado = mysqli_query($connect, $sql);
    mysqli_close($connect);
    return $resultado;
}

function nonquery($sql){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";

    $connect = mysqli_connect($servername, $username, $password, $database);
    $resultado = mysqli_query($connect, $sql);
    mysqli_close($connect);
}

?>