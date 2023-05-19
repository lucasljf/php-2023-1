<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listar Matriculas</title>
    </head>
    <body>
        <h1>Listar Matriculas</h1>

        <table border="1">
            <th>Id</th>
            <th>Aluno</th>
            <th>Turma</th>
            <th>Data</th>
            <?php
                require_once '../../model/matricula/matricula_dao.php';
                $matriculaDao = new MatriculaDao();
                $matriculas = $matriculaDao->listar_tudo();

                foreach ($matriculas as $matricula) {
                    echo "<tr>";
                    echo "<td>".$matricula->id."</td>";
                    echo "<td>".$matricula->aluno->nome."</td>";
                    echo "<td>".$matricula->turma->nome."</td>";
                    echo "<td>".$matricula->data_matricula."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>