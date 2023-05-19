<?php
  include_once '../acesso/verifica_sessao.php';

if (!$_SESSION['logado']) {
   header('Location: ../acesso/formulario_login.php');
}
?>
<?php

require_once '../../model/matricula/matricula.php';
require_once '../../model/matricula/matricula_dao.php';

$id_aluno = $_GET['aluno'];
$id_turma = $_GET['turma'];
$data_matricula = $_GET['data_matricula'];

$alunoDao = new AlunoDao();
$aluno = $alunoDao->buscar_id($id_aluno);

$turmaDao = new TurmaDao();
$turma = $turmaDao->buscar_id($id_turma);

$matricula = new Matricula(0, $aluno, $turma, $data_matricula);
$matriculaDao = new MatriculaDao();
$matriculaDao->inserir($matricula);

header('Location: ../index.php');