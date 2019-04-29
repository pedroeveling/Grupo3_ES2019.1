<?php

include_once ("conexao.php"); 

$querySelect = $conexao->query("select * from usuario");

while($registros = $querySelect->fetch_assoc()): 

	$nome = $registros['nome'];
	$email = $registros['email'];
	$cpf = $registros['cpf'];
	$telefone = $registros['telefone'];
	$tipo = $registros['tipo'];


	echo "<tr>";
	echo "<td>$nome</td><td>$email</td><td>$cpf</td><td>$telefone</td><td>$tipo</td><td><a href='edita.php?nome=$nome'><i>edit</i></td>   <td><a href='banco/delete.php?nome=$nome'><i>delete</i></td>";
	echo "</tr>";

endwhile;


?>