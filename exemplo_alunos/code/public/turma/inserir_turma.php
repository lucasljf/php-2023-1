<?php

require_once '../../model/turma/turma.php';
require_once '../../model/turma/turma_dao.php';

$nome = $_GET['nome'];
$id_curso = $_GET['id_curso'];


$turma = new Turma(0, $nome, $id_curso);

$conexao = new Conexao();
$turmaDao = new TurmaDao($conexao);

$turmaDao->inserir($turma);

header('Location: ../index.html');