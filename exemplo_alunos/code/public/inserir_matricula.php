<?php

require_once '../model/matricula.php';
require_once '../model/matricula_dao.php';
require_once '../model/aluno_dao.php';
require_once '../model/turma_dao.php';

$id_aluno = $_GET['id_aluno'];
$id_turma =  $_GET['id_turma'];
$data_ingresso = $_GET['data_ingresso'];

// echo $nome;
$aluno = new Aluno($id_aluno, null, null, null, null );
$turma = new Turma($id_turma, null, null);
$matricula = new Matricula(0, $aluno, $turma, $data_ingresso);

$conexao = new Conexao();
$matriculaDao = new MatriculaDao();

$matriculaDao->inserir($matricula);

// echo '<pre>';
// print_r($aluno);
// echo '</pre>';

header('Location: pagina_inicial.php');