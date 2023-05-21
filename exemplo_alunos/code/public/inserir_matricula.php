<?php
if (!isset($_SESSION["logado"])) {
    header("Location: index.html");
}

require_once '../model/matricula.php';
require_once '../model/matricula_dao.php';
require_once '../model/aluno_dao.php';
require_once '../model/turma_dao.php';

$aluno_id = $_POST['aluno'];
$turma_id = $_POST['turma'];
$data_matricula = $_POST['data_matricula'];

$alunoDao = new AlunoDao();
$aluno = $alunoDao->buscar_id($aluno_id);

$turmaDao = new TurmaDao();
$turma = $turmaDao->buscar_id($turma_id);

$matricula = new Matricula(0, $aluno, $turma, $data_matricula);
$matriculaDao = new MatriculaDao();
$matriculaDao->inserir($matricula);

header('Location: logado.php');
