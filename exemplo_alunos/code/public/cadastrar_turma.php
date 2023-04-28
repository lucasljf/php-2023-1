<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Inicial</title>
</head>

<body>
  <form action="inserir_turma.php" method="get">
    Nome: <br>
    <input type="text" name="nome" id="nome"> <br><br>
    <br>
    Nome do curso: <br>
    <select>
      <?php
        require_once '../model/curso_dao.php';
        $cursoDao = new CursoDao();

        $cursos = $cursoDao->listar_tudo();

        foreach ($cursos as $curso) {
          echo "<option value='". $curso->id . "'>" . $curso->nome. "</option>";
        }
      ?>
    </select>
    <br>
    <input type="submit" value="Salvar">
  </form>
</body>

</html>
