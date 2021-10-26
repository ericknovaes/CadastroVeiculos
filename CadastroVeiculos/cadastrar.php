<?php

    session_start();
    include_once("conexao.php");

    $placa = $_POST['placa'];
    $combustivel = $_POST['combustivel'];
    $fabricante = $_POST['fabricante'];

    $sql = "INSERT INTO veiculos(placa, combustivel, fabricante) VALUES ('$placa', '$combustivel', '$fabricante');";
    $result = mysqli_query($mysqli, $sql);

    if(mysqli_insert_id($mysqli)){

        header("Location: veiculos.php");

    }else{

        header("Location: cadastro_veiculo.php");

    }

?>