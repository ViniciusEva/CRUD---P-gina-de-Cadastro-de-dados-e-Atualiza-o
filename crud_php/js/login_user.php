<?php
    //Incluir o arquivo de conexão com o banco de dados
    include "database.php";

    //Iniciar a sessão em PHP
    session_start();

    //Recuperar as informações via POST do formulário
    $login = $_POST['login_user'];
    $password = $_POST['password_user'];

    //Criar uma validação para verificar se os campos do formulário estão preenchidos
    if(empty($login))
    {
        $_SESSION['mensagem'] = "Preencha o campo Login";
        header("Location: form_login.php");
    }
    elseif(empty($password))
    {
        $_SESSION['mensagem'] = "Preencha o campo Senha";
        header("Location: form_login.php");
    }
    else
    {
        //Criar uma string com o comando em SQL para buscar as informações de login no banco de dados
        $sql_login = "SELECT * FROM login_sge WHERE login_sge = '$login' AND password_sge = '$password'";

        //Conectar ao banco de dados e executar o comando em SQL
        $resultado = mysqli_query($conexao, $sql_login);

        //Converter o resultado da consulta ao banco de dados em um array associativo
        $dados = mysqli_fetch_array($resultado);

        //Validar o login e senha retornados da consulta ao BD
        if($dados['login_sge'] == $login and $dados['password_sge'] == $password)
        {
            //Criar um novo array com os dados de usuário
            $usuario = array("login" => $dados['login_sge'], "senha" => $dados['password_sge'], "perfil"=> $dados['profile_sge']);
            //Colocar o array do usuário a sessão
            $_SESSION['usuario'] = $usuario;
            //Redirecionar para a página de verificação
            header("Location: painel.php");
        }
        else
        {
            //Criar uma mensagem de aviso de erro no login ou senha informados
            $_SESSION['mensagem'] = "Login ou Senha Incorretos";
            header("Location: form_login.php");
        }
    }
?>