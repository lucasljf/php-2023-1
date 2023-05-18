<?php
    session_start();
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>

<body>
  <h1>Bem vindo(a)
  <?php  
  if(isset($_SESSION['nome'])){
    echo $_SESSION['nome'];
    echo "</h1>";
    echo "<a href='sair.php'>Encerrar sessão   </a>";
  }
  else{
    echo "</h1>";
    echo "<a href='index.php'>Efetuar Login</a>";
  }
  ?>
  
  <h3>Controle de Alunos</h3>
  <?php
  if(isset($_SESSION['id']))
    {
      echo '<a href="cadastrar_aluno.php">Cadastro de aluno</a> <br>';
    }
  ?>
  <a href="listar_alunos.php">Listar alunos</a> <br>

  <br>
  <h3>Controle de Curso</h3>
  <?php
  if(isset($_SESSION['id']))
    {
      echo '<a href="cadastrar_curso.php">Cadastro de curso</a> <br>';
    }
  ?>
  <a href="listar_cursos.php">Listar cursos</a>

  <br>
  <h3>Controle de Turma</h3>
  <?php
  if(isset($_SESSION['id']))
    {
      echo '<a href="cadastrar_turma.php">Cadastro de turma</a> <br>';
    }
  ?>
  <a href="listar_turmas.php">Listar turmas</a>

  <br>
  <h3>Controle de Matrícula</h3>
  <?php
  if(isset($_SESSION['id']))
    {
      echo '<a href="cadastrar_matricula.php">Cadastro de matrícula</a> <br>';
    }
  ?>
  <a href="listar_matriculas.php">Listar matrículas</a>
</body>
 
</html>
