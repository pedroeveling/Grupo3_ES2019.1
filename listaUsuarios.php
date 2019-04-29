<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="publico/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="publico/css/estilo.css">
</head>

<?php
    include "header.php";
?>

<body>

<hr><br>


    <div>

        <div>

            <h5>Usuários cadastrados:</h5>

            <table class="table table-bordered">

                <thead class="thead-dark">

                  <th>Nome</th>
                  <th>Email</th>
                  <th>CPF</th>
                  <th>Telefone</th>
                  <th>Tipo</th>
                  <th>Endereco</th>
                  <th>Complemento</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                  <th>CEP</th>
                  <th colspan=2>Gerenciamento</th>

                </thead>

                <tbody>

                    <?php

                        include_once('banco/read.php')

                    ?>

                </tbody>

            </table>



        </div>

    </div>



<br><hr>

</body>

<?php
    include "footer.php";
?>

</html>
