<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <form action="inserir_matricula.php" method="get">

        Aluno: <br>
        <select type="text" name="id_aluno" id="id_aluno"> <br><br>
        <option selected disabled value="">Selecione</option>
        <?php
                require_once "../model/aluno_dao.php";
                $conexao = new Conexao();
                $alunoDao = new AlunoDao($conexao);

                $alunos = $alunoDao -> listar_tudo();

                foreach ($alunos as $aluno) {
                    echo "<option value ='" . $aluno->id . "'>" . $aluno->nome . "</option>"; }
            ?>
        </select> <br> <br>

        Turma: <br>
        <select type="text" name="id_turma" id="id_turma"> <br><br>
        <option selected disabled value="">Selecione</option>
            <?php
                require_once '../model/turma_dao.php';
                $conexao = new Conexao();
                $turmaDao = new TurmaDao($conexao);

                $turmas = $turmaDao -> listar_tudo();

                foreach ($turmas as $turma) {
                    echo "<option value ='" . $turma->id . "'>" . $turma->nome . "</option>"; }
            ?>
        </select> <br> <br>

        Data de ingresso: <br>
        <input type="date" name="data_ingresso" id="data_ingresso"> <br><br>

        <input type="submit" value="Salvar">
    </form>
</body>
</html>