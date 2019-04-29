<?php

$hostname = "127.0.0.1";
$user = "root";
$password = "";
$database = "lojaze";
$conexao = mysqli_connect($hostname, $user, $password, $database);/* Estabelece a conexão */

if(!$conexao)
{
    echo "FALHA DE CONEXÃO!!!";/* Exibe uma mensagem de erro caso a conexão falhe */
}


?>
