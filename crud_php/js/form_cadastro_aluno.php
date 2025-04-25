<!-- INSERT INTO `sge_alunos` (`id_aluno`, `nome_aluno`, `email_aluno`, `celular_aluno`) VALUES ('1', 'vinicius', 'vinicius.souza160@fatec.sp.gov.br', '(11)93045-8346'); -->
<?php require_once "header.php"; ?>

<main class="form-container">
    <div class="form-header">
        <a href="index.php" class="back-link">
            <img src="http://localhost/crud_php/images/icons/voltar.png" alt="Voltar">
        </a>
        <h3>Formulário de Cadastro</h3>
    </div>

    <form action="cadastro_aluno.php" method="post" class="cadastro-form">
        <label for="nome_aluno">Nome:</label>
        <input type="text" name="nome_aluno" id="nome_aluno" required>

        <label for="email_aluno">Email:</label>
        <input type="email" name="email_aluno" id="email_aluno" required>

        <label for="celular_aluno">Celular:</label>
        <input type="text" name="celular_aluno" id="celular_aluno" required>

        <input type="submit" value="Cadastrar Aluno" class="btn-submit">
    </form>
</main>

<?php include_once "footer.php"; ?>