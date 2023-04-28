<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Lista de matrícula</h1>

    <table border="1">
        <th>id</th>
        <th>Aluno</th>
        <th>Turma</th>
        <th>data_ingresso</th>

        <?php
        require_once '../model/matricula_dao.php';
        $conexao = new Conexao();
        $matriculaDao = new MatriculaDao($conexao);

        $matriculas = $matriculaDao->listar_tudo();

        foreach ($matriculas as $matricula) {
            echo "<tr>";
            echo "<td>" . $matricula->__get('id') . "</td>";
            echo "<td>" . $matricula->id_aluno . "</td>";
            echo "<td>" . $matricula->id_turma . "</td>";
            echo "<td>" . $matricula->data_ingresso . "</td>";
            echo "<tr>";
        }
        ?>
    </table>
</body>

</html>