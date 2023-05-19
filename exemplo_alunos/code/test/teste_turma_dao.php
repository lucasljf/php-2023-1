<?php

require_once '../model/turma_dao.php';
require_once '../model/curso_dao.php';
require_once '../model/curso.php';

$conexao = new Conexao();

$turmaDao = new TurmaDao($conexao);
$cursoDao = new CursoDao($conexao);

$curso = $cursoDao->buscar_id(2);
$turma = new Turma(0, "Turma de 2010", $curso);

// $turmaDao->inserir($turma);

$turmas = $turmaDao->listar_tudo();

echo "<pre>";
print_r($turmas);
echo "</pre>";

$turma_por_id = $turmaDao->buscar_id(2);
echo "<pre>";
print_r($turma_por_id);
echo "</pre>";
