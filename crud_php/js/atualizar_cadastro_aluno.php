<?php
    //Incluir o arquivo de conexão com BD
    include "database.php";


    //Resgatar as informações do formulário
    $id_aluno = $_POST['id_aluno'];
    $nome_aluno = $_POST['nome_aluno'];
    $email_aluno = $_POST['email_aluno'];
    $celular_aluno = $_POST['celular_aluno'];

    //Declarar e realizar a instrução em SQL
    $sql_update = "UPDATE sge_alunos SET nome_aluno = '$nome_aluno', email_aluno = '$email_aluno', celular_aluno = '$celular_aluno' WHERE sge_alunos.id_aluno = '$id_aluno'";

    echo $sql_update;

    //Função para conectar os banco de daods e enviar as informações
    if(mysqli_query($conexao,$sql_update))
    { //comando em SQL e Conexão com o banco de dados
        echo "Atualização realizada com sucesso";
        header("location:listar_cadastro.php");
    }else
    {
        echo "Falha ao realizar a atualização";
    }