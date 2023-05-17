<?php
  include_once './verifica_sessao.php';

$usuario_bd = 'mayko';
$senha_bd = '12345';

$usuario = $_POST['usuario'] ?? null;
$senha = $_POST['senha'] ?? null;

if ($usuario == $usuario_bd && $senha == $senha_bd) {
    $_SESSION['usuario'] = $usuario_bd;
    $_SESSION['senha'] = $senha_bd;
    $_SESSION['logado'] = True;

    header('Location: ../logado.php');
} else {
    header('Location: ./formulario_login.php');
}