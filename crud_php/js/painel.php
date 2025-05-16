<?php 
    include "header.php";
    session_start();
    $usuario = $_SESSION['usuario'];
?>

<div class="painel">
    <p>Painel de Gerenciamento do Sistema</p>
    <p>Você tem permissão de acesso do tipo: <strong><?php echo $usuario['perfil']; ?></strong></p>
    <h3>Seja Bem-Vindo, <span><?php echo $usuario['login']; ?></span>!</h3>

    <?php if ($usuario['perfil'] === "admin") { ?>
        <div class="acoes-admin">
            <a href="index.php" class="botao">Cadastrar Alunos</a>
            <a href="listar_cadastro.php" class="botao">Listar Cadastros de Alunos</a>
        </div>
    <?php } ?>
</div>

<?php include "footer.php"; ?>
