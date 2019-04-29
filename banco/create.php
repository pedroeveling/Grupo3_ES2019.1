<?php


include_once ("conexao.php"); 

$email = $_POST['email'];
$senha = $_POST['senha'];

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$tipo = $_POST['tipo'];

$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];




$query = "INSERT INTO usuario (email, senha, nome, cpf, telefone, tipo, endereco, cidade, estado, cep) VALUES ('".$email."', '".$senha."', '".$nome."', '".$cpf."', '".$telefone."', '".$tipo."', '".$endereco."', '".$cidade."', '".$estado."', '".$cep."')";

$sql = mysqli_query($conexao, $query);


?>