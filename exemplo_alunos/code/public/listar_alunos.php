<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Lista de alunos</h1>

    <table border="1">
        <th>id</th>
        <th>nome</th>
        <th>endereco</th>
        <th>telefone</th>
        <th>data nascimento</th>

        <?php
        require_once '../model/aluno_dao.php';
        $conexao = new Conexao();
        $alunoDao = new AlunoDao($conexao);

        $alunos = $alunoDao->listar_tudo();

        foreach ($alunos as $aluno) {
            echo "<tr>";
            echo "<td>" . $aluno->__get('id') . "</td>";
            echo "<td>" . $aluno->nome . "</td>";
            echo "<td>" . $aluno->endereco . "</td>";
            echo "<td>" . $aluno->telefone . "</td>";
            echo "<td>" . $aluno->data_nascimento . "</td>";
            echo "<tr>";
        }
        ?>
    </table>
</body>

</html>