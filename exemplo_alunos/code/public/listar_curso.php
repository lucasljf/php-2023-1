<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>

<body>
    <h1>Lista de curso</h1>

    <table border="1">
        <th>id</th>
        <th>nome</th>
        <th>descricao</th>
        <th>carga_horaria</th>
        <th>data_inicio</th>
        <th>data_final</th>

        <?php
        require_once '../model/curso_dao.php';
        $conexao = new Conexao();
        $cursoDao = new CursoDao($conexao);

        $cursos = $cursoDao->listar_tudo();

        foreach ($cursos as $curso) {
            echo "<tr>";
            echo "<td>" . $curso->__get('id') . "</td>";
            echo "<td>" . $curso->nome . "</td>";
            echo "<td>" . $curso->descricao . "</td>";
            echo "<td>" . $curso->carga_horaria . "</td>";
            echo "<td>" . $curso->data_inicio . "</td>";
            echo "<td>" . $curso->data_final . "</td>";
            echo "<tr>";
        }
        ?>
    </table>
</body>

</html>