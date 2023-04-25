<?php

require_once '../model/curso_dao.php';

$conexao = new Conexao();

$cursoDao = new CursoDao($conexao);

$curso = new Curso(1, "Tec. Teste", "Curso para teste do CursoDao", 200, "2000-01-30", "2000-03-30");

$cursoDao->inserir($curso);

$cursos = $cursoDao->listar_tudo();

echo "<pre>";
print_r($cursos);
echo "</pre>";
