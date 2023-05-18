<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location: home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Inicial</title>
</head>

<body>
  <form action="../controller/inserir_aluno.php" method="get">
    Nome: <br>
    <input required type="text" name="nome" id="nome"> <br><br>

    Endereço: <br>
    <input required type="text" name="endereco" id="endereco"> <br><br>

    Telefone: <br>
    <input required type="text" name="telefone" id="telefone"> <br><br>

    Data de nascimento: <br>
    <input required type="date" name="data_nascimento" id="data_nascimento"> <br><br>

    <input type="submit" value="Salvar">
  </form>
  <br>
  <a href="home.php">Cancelar</a>
</body>

</html>
