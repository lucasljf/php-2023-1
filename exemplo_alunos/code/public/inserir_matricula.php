<?php

require_once '../model/matricula.php';
require_once '../model/matricula_dao.php';

$aluno_id = $_GET['aluno_id'];
$turma_id = $_GET['turma_id'];
$data_matricula = $_GET['data_matricula'];


$matriculaDao = new MatriculaDao();

$alunoDao = new AlunoDao();
$aluno = $alunoDao->buscar_id($aluno_id);

$turmaDao = new TurmaDao();
$turma = $turmaDao->buscar_id($turma_id);

$matricula = new Matricula(0, $aluno, $turma, $data_matricula);



$matriculaDao->inserir($matricula);

header('Location: index.html');