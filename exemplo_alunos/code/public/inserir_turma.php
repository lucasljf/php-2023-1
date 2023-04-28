<?php
require_once '../model/turma.php';
require_once '../model/turma_dao.php';
require_once '../model/curso.php';
require_once '../model/curso_dao.php';

$nome = $_GET['nome'];
$curso = $_GET['id_curso'];

$cursoDao = new CursoDao();

$cursoDao->procurar_por_id($curso->id);

$cursoDao->inserir($turma);

header('Location: index.html');


?>