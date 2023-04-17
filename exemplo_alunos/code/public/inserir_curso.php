<?php

require_once '../model/curso.php';
require_once '../model/curso_dao.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$carga_horaria = $_POST['carga_horaria'];
$data_inicio = $_POST['data_inicio'];
$data_fim = $_POST['data_fim'];

$curso = new Curso(0, $nome, $descricao, $carga_horaria, $data_inicio, $data_fim);

$conexao = new Conexao();
$cursoDao = new CursoDao($conexao);

$cursoDao->inserir($curso);

header('Location: index.html');
