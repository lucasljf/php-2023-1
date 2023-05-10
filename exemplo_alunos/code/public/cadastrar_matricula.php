<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Registro de Matrícula</h3>
    <form action="inserir_matricula.php" method="post">
        <label for="aluno">Aluno:</label> <br>
        <select name="aluno" id="aluno">
            <?php
            require_once '../model/aluno_dao.php';
            $conexao = new Conexao();
            $alunoDao = new AlunoDao($conexao);

            $alunos = $alunoDao->listar_tudo();

            foreach ($alunos as $aluno) {
                echo "<option value='" . $aluno->id . "'>" . $aluno->nome . "</option>";
            }
            ?>
        </select> <br><br>

        <label for="turma">Turma:</label> <br>
        <select name="turma" id="turma">
            <?php
            require_once '../model/turma_dao.php';
            $conexao = new Conexao();
            $turmaDao = new TurmaDao($conexao);

            $turmas = $turmaDao->listar_tudo();

            foreach ($turmas as $turma) {
                echo "<option value='" . $turma->id . "'>" . $turma->nome . "</option>";
            }
            ?>
        </select> <br><br>

        <label for="data_matricula">Data da matrícula:</label> <br>
        <input type="date" name="data_matricula"> <br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>