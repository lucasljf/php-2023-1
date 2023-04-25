<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Lista de turmas</h1>

    <table border="1">
        <th>Id</th>
        <th>Nome</th>
        <th>Curso</th>

        <?php
        require_once '../model/turma_dao.php';
        $conexao = new Conexao();
        $turmaDao = new TurmaDao($conexao);

        $turmas = $turmaDao->listar_tudo();

        foreach ($turmas as $turma) {
            echo "<tr>";
            echo "<td>" . $turma->id . "</td>";
            echo "<td>" . $turma->nome . "</td>";
            echo "<td>" . $turma->curso->nome . "</td>";
            echo "<tr>";
        }
        ?>
    </table>
</body>

</html>