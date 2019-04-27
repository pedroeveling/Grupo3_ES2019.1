<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nomes e Emails dos usuarios</title>
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
  <hr>
  <table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col"> <a href="listaNomeEmail.php?sort=nome">Nome</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <?php
      include_once("conexao.php");/* Estabelece a conexão */
      $sql = "select * from lojaze.usuarios";
      if ($_GET['sort'] == 'nome')
      {
        $sql .= " ORDER BY nome";
      }
      $consulta = mysqli_query($conexao, $sql);
      while ($usuarios = mysqli_fetch_array($consulta)){
        $email = $usuarios[0];
        $nome = $usuarios[2];

        echo "<tr scope='row'>";
        echo "<td>$nome</td>";
        echo "<td>$email</td>";
        echo "</tr>";
      }
      mysqli_close($conexao);
    ?>
  </table>
</body>

<?php
    include "footer.php";
?>

</html>
