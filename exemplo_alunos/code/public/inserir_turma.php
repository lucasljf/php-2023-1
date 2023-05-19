<?php
require_once '../model/turma.php';
require_once '../model/turma_dao.php';
//require_once '../model/curso.php';
require_once '../model/curso_dao.php';

$nome = $_GET['nome'];
$id_curso = $_GET['id_curso']; 

$cursoDao = new CursoDao();
$curso = $cursoDao->procurar_por_id($id_curso);

$turma = new Turma(0, $nome, $curso);
$turmaDao = new TurmaDao();
$turmaDao->inserir($turma);

header('Location: pagina_principal.php');
?>