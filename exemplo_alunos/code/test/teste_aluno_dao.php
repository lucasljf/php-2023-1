<?php

require_once '../model/aluno_dao.php';

$conexao = new Conexao();

$alunoDao = new AlunoDao($conexao);

$aluno = new Aluno(0, "TesteDao", "Rua Teste Dao", "62900001122", "2000-01-30");

// $alunoDao->inserir($aluno);

$alunos = $alunoDao->listar_tudo();

echo "<pre>";
print_r($alunos);
echo "</pre>";

// Funcionava apenas quando utilizavamos FETCH_ASSOC
// echo $alunos[0]['nome'];

$aluno_por_id = $alunoDao->buscar_id(2);
echo "<pre>";
print_r($aluno_por_id);
echo "</pre>";
