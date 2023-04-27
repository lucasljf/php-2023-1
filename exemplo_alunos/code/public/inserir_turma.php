<?php

require_once '../model/turma.php';
require_once '../model/turma_dao.php';

$nome = $_GET['nome'];
$curso_id =  $_GET['curso_id'];

// echo $nome;

$turma = new Turma(0, $nome, $curso_id,);

$conexao = new Conexao();
$turmaDao = new TurmaDao($conexao);

$turmaDao->inserir($turma);

// echo '<pre>';
// print_r($aluno);
// echo '</pre>';

header('Location: index.html');