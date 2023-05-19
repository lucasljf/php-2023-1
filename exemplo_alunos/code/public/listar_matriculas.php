<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Lista de Matrículas</h1>

    <table border="1">
        <th>Id</th>
        <th>Aluno</th>
        <th>Turma</th>
        <th>Curso</th>
        <th>Desc. Curso</th>
        <th>Data</th>

        <?php

        require_once '../model/matricula_dao.php';

        $conexao = new Conexao();
        $matriculaDao = new MatriculaDao($conexao);

        $matriculas = $matriculaDao->listar_tudo();

        foreach ($matriculas as $matricula) {
            echo "<tr>";
            echo "<td>" . $matricula->id . "</td>";
            echo "<td>" . $matricula->aluno->nome . "</td>";
            echo "<td>" . $matricula->turma->nome . "</td>";
            echo "<td>" . $matricula->turma->curso->nome . "</td>";
            echo "<td>" . $matricula->turma->curso->descricao . "</td>";
            echo "<td>" . $matricula->data_matricula . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>