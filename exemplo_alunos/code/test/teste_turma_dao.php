<?php

require_once '../model/turma/turma_dao.php';

$conexao = new Conexao();

$turmaDao = new TurmaDao($conexao);

$turma = new Turma(0, "TesteDao", "15");

// $alunoDao->inserir($aluno);

$turmas = $turmaDao->listar_tudo();

echo "<pre>";
print_r($turmas);
echo "</pre>";

// Funcionava apenas quando utilizavamos FETCH_ASSOC
// echo $alunos[0]['nome'];
