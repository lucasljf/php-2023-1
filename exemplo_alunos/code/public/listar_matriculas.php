<!DOCTYPE html>
<html lang="pt_br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem de Matriculas</title>
</head>

<body>
  <h1>Lista de Matriculas</h1>

  <table border="1">
    <th>Id</th>
    <th>Nome do Aluno</th>
    <th>Nome da Turma</th>
    <th>Nome do Curso</th>
    <th>Data de Matricula</th>

    <?php
    require_once '../model/matricula_dao.php';
    $matriculaDao = new MatriculaDao();

    $matriculas = $matriculaDao->listar_tudo();

    foreach ($matriculas as $matricula) {
      echo "<tr>";
      echo "<td>" . $matricula->__get('id') . "</td>";
      echo "<td>" . $matricula->aluno->__get('nome') . "</td>";
      echo "<td>" . $matricula->turma->__get('nome') . "</td>";
      echo "<td>" . $matricula->turma->__get('curso')->__get('nome') . "</td>";
      echo "<td>" . $matricula->data_matricula . "<?td>";
      echo "<tr>";
    }
    ?>
  </table>
</body>

</html>