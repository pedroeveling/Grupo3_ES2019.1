<?php


include_once ("conexao.php");

$email = $_POST['email'];

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$tipo = $_POST['tipo'];

$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];


$query = "UPDATE usuarios SET email='$email', nome='$nome', cpf='$cpf', telefone='$telefone', tipo='$tipo', endereco='$endereco', cidade='$cidade', estado='$estado', cep='$cep' where nome='$nome'";

$sql = mysqli_query($conexao, $query);
header('Location: ../listaUsuarios.php');
exit();
?>
