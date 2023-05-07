<?php

require_once '../model/matricula.php';
require_once '../model/matricula_dao.php';

$aluno_id = $_GET['aluno_id'];
$turma_id = $_GET['turma_id'];
$data_matricula = $_GET['data_matricula'];


$conexao = new Conexao();
$matriculaDao = new MatriculaDao($conexao);

$alunoDao = new AlunoDao($conexao);
$aluno = $alunoDao->buscar_id($aluno_id);

$turmaDao = new TurmaDao($conexao);
$turma = $turmaDao->buscar_id($turma_id);

$matricula = new Matricula(0, $aluno, $turma, $data_matricula);

//print_r($matricula);
//echo $matricula->aluno->id . "<br>";
//echo $matricula->turma->id . "<br>";
//echo $matricula->data . "<br>";

$matriculaDao->inserir($matricula);

header('Location: index.html');