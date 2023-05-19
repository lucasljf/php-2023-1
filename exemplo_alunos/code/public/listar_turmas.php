<!DOCTYPE html>
<html lang="pt_br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem de Turmas</title>
</head>

<body>
  <h1>Lista de turmas</h1>

  <table border="1">
    <th>Id</th>
    <th>Nome da Turma</th>
    <th>Nome do curso</th>

    <?php
    require_once '../model/turma_dao.php';
    $turmaDao = new TurmaDao();

    $turmas = $turmaDao->listar_tudo();

    foreach ($turmas as $turma) {
      echo "<tr>";
      echo "<td>" . $turma->__get('id') . "</td>";
      echo "<td>" . $turma->nome . "</td>";
      echo "<td>" . $turma->curso->__get('nome') . "</td>";
      echo "<tr>";
    }
    ?>
  </table>
  <br>
  <a href="pagina_principal.php">Voltar</a>
</body>

</html>
