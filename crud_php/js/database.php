<?php
    //Declarar variáveis com as informações do servidor
    $server = "localhost";
    $server_user = "root";
    $server_password = "";
    $database_name = "sge";

    //Declarar uma variável para receber a função de conexão com o Banco de Dados (XAMPP)
    $conexao = mysqli_connect($server,$server_user,$server_password,$database_name);
?>