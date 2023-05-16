<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Turma</title>
</head>

<body>
  <form action="inserir_turma.php" method="get">
    Nome: <br>
    <input type="text" name="nome" id="nome"> <br><br>

    Curso: <br>
    <select name="curso_id" id="curso_id">
      <?php
      require_once '../model/curso_dao.php';
      $cursoDao = new CursoDao();

      $cursos = $cursoDao->listar_tudo();

      foreach ($cursos as $curso){
        echo "<option value='" . $curso->id . "'>" . $curso->nome . "</option>";
      }
      ?>
    </select>

    <br>
    <br>

    <input type="submit" value="Salvar">
  </form>
</body>

</html>