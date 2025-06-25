<?php
    include "header.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="http://localhost/CRUD---P-gina-de-Cadastro-de-dados-e-Atualiza-o-main/crud_php/css/style_form_login.css"> <!-- CSS externo -->
</head>
<body>

    <form action="login_user.php" method="post">
        <label for="login_user">Login:</label>
        <input type="text" name="login_user" id="login_user" placeholder="Informe seu login">

        <label for="password_user">Senha:</label>
        <input type="password" name="password_user" id="password_user" placeholder="Digite sua senha">

        <input type="submit" value="Acessar">
    </form>

    <p><a href="#">Esqueceu sua Senha?</a></p>
    <p><a href="#">Cadastre-se</a></p>

    <?php
        if(isset($_SESSION['mensagem'])){
            echo "<div class='mensagem'>" . $_SESSION['mensagem'] . "</div>";
            unset($_SESSION['mensagem']);
        }
    ?>

</body>
</html>
