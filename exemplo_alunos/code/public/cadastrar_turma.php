<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <form action="inserir_turma.php" method="get">
        <?php
        require_once '../model/curso_dao.php';

        $cursoDao = new CursoDao();
        $cursos = $cursoDao->listar_tudo();

        if (sizeof($cursos) == 0) {
            echo '<p>É necessário <a href="cadastrar_curso.html">cadastrar um curso</a> para criar uma turma!</p>';
        } else {
            echo ' 
                Nome: <br>
                <input type="text" name="nome" id="nome"> <br><br>

                Curso: <br>
                <select name="id_curso" id="id_curso">
            ';
            foreach ($cursos as $curso) {
                echo '<option value="' . $curso->__get('id') . '">' . $curso->nome . '</option>';
            }
            echo '
                </select> <br><br>
                
                <input type="submit" value="Salvar">
            ';
        }
        ?>
    </form>
</body>
</html>