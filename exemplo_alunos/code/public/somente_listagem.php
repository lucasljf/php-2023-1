<?php
    session_start();
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
        <center>
            <h1>Bem vind@!!</h1>

            <h3>Controle de alunos</h3>
            <a href="listar_alunos.php">Listar alunos</a>

            <h3>Controle de curso</h3>
            <a href="listar_curso.php">Listar cursos</a>

            <h3>Controle de turma</h3>
            <a href="listar_turma.php">Listar turma</a>

            <h3>Controle de matrícula</h3>
            <a href="listar_matricula.php">Listar matrícula</a> <br><br>
        

            <a href="sair.php"> <button type="sumiti"> Sair </button></a>
        </center>
    </body>
</html>