<?php

$conexao = mysqli_connect("localhost", "root", "", "usuarios");/* Estabelece a conexão */

if(!$conexao)
{
    echo "FALHA DE CONEXÃO!!!";/* Exibe uma mensagem de erro caso a conexão falhe */
}


?>
