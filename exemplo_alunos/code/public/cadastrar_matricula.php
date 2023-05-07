<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Mátrícula</title>
</head>

<body>
  <form action="inserir_matricula.php" method="get">

    Aluno: <br>
    <select name="aluno_id" id="aluno_id">
      <?php
      require_once '../model/aluno_dao.php';
      $conexao = new Conexao();
      $alunoDao = new AlunoDao($conexao);

      $alunos = $alunoDao->listar_tudo();

      foreach ($alunos as $aluno){
        echo "<option value='" . $aluno->id . "'>" . $aluno->nome . "</option>";
      }
      ?>
    </select>
    <br/><br>

    Turma: <br>
    <select name="turma_id" id="turma_id">
      <?php
      require_once '../model/turma_dao.php';
      $conexao = new Conexao();
      $turmaDao = new TurmaDao($conexao);

      $turmas = $turmaDao->listar_tudo();

      foreach ($turmas as $turma){
        echo "<option value='" . $turma->id . "'>" . $turma->nome . "</option>";
      }
      ?>
    </select>
    <br/><br>

    Data de Matrícula: <br>
    <input type="date" name="data_matricula" id="data_matricula"> <br><br>

    <input type="submit" value="Salvar">
  </form>
</body>

</html>