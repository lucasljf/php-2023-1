<?php

require_once '../model/turma.php';
require_once '../model/turma_dao.php';

$nome = $_GET['nome'];
$id_curso = $_GET['id_curso'];

$conexao = new Conexao();
$turmaDao = new TurmaDao($conexao);

$curso = new Curso($id_curso, null, null, null, null, null);

$turma = new Turma(0, $nome, $curso);

$turmaDao->inserir($turma);

header('Location: index.html');