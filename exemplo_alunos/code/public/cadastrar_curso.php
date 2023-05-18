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
  <form action="../controller/inserir_curso.php" method="get">
    Nome: <br>
    <input required type="text" name="nome" id="nome"> <br><br>

    Descrição: <br>
    <input required type="text" name="descricao" id="descricao"> <br><br>

    Carga Horária: <br>
    <input required type="text" name="carga_horaria" id="carga_horaria"> <br><br>

    Data de início: <br>
    <input required type="date" name="data_inicio" id="data_inicio"> <br><br>

    Data final: <br>
    <input required type="date" name="data_fim" id="data_fim"> <br><br>

    <input type="submit" value="Salvar">
  </form>
  <br>
  <a href="home.php">Cancelar</a>
</body>

</html>
