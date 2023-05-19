<?php
  include_once '../acesso/verifica_sessao.php';

if (!$_SESSION['logado']) {
   header('Location: ../acesso/formulario_login.php');
}
?>
<?php

require_once '../../model/turma/turma.php';
require_once '../../model/turma/turma_dao.php';

$nome = $_GET['nome'];
$id_curso = $_GET['curso'];

$cursoDao = new CursoDao();
$curso = $cursoDao->buscar_id($id_curso);

$turma = new Turma(0, $nome, $curso);
$turmaDao = new TurmaDao();
$turmaDao->inserir($turma);

header('Location: ../logado.php');