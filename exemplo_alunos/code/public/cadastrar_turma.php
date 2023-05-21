<?php
session_start();

if (!isset($_SESSION["logado"])) {
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./template.css" />
</head>

<body>
    <h3>Cadastro de Turma</h3>
    <form action="inserir_turma.php" method="post">
        <label for="nome">Nome</label> <br>
        <input type="text" name="nome"> <br><br>

        <label for="curso">Curso</label> <br>
        <select name="curso" id="curso">
            <?php
            require_once '../model/curso_dao.php';
            $conexao = new Conexao();
            $cursoDao = new CursoDao($conexao);

            $cursos = $cursoDao->listar_tudo();

            foreach ($cursos as $curso) {
                echo "<option value='" . $curso->id . "'>" . $curso->nome . "</option>";
            }
            ?>
        </select> <br><br>

        <input type="submit" class="botao" value="Cadastrar">
    </form>
    <br>
    <form method="post" action="logado.php">
        <input type="submit" class="botao" value="Voltar" />
    </form>
</body>

</html>