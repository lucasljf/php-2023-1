<?php
require_once '../model/matricula.php';
require_once '../model/matricula_dao.php';

$aluno = $_GET['id_aluno'];
$turma = $_GET['id_turma'];
$data_matricula = $_GET['data_matricula'];

$matricula = new Matricula(0, $aluno, $turma, $data_matricula);

$matriculaDao = new MatriculaDao();

$matriculaDao->inserir($matricula);

header('Location: index.html');


?>