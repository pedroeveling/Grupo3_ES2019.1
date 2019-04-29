<?php




include_once ("conexao.php");

	$nome = $_GET['nome'];


	$queryDelete = $conexao->query("delete from lojaze.usuarios where nome='$nome'");
	header('Location: ../listaUsuarios.php');
	exit();


?>
