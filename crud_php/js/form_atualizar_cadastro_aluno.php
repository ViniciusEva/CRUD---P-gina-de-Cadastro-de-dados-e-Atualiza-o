<?php 
    //Importar o arquivo de conexão com o banco de dados
    require "database.php";
    //Importar o módulo de cabeçalho da página
    require_once "header.php";

    //Recuperar o id informado via GET
    $id_aluno = $_GET['id_aluno'];

    //Comando em SQL
    $sql_listar_cadastro = "SELECT * FROM sge_alunos WHERE sge_alunos.id_aluno = '$id_aluno'";

    //Conecta ao BD e executar o comando em SQL
    $consulta_bd = mysqli_query($conexao, $sql_listar_cadastro);
    //Convertendo a consulta ao BD em um array associativo
    $dados_db = mysqli_fetch_assoc($consulta_bd);


?>


<main class="form-container">
    <div class="form-header">
        <a href="index.php" class="back-link">
            <img src="http://localhost/CRUD---P-gina-de-Cadastro-de-dados-e-Atualiza-o-main/crud_php/images/icons/voltar.png" alt="Voltar">
        </a>
        <h3>Formulário de Atualização de Cadastro dos Alunos</h3>
    </div>

    <form action="atualizar_cadastro_aluno.php" method="post" class="cadastro-fsorm">

        <input type="hidden" name="id_aluno" value ="<?php echo $dados_db['id_aluno']?>">
        
        <label for="nome_aluno">Nome:</label>
        <input type="text" name="nome_aluno" id="nome_aluno" value ="<?php echo $dados_db['nome_aluno']?>" required>

        <label for="email_aluno">Email:</label>
        <input type="email" name="email_aluno" id="email_aluno" value = "<?php echo $dados_db['email_aluno']?>" required>

        <label for="celular_aluno">Celular:</label>
        <input type="text" name="celular_aluno" id="celular_aluno" value = "<?php echo $dados_db['celular_aluno']?>" required>

        <input type="submit" value="Atualizar Cadastro do Aluno" class="btn-submit">
    </form>
</main>

<?php include_once "footer.php"; ?>