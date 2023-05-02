<?php

require_once '../model/turma.php';
require_once '../model/turma_dao.php';

$nome = $_GET['nome'];
$curso = $_GET['curso'];



 //echo $nome;


$turma = new Turma(0, $nome, $curso);

$conexao = new Conexao();
$turmaDao = new TurmaDao($conexao);

$turmaDao->inserir($turma);

// echo '<pre>';
// print_r($turma);
// echo '</pre>';

header('Location: index.html');