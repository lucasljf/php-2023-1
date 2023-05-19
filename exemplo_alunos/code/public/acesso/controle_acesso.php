<?php
  include_once './verifica_sessao.php';

  require_once '../../model/usuario/usuario.php';
  require_once '../../model/usuario/usuario_dao.php';

$nome = $_POST['nome'] ?? null;
$senha = $_POST['senha'] ?? null;

$usuario = new Usuario(0, $nome, $senha);

$usuarioDao = new UsurioDao();

$verifica = $usuarioDao->verifica($usuario);

if($verifica != null){

  $nome_bd = $verifica->nome;
  $senha_bd = $verifica->senha;

  if ($nome_bd != "" && $senha_bd != "") {
    $_SESSION['usuario'] = $nome_bd;
    $_SESSION['senha'] = $senha_bd;
    $_SESSION['logado'] = True;

    header('Location: ../index.php');
  } 
} else {
    header('Location: ./formulario_login.php');
}









