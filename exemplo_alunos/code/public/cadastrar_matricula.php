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
    Nome do aluno: <br>
    <select>
      <?php
        require_once '../model/aluno_dao.php';
        $alunoDao = new AlunoDao();

        $alunos = $alunoDao->listar_tudo();

        foreach ($alunos as $aluno) {
          echo "<option value='". $aluno->id . "'>" . $aluno->nome. "</option>";
        }
      ?>
    </select>
    <br>
    Nome da turma: <br>
    <select>
      <?php
        require_once '../model/turma_dao.php';
        $turmaDao = new TurmaDao();

        $turmas = $turmaDao->listar_tudo();

        foreach ($turmas as $turma) {
          echo "<option value='". $turma->id . "'>" . $turma->nome. "</option>";
        }
      ?>
    </select>
    <br>
    Data de matricula: <br>
    <input type="date" name="data_matricula" id="data_matricula"> <br><br>

    <input type="submit" value="Salvar">
  </form>
</body>

</html>
