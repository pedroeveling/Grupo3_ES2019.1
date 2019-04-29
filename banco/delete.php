<?php




include_once ("conexao.php"); 

	$nome = $_GET['nome'];


	$queryDelete = $conexao->query("delete from usuario where nome='$nome'");


?>