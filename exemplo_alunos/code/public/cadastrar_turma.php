<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar turma</title>
</head>

<body>
    <form action="" method="get">
        Nome: <br>
        <input type="text" name="" id=""> <br><br>

        <select>
            <?php 
            require_once '../model/aluno_dao.php';
            $conexao = new Conexao();
            $cursoDao = new CursoDao($conexao);

            $cursos = $cursoDao->listar_tudo();

            foreach ($cursos as $curso){
                echo "<option value='" .$curso->id . "'>" .$curso->nome . "</option";
            }
            
            
            
            
            
            
            
            
            ?>
        </select>
        </form>
</body>