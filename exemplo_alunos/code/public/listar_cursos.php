<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="./template.css" />
</head>

<body>
  <h1>Lista de Cursos</h1>

  <table border="1">
    <th>id</th>
    <th>nome</th>
    <th>descricao</th>
    <th>carga horaria</th>
    <th>data inicio</th>
    <th>data fim</th>

    <?php
    require_once '../model/curso_dao.php';
    $cursoDao = new CursoDao();

    $cursos = $cursoDao->listar_tudo();

    foreach ($cursos as $curso) {
      echo "<tr>";
      echo "<td>" . $curso->id . "</td>";
      echo "<td>" . $curso->nome . "</td>";
      echo "<td>" . $curso->descricao . "</td>";
      echo "<td>" . $curso->carga_horaria . "</td>";
      echo "<td>" . $curso->data_inicio . "</td>";
      echo "<td>" . $curso->data_fim . "</td>";
      echo "</tr>";
    }
    ?>
  </table>
  <br>
  <form method="post" action="listar.php">
    <input type="submit" class="botao" value="Voltar" />
  </form>
</body>

</html>