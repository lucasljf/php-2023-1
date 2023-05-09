<?php

require_once '../../model/matricula/matricula.php';
require_once '../../model/matricula/matricula_dao.php';

$aluno = $_GET['id_aluno'];
$turma = $_GET['id_turma'];
$data_matricula = $_GET['data_matricula'];
//$data_matricula = $_GET[date('Y-m-d')];


$matricula = new Matricula(0, $aluno, $turma, $data_matricula);

$conexao = new Conexao();
$matriculaDao = new MatriculaDao($conexao);

$matriculaDao->inserir($matricula);

header('Location: ../index.html');