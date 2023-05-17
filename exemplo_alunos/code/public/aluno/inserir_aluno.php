<?php
  include_once '../acesso/verifica_sessao.php';

if (!$_SESSION['logado']) {
   header('Location: ../acesso/formulario_login.php');
}
?>
<?php

require_once '../../model/aluno/aluno.php';
require_once '../../model/aluno/aluno_dao.php';

$nome = $_GET['nome'];
$endereco = $_GET['endereco'];
$telefone =  $_GET['telefone'];
$data_nascimento = $_GET['data_nascimento'];

// echo $nome;

$aluno = new Aluno(0, $nome, $endereco, $telefone, $data_nascimento);

$conexao = new Conexao();
$alunoDao = new AlunoDao($conexao);

$alunoDao->inserir($aluno);

// echo '<pre>';
// print_r($aluno);
// echo '</pre>';

header('Location: ../index.html');

