<?php
  include_once '../acesso/verifica_sessao.php';

if (!$_SESSION['logado']) {
   header('Location: ../acesso/formulario_login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página Inicial</title>
    </head>
    <body>
        <form action="inserir_matricula.php" method="get">
            Nome do Aluno: <br>
            <select name="aluno" id="aluno">
                <option value="Selecione" selected>Selecione...</option>
                <?php
                    require_once '../../model/aluno/aluno_dao.php';
                    $conexao = new Conexao();
                    $alunoDao = new AlunoDao($conexao);

                    $alunos = $alunoDao->listar_tudo();

                    // busca  a lista de id e alunos dentro de cada tupla(linha)
                    foreach ($alunos as $aluno) {
                        echo "<option value='".$aluno->id."'>".$aluno->nome."</option>";
                    }
                ?>
            </select> <br><br>
            Nome da Turma: <br>
            <select name="turma" id="turma">
                <option value="Selecione" selected>Selecione...</option>
                <?php
                    require_once '../../model/turma/turma_dao.php';
                    $conexao = new Conexao();
                    $turmaDao = new TurmaDao($conexao);

                    $turmas = $turmaDao->listar_tudo();

                    // busca  a lista de id e alunos dentro de cada tupla(linha)
                    foreach ($turmas as $turma) {
                        echo "<option value='".$turma->id."'>".$turma->nome."</option>";
                    }
                ?>
            </select> <br><br>
            Data da matricula: <br>
            <input type="date" name="data_matricula" id="data_matricula"> <br><br>

            <input type="submit" value="Salvar">
        </form>
    </body>
</html>