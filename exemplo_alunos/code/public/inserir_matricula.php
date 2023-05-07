<?php

require_once '../model/matricula.php';
require_once '../model/matricula_dao.php';

$nome = $_GET['nome'];
$curso_id = $_GET['curso_id'];

$conexao = new Conexao();
$turmaDao = new TurmaDao($conexao);

$cursoDao = new CursoDao($conexao);

$curso = $cursoDao->buscar_id($curso_id);

$turma = new Turma(0, $nome, $curso);



$turmaDao->inserir($turma);

header('Location: index.html');