<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Inicial</title>
</head>

<body>
  <?php
  require_once '../model/aluno.php';
  if (isset($_GET['id'])) {
    require_once '../model/aluno_dao.php';

    $conexao = new Conexao();
    $alunoDao = new AlunoDao($conexao);

    $aluno = $alunoDao->buscar_id($_GET['id']);
  } else {
    // $aluno = new Aluno('', '', '', '', '');
    $aluno = new Aluno(null, null, null, null, null);
  }
  ?>
  <form action="inserir_aluno.php" method="get">
    <input type="hidden" name="id" value="<?= $aluno->id ?>">
    Nome: <br>
    <input type="text" name="nome" id="nome" value="<?php echo $aluno->nome ?>"> <br><br>

    Endereço: <br>
    <input type="text" name="endereco" id="endereco" value="<?= $aluno->endereco ?>"> <br><br>

    Telefone: <br>
    <input type="text" name="telefone" id="telefone" value="<?= $aluno->telefone ?>"> <br><br>

    Data de nascimento: <br>
    <input type="date" name="data_nascimento" id="data_nascimento" value="<?= $aluno->data_nascimento ?>"> <br><br>

    <input type="submit" value="Salvar">
  </form>
</body>

</html>