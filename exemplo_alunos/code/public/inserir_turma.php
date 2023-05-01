<?php
require_once '../model/turma.php';
require_once '../model/turma_dao.php';
//require_once '../model/curso.php';
//require_once '../model/curso_dao.php';

$nome = $_GET['nome'];
$curso = $_GET['id_curso'];

$turma = new Turma(0, $nome, $curso);

$turmaDao = new TurmaDao();
$turmaDao->inserir($turma);

header('Location: index.html');


?>