<?php
  include_once '../acesso/verifica_sessao.php';

if (!$_SESSION['logado']) {
   header('Location: ../acesso/formulario_login.php');
}
?>
<?php

require_once '../../model/curso/curso.php';
require_once '../../model/curso/curso_dao.php';

$nome = $_GET['nome'];
$descricao = $_GET['descricao'];
$carga_horaria =  $_GET['carga_horaria'];
$data_inicio = $_GET['data_inicio'];
$data_fim = $_GET['data_fim'];

// echo $nome;

$curso = new Curso(0, $nome, $descricao, $carga_horaria, $data_inicio, $data_fim);

$conexao = new Conexao();
$cursoDao = new CursoDao($conexao);

$cursoDao->inserir($curso);

// echo '<pre>';
// print_r($curso);
// echo '</pre>';

header('Location: ../index.html');

