<?php
  include_once './acesso/verifica_sessao.php';

if (!$_SESSION['logado']) {
   header('Location: ./acesso/formulario_login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Bem vindo</h1>

  <h3>Controle de Alunos</h3>
  <a href="../public/aluno/cadastrar_aluno.php">Cadastro de aluno</a> <br>
  <a href="../public/aluno/listar_alunos.php">Listar alunos</a> <br>

  <br>
  <h3>Controle de Curso</h3>
  <a href="../public/curso/cadastrar_curso.php">Cadastro de curso</a> <br>
  <a href="../public/curso/listar_cursos.php">Listar cursos</a>

  <br>
  <h3>Controle de Turma</h3>
  <a href="../public/turma/cadastrar_turma.php">Cadastro de turma</a> <br>
  <a href="../public/turma/listar_turma.php">Listar turmas</a>

  <br>
  <h3>Controle da Matricula</h3>
  <a href="../public/matricula/cadastrar_matricula.php">Cadastro da matricula</a> <br>
  <a href="../public/matricula/listar_matricula.php">Listar matriculas</a>




  <br><br><br><br><br><br>
<a href="?sair=1">Sair</a>

</body>

</html>