<?php
require_once '../model/matricula.php';
require_once '../model/matricula_dao.php';
require_once '../model/aluno_dao.php';
require_once '../model/turma_dao.php';

$id_aluno = $_GET['id_aluno'];
$id_turma = $_GET['id_turma'];
$data_matricula = $_GET['data_matricula'];

$alunoDao = new AlunoDao();
$aluno = $alunoDao->procurar_por_id($id_aluno);

$turmaDao = new TurmaDao();
$turma = $turmaDao->procurar_por_id($id_turma);

$matricula = new Matricula(0, $aluno, $turma, $data_matricula);
$matriculaDao = new MatriculaDao();
$matriculaDao->inserir($matricula);

header('Location: pagina_principal.php');
?>