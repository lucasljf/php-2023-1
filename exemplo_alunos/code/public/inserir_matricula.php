<?php

require_once '../model/matricula.php';
require_once '../model/matricula_dao.php';

$id_aluno = $_GET['id_aluno'];
$id_turma =  $_GET['id_turma'];
$data_ingresso = $_GET['data_ingresso'];

// echo $nome;

$matricula = new Matricula(0, $id_aluno, $id_turma, $data_ingresso);

$conexao = new Conexao();
$matriculaDao = new MatriculaDao($conexao);

$matriculaDao->inserir($matricula);

// echo '<pre>';
// print_r($aluno);
// echo '</pre>';

header('Location: index.html');