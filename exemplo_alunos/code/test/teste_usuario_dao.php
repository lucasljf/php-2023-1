<?php

require_once '../model/usuario_dao.php';


$usuarioDao = new UsuarioDao();

//$usuario = new Usuario(0, "Guilherme", "gui", "gui123", "guilherme@gmail.com);

$teste = $usuarioDao->logar("gui", "gui123");

//$alunos = $alunoDao->listar_tudo();

echo "<pre>";
print_r($teste);
echo "</pre>";