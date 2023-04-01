<?php

require_once '../model/aluno.php';

$nome = $_GET['nome'];
$endereco = $_GET['endereco'];
$telefone =  $_GET['telefone'];
$data_nascimento = $_GET['data_nascimento'];

// echo $nome;

$aluno = new Aluno(0, $nome, $endereco, $telefone, $data_nascimento);

echo '<pre>';
print_r($aluno);
echo '</pre>';