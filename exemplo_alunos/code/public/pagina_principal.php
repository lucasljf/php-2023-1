<?php

  session_start();
  

  echo $_SESSION['login'];  
  echo $_SESSION['senha'];
?> 
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documento</title>
  <link rel="stylesheet" type="text/css" href="../style/estilo_principal.css">
</head>

<body>
  <?php
    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
      echo "<h1>Bem vindo</h1>

      <h3>Controle de Alunos</h3>
      <div>
      <a href='cadastrar_aluno.html'>Cadastro de aluno</a> <br>
      <a href='listar_alunos.php'>Listar alunos</a> <br>
      </div>
      <br>
      <h3>Controle de Curso</h3>
      <div>
      <a href='cadastro_curso.html'>Cadastro de curso</a> <br>
      <a href='listar_cursos.php'>Listar cursos</a>
      </div>
    
      <br>
      <h3>Controle de Turma</h3>
      <div>
      <a href='cadastrar_turma.php'>Cadastro de turma</a> <br>
      <a href='listar_turmas.php'>Listar turmas</a>
      </div>
    
      <br>
      <h3>Controle de Matricula</h3>
      <div>
      <a href='cadastrar_matricula.php'>Cadastro de Matricula</a> <br>
      <a href='listar_matriculas.php'>Listar Matriculas</a>
      </div>";
    }else if(!isset($_SESSION['login']) != 'admin' || !isset($_SESSION['senha']) != 'admin'){
      echo "<h1>Bem vindo</h1>";

      echo "<strong><h3>Você entrou como um usuario nao cadastrado por isso só terá acesso a apenas os dados de listagem.</h3></strong>
      <br/>
      <h3>Controle de Alunos</h3>
      <div>
      <a href='listar_alunos.php'>Listar alunos</a> <br>
      </div>
      <br>
      <h3>Controle de Curso</h3>
      <div>
      <a href='listar_cursos.php'>Listar cursos</a>
      </div>
    
      <br>
      <h3>Controle de Turma</h3>
      <div>
      <a href='listar_turmas.php'>Listar turmas</a>
      </div>
    
      <br>
      <h3>Controle de Matricula</h3>
      <div>
      <a href='listar_matriculas.php'>Listar Matriculas</a>
      </div>";

    }
  ?>
  <br>
  <div class="a">
    <a href="sair.php">Sair</a>
  </div>
</body>

</html>
