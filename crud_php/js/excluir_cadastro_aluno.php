<?php

    //Incluir o arquivo de conexão com BD
    include "database.php";

    //recuperar o ID passado via GET pelo,link
    $id_aluno = $_GET['id_aluno'];

    //Realizar o comando em SQL
    $sql_excluir = "DELETE FROM sge_alunos WHERE sge_alunos.id_aluno = '$id_aluno'";

    if(mysqli_query($conexao,$sql_excluir))
    { //comando em SQL e Conexão com o banco de dados
        echo "Exclusão realizada com sucesso";
        header("location:listar_cadastro.php");
    }else
    {
        echo "Falha ao excluir o cadastro";
    }
?>