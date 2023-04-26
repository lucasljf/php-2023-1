<?php

require_once '../model/curso_dao.php';

$conexao = new Conexao();

$cursoDao = new CursoDao($conexao);

$curso = new Curso(0, "TesteDao", "Cursoai", "72", "2000-01-30", "2023-04-14");

// $alunoDao->inserir($aluno);

$cursos = $cursoDao->listar_tudo();

echo "<pre>";
print_r($cursos);
echo "</pre>";

echo $cursos[0]['nome'];