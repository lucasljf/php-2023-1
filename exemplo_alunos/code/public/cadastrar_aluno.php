<?php
session_start();

if (!isset($_SESSION["logado"])) {
  header("Location: index.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Inicial</title>
  <link rel="stylesheet" href="./template.css" />
</head>

<body>
  <h3>Cadastro de aluno</h3>
  <form action="inserir_aluno.php" method="get">
    Nome: <br>
    <input type="text" name="nome" id="nome"> <br><br>

    Endereço: <br>
    <input type="text" name="endereco" id="endereco"> <br><br>

    Telefone: <br>
    <input type="text" name="telefone" id="telefone"> <br><br>

    Data de nascimento: <br>
    <input type="date" name="data_nascimento" id="data_nascimento"> <br><br>

    <input type="submit" class="botao" value="Salvar">
  </form>
  <br>
  <form method="post" action="logado.php">
    <input type="submit" class="botao" value="Voltar" />
  </form>
</body>

</html>