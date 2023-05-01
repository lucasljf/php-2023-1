<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Inicial</title>
</head>

<body>
  <form action="inserir_turma.php" method="get">
    Nome: <br>
    <input type="text" name="nome" id="nome"> <br>
    Nome do curso: <br>
    <?php
      require_once '../model/curso_dao.php';
      $cursoDao = new CursoDao();

      $cursos = $cursoDao->listar_tudo();

      echo "<select name='id_curso' id='id_curso'>";
      echo "<option value='' selected disabled>Selecione o Curso</option>";
      
      foreach ($cursos as $curso) {
        echo "<option value='". $curso->__get('id') . "'>" . $curso->__get('nome'). "</option>";
      }
      echo "</select> <br>";
      if(sizeOf($cursos) == 0){
        echo "Para concluir o cadastro da turma é preciso selecionar um curso que ja se tenha cadastrado ou então você deve <a href='cadastro_curso.html'>Cadastrar um Curso</a>";
      }else{
        echo "<br>";
        echo "<input type='submit' value='Salvar'>";
      }
    ?>
  </form>
</body>

</html>
