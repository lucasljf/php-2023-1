<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Turma</title>
    </head>
    <body>
        <h1>Listar Turmas</h1>

        <table border="1">
            <th>id</th>
            <th>nome</th>
            <th>curso</th>

            <?php
            require_once '../../model/turma/turma_dao.php';
            $conexao = new Conexao();
            $turmaDao = new TurmaDao($conexao);
            $turmas = $turmaDao->listar_tudo();

            foreach ($turmas as $turma) {
                echo "<tr>";
                echo "<td>". $turma->__get('id')."</td>";
                echo "<td>". $turma->nome."</td>";
                echo "<td>". $turma->curso->nome."</td>";
                echo "<tr>";
            }
            ?>
        </table>
    </body>
</html>