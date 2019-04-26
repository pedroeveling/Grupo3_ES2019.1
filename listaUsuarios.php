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
  <hr>
  <table class="tabelaUsuarios" border="1">
    <thead>
      <tr>
        <th>Email</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>CPF</th>
        <th>Tipo</th>
        <th>Endereco</th>
        <th>Complemento</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>CEP</th>
      </tr>
    </thead>
    <?php
      include_once("conexao.php");/* Estabelece a conexão */
      $sql = "select * from lojaze.usuarios";
      $consulta = mysqli_query($conexao, $sql);
      while ($usuarios = mysqli_fetch_array($consulta)){
        $email = $usuarios[0];
        $nome = $usuarios[2];
        $telefone = $usuarios[3];
        $cpf = $usuarios[4];
        $tipo = $usuarios[5];
        $endereco = $usuarios[6];
        $complemento = $usuarios[7];
        $cidade = $usuarios[8];
        $estado = $usuarios[9];
        $cep = $usuarios[10];

        echo "<td>$email</td>";
        echo "<td>$nome</td>";
        echo "<td>$telefone</td>";
        echo "<td>$cpf</td>";
        echo "<td>$tipo</td>";
        echo "<td>$endereco</td>";
        echo "<td>$complemento</td>";
        echo "<td>$cidade</td>";
        echo "<td>$estado</td>";
        echo "<td>$cep</td>";
      }
      mysqli_close($conexao);
    ?>
  </table>
</body>

<?php
    include "footer.php";
?>

</html>
