<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "usuarios";
$conexao = mysqli_connect($hostname, $user, $password, $database);/* Estabelece a conexão */

if(!$conexao)
{
    echo "FALHA DE CONEXÃO!!!";/* Exibe uma mensagem de erro caso a conexão falhe */
}


?>
