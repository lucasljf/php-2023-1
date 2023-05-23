<?php

require_once '../model/aluno.php';
require_once '../model/aluno_dao.php';

$id = $_GET['id'];
$nome = $_GET['nome'];
$endereco = $_GET['endereco'];
$telefone =  $_GET['telefone'];
$data_nascimento = $_GET['data_nascimento'];

// echo $nome;

$aluno = new Aluno($id, $nome, $endereco, $telefone, $data_nascimento);

$conexao = new Conexao();
$alunoDao = new AlunoDao($conexao);

if ($aluno->id == null) {
    $alunoDao->inserir($aluno);
} else {
    $alunoDao->alterar($aluno);
}

// echo '<pre>';
// print_r($aluno);
// echo '</pre>';

header('Location: index.html');
