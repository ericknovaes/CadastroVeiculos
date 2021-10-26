<?php

    session_start();
    include_once("Conexao.php");
        
    $codigo = $_GET['codigo'];
    $placa = $_POST['placa'];
    $combustivel = $_POST['combustivel'];
    $fabricante = $_POST['fabricante'];

    $sql = "UPDATE veiculos SET
    placa = '$placa',
    combustivel = '$combustivel',
    fabricante = '$fabricante'
    WHERE codigo = ".$codigo;

    $sql_code = mysqli_query($mysqli, $sql);

    if(mysqli_affected_rows($mysqli)){

        header("Location: veiculos.php");

    } else{

        header("Location: edit_cadastro.php?codigo=$codigo");

    }

?>