<?php
if (!isset($_SESSION["logado"])) {
    header("Location: index.html");
}

require_once '../model/turma.php';
require_once '../model/turma_dao.php';

$nome = $_POST['nome'];
$curso_id = $_POST['curso'];

$cursoDao = new CursoDao();
$curso = $cursoDao->buscar_id($curso_id);

$turma = new Turma(0, $nome, $curso);
$turmaDao = new TurmaDao();
$turmaDao->inserir($turma);

header('Location: logado.php');
