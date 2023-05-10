<?php

require_once '../model/turma.php';
require_once '../model/turma_dao.php';

$nome = $_POST['nome'];
$curso_id = $_POST['curso'];

$conexao = new Conexao();

$cursoDao = new CursoDao($conexao);
$curso = $cursoDao->buscar_id($curso_id);

$turma = new Turma(0, $nome, $curso);
$turmaDao = new TurmaDao($conexao);
$turmaDao->inserir($turma);

header('Location: index.html');