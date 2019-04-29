<?php

include_once ("conexao.php");

$querySelect = $conexao->query("select * from lojaze.usuarios");

while($registros = $querySelect->fetch_assoc()):

	$nome = $registros['nome'];
	$email = $registros['email'];
	$cpf = $registros['cpf'];
	$telefone = $registros['telefone'];
	$tipo = $registros['tipo'];
	$endereco = $registros['endereco'];
	$complemento = $registros['complemento'];
	$cidade = $registros['cidade'];
	$estado = $registros['estado'];
	$cep = $registros['cep'];

	echo "<tr>";
	echo "<td>$nome</td><td>$email</td><td>$cpf</td><td>$telefone</td><td>$tipo</td><td>$endereco</td><td>$complemento</td><td>$cidade</td><td>$estado</td><td>$cep</td><td><a href='edita.php?nome=$nome'><i>Editar</i></td>   <td><a href='banco/delete.php?nome=$nome'><i>Excluir</i></td>";
	echo "</tr>";

endwhile;


?>
