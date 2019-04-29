<?php

$conexao = mysqli_connect("127.0.0.1", "root", "", "lojaze");/* Estabelece a conexão */

if(!$conexao)
{
    echo "FALHA DE CONEXÃO!!!";/* Exibe uma mensagem de erro caso a conexão falhe */
}


?>
