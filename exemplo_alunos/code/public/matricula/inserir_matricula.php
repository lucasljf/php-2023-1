<?php

require_once '../../model/matricula/matricula.php';
require_once '../../model/matricula/matricula_dao.php';

$id_aluno = $_GET['aluno'];
$id_turma = $_GET['turma'];
$data_matricula = $_GET['data_matricula'];

$conexao = new Conexao();

$alunoDao = new AlunoDao($conexao);
$aluno = $alunoDao->buscar_id($id_aluno);

$turmaDao = new TurmaDao($conexao);
$turma = $turmaDao->buscar_id($id_turma);

$matricula = new Matricula(0, $aluno, $turma, $data_matricula);
$matriculaDao = new MatriculaDao($conexao);
$matriculaDao->inserir($matricula);

header('Location: ../index.html');