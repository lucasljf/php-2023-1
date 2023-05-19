<?php

require_once '../model/matricula_dao.php';
require_once '../model/aluno_dao.php';
require_once '../model/turma_dao.php';
require_once '../model/aluno.php';
require_once '../model/turma.php';

$conexao = new Conexao();

$matriculaDao = new MatriculaDao($conexao);
$alunoDao = new AlunoDao($conexao);
$turmaDao = new TurmaDao($conexao);

$aluno = $alunoDao->buscar_id(3);
$turma = $turmaDao->buscar_id(2);

$matricula = new Matricula(0, $aluno, $turma, "2020-01-01");

// $matriculaDao->inserir($matricula);

$matriculas = $matriculaDao->listar_tudo();

echo "<pre>";
print_r($matriculas);
echo "</pre>";
