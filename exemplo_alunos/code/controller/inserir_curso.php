<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: home.php');
}

require_once '../model/curso.php';
require_once '../model/curso_dao.php';

$nome = $_GET['nome'];
$descricao = $_GET['descricao'];
$carga_horaria =  $_GET['carga_horaria'];
$data_inicio = $_GET['data_inicio'];
$data_fim = $_GET['data_fim'];


 //echo $nome;


$curso = new Curso(0, $nome, $descricao, $carga_horaria, $data_inicio, $data_fim);

$cursoDao = new CursoDao();

$cursoDao->inserir($curso);


header('Location: ../public/home.php');
