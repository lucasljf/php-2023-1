<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Lista de Turmas</h1>

  <table border="1">
    <th>id</th>
    <th>nome</th>
    <th>curso</th>


    <?php
    require_once '../model/turma_dao.php';
    $turmaDao = new TurmaDao();

    $turmas = $turmaDao->listar_tudo();

    foreach ($turmas as $turma) {
      echo "<tr>";
      echo "<td>" . $turma->__get('id') . "</td>"; //duvida sobre __get()
      echo "<td>" . $turma->nome . "</td>";
      echo "<td>" . $turma->curso->nome . "</td>";


      echo "<tr>";
    }
    ?>
  </table>
</body>

</html>
