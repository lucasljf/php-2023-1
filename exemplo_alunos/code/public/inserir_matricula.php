<?php

require_once '../model/matricula.php';
require_once '../model/matricula_dao.php';
require_once '../model/aluno.php';
require_once '../model/turma.php';

$id_aluno = $_GET['id_aluno'];
$id_turma = $_GET['id_turma'];

$matriculaDao = new MatriculaDao();

$aluno = new Aluno($id_aluno, null, null, null, null);
$turma = new Turma($id_turma, null, null);

$matricula = new Matricula(0, $aluno, $turma, date('Y-m-d'));

$matriculaDao->inserir($matricula);

header('Location: index.html');