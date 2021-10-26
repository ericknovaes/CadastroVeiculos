<?php

    session_start();
    include_once("conexao.php");

?>

<html>

    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>

    <body>

        <!-- Janela de Cadastro -->
        <br><br>
        <div id="main-container">
            <h1>Cadastrar Veículos</h1>
            <form id="register-form" action="cadastrar.php" method="POST">
                <div class="full-box">
                    <label for="placa">Placa:</label>
                    <input type="placa" name="placa" id="placa" placeholder="Informe os digitos da placa" required>
                </div>
                <div class="full-box">
                    <label for="combustivel">Combustível:</label>
                    <input type="combustivel" name="combustivel" id="combustivel" placeholder="Informe o tipo de combustível" required>
                </div>
                <div class="full-box">
                    <label for="fabricante">Fabricante:</label>
                    <input type="fabricante" name="fabricante" id="fabricante" placeholder="Informe o nome do fabricante" required>
                </div>
                <div class="full-box">
                <input id="btn-submit" type="submit" value="Registrar">
                </div>
            </form>
        </div>

        <style>
            /* geral */
            * {
                margin: 0;
                font-family: Arial;
                color: #323232;
                border: none;
            }

            input, label {
                outline: none;
                width: 100%;
            }

            body {
                background-color: rgb(14, 0, 75);
            }

            /* form */
            #main-container {
                width: 500px;
                margin-left: auto;
                margin-right: auto;
                background-color: #FFF;
                border-radius: 10px;
                padding: 25px;
            }

            #main-container h1 {
                text-align: center;
                margin-bottom: 25px;
                font-size: 1.6rem;
            }

            input {
                border-bottom: 2px solid #323232;
                padding: 10px;
                font-size: .9rem;
                margin-bottom: 40px;
            }

            input:focus {
                border-color: rgb(79, 49, 214);
            }

            input[type="submit"] {
                background-color: rgb(79, 49, 214);
                color: #FFF;
                border: none;
                border-radius: 20px;
            }
        </style>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

    </body>

</html>