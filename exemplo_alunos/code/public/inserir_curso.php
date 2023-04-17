<?php

require_once '../model/curso.php';
require_once '../model/curso_dao.php';

$nome = $_GET['nome'];
$endereco = $_GET['descricao'];
$telefone =  $_GET['carga_horaria'];
$data_nascimento = $_GET['data_inicio'];
$data_fim = $_GET['data_fim'];

// echo $nome;

$curso = new Curso(0, $nome, $descricao, $carga_horaria, $data_inicio, $data_fim);

$conexao = new Conexao();
$cursoDao = new CursoDao($conexao);

$cursoDao->inserir($curso);

// echo '<pre>';
// print_r($curso);
// echo '</pre>';

header('Location: index.html');
