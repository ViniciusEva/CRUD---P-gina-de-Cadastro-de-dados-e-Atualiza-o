<!-- Nome do Banco de dados: sge_fatec -->
<!-- Senha do banco: Fatec25ADS! -->
<!-- server: sge_Fatec.mysql.dbaas.com.br -->
<!-- https://phpmyadmin.locaweb.com.br/ -->

<?php
    //Incluir o arquivo de conexão com BD
    include "database.php";


    //Resgatar as informações do formulário
    $nome_aluno = $_POST['nome_aluno'];
    $email_aluno = $_POST['email_aluno'];
    $celular_aluno = $_POST['celular_aluno'];

    //Declarar e realizar a instrução em SQL
    $sql = "INSERT INTO sge_alunos (nome_aluno, email_aluno, celular_aluno) VALUES ('$nome_aluno', '$email_aluno', '$celular_aluno')";

    echo $sql;

    //Função para conectar os banco de daods e enviar as informações
    if(mysqli_query($conexao,$sql))
    { //comando em SQL e Conexão com o banco de dados
        echo "Cadastro realizado com sucesso";
        header("location:listar_cadastro.php");
    }else
    {
        echo "Falha ao realizar o cadastro";
    }