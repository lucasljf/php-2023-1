<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Bem vindo</h1>

  <h3>Controle de Alunos</h3>
  <? if(isset($_SESSION['logado'])) { echo '<a href="cadastrar_aluno.html">Cadastro de aluno</a> <br>'; } ?>
  <a href="listar_alunos.php">Listar alunos</a> <br><br>

  <h3>Controle de Curso</h3>
  <? if(isset($_SESSION['logado'])) { echo '<a href="cadastrar_curso.html">Cadastro de curso</a> <br>'; } ?>
  <a href="listar_cursos.php">Listar cursos</a> <br><br>

  <h3>Controle de Turma</h3>
  <? if(isset($_SESSION['logado'])) { echo '<a href="cadastrar_turma.php">Cadastro de turma</a> <br>'; } ?>
  <a href="listar_turmas.php">Listar turmas</a> <br><br>

  <h3>Controle de Matrícula</h3>
  <? if(isset($_SESSION['logado'])) { echo  '<a href="cadastrar_matricula.php">Realizar matrícula</a> <br>'; } ?>
  <a href="listar_matriculas.php">Listar matrículas</a> <br><br>
  <? if(isset($_SESSION['logado'])) { 
    echo '<form action="autenticar.php" method="get"><input type="submit" name="acao" value="Sair"></input ></form>';
    }
    else {
      echo '<form action="index.html" method=""><input type="submit" name="voltar" value="Voltar"></input ></form>';
    }
    ?>

</body>

</html>