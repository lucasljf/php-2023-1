<?php

require_once '../model/turma.php';
require_once '../model/turma_dao.php';
require_once '../model/curso_dao.php';

$nome = $_GET['nome'];
$curso_id =  $_GET['curso_id'];

// echo $nome;
$curso = new Curso($curso_id, null, null, null, null, null);
$turma = new Turma(0, $nome, $curso);

$conexao = new Conexao();
$turmaDao = new TurmaDao();

$turmaDao->inserir($turma);

// echo '<pre>';
// print_r($aluno);
// echo '</pre>';

header('Location: pagina_inicial.php');