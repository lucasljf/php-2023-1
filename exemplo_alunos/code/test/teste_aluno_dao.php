<?php

require_once '../model/aluno/aluno_dao.php';

$conexao = new Conexao();

$alunoDao = new AlunoDao($conexao);

$aluno = new Aluno(0, "TesteDao", "Rua Teste Dao", "6290000112", "2000-01-30");

// $alunoDao->inserir($aluno);

$alunos = $alunoDao->listar_tudo();

echo "<pre>";
print_r($alunos);
echo "</pre>";

// Funcionava apenas quando utilizavamos FETCH_ASSOC
// echo $alunos[0]['nome'];
