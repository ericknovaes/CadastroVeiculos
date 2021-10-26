<?php

    session_start();
    include_once("conexao.php");

    $codigo = $_GET['codigo'];

    if(!empty($codigo)){

        $query = "DELETE FROM veiculos WHERE codigo =".$codigo;
        $result = mysqli_query($mysqli, $query);
        
        if(mysqli_affected_rows($mysqli)){

            header("Location: veiculos.php");

        }else{
            
            header("Location: edit_cadastro.php");
        }

    }else{	
        
        header("Location: cadastro_veiculo.php");

    }

?>