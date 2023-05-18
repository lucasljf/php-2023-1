<?php

session_start();
if(!isset($_SESSION['id'])){
    header('Location: home.php');
}

require_once '../model/turma.php';
require_once '../model/turma_dao.php';

$nome = $_GET['nome'];
$curso_id = $_GET['curso_id'];

$turmaDao = new TurmaDao();

$cursoDao = new CursoDao();

$curso = $cursoDao->buscar_id($curso_id);

$turma = new Turma(0, $nome, $curso);



$turmaDao->inserir($turma);

header('Location: ../public/home.php');