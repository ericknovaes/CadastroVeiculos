<?php 

    include("conexao.php");

    $buscar = $_POST['buscar'];

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>

        <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">

        <title>Veículos</title>
    </head>

    <body>
        
        <!-- MENU -->
        <nav class="navbar navbar-light bg-dark">
            <div class="container" style="margin-inline: 250px;">
                <i class="fas fa-car-alt text-light" style="font-size: 25px;"></i>
                <h3 style="color: rgb(255, 255, 255);">Veículos</h3>
                <form class="d-flex" action="buscar.php" method="POST">
                    <input class="form-control me-2" name="buscar" style="width: 500px;" type="search" placeholder="Digite a placa do carro" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Buscar</button>
                </form>
            </div>
        </nav>

        <center>
            <br>
            <table class="minhaTabela">

                <tr class="titulo">
                    <td height="40">Placa</td>
                    <td height="40">Combustível</td>
                    <td height="40">Fabricante</td>
                    <td height="40">Ação</td>
                </tr>
                <?php

                    $busca_placa = "SELECT * FROM veiculos WHERE placa LIKE '%$buscar%' LIMIT 5";
                    $resultado = mysqli_query($mysqli, $busca_placa);

                    while($rows = mysqli_fetch_array($resultado)){

                ?>
                <tr>
                    <td class="component1"><p><?php echo $rows['placa'];?></p></td>
                    <td class="component2"><p><?php echo $rows['combustivel'];?></p></td>
                    <td class="component3"><p><?php echo $rows['fabricante'];?></p></td>
                    <td class="component4">
                        <a href="edit_cadastro.php?codigo=<?php echo $rows['codigo']; ?>">Editar</a>
                        <a href="deletar.php?codigo=<?php echo $rows['codigo'] ?>">Deletar</a>
                    </td>
                </tr>
                <?php } ?>
            </table>

            <br>
            <button class="btn bg-dark">
                <a class="nav-item nav-link" href="cadastro_veiculo.php">Cadastrar</a>
            </button>

            <style>

                .minhaTabela{
                text-align: center;
                width: 80%;
                border: solid;
                }

                .titulo{
                    font-weight: bold;
                    border: solid;
                }

                .component1{
                    border: solid 1px;
                }
                .component2{
                    border: solid 1px;
                }
                .component3{
                    border: solid 1px;
                }
                .component4{
                    border: solid 1px;
                }

            </style>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <link rel="stylesheet" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
            <script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>

            <script>

                $(document).ready(function(){
                    $('#minhaTabela').DataTable({
                            "language": {
                                "lengthMenu": "Mostrando _MENU_ registros por página",
                                "zeroRecords": "Nada encontrado",
                                "info": "Mostrando página _PAGE_ de _PAGES_",
                                "infoEmpty": "Nenhum registro disponível",
                                "infoFiltered": "(filtrado de _MAX_ registros no total)"
                            }
                        });
                });

            </script>

        </center>
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

    </body>

</html>