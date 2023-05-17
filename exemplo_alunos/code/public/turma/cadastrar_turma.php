<?php
  include_once '../acesso/verifica_sessao.php';

if (!$_SESSION['logado']) {
   header('Location: ../acesso/formulario_login.php');
}
?>
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
            <input type="tex" name="nome" id="nome"> <br><br>

            Curso: <br>
            <select name="curso" id="curso">
                <option value='Selecione' selected>Selecione...</option>
                <?php
                require_once '../../model/curso/curso_dao.php';
                $conexao = new Conexao();
                $cursoDao = new CursoDao($conexao);
    
                $cursos = $cursoDao->listar_tudo();
    
                // busca a lista de id e cursos dentro de cada tupla(linha)
                foreach ($cursos as $curso){
                    echo "<option value='" .$curso->id . "'>" .$curso->nome . "</option>";
                }
                ?>
            </select> <br><br>
            <input type="submit" value="Salvar">
        </form>
    </body>
</html>