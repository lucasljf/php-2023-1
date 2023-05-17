<?php
session_start();
$_SESSION['logado'] = $_SESSION['logado'] ?? false;

$usuario_bd = 'teste';
$senha_bd = '123';

$usuario = $_POST['usuario'] ?? null;
$senha = $_POST['senha'] ?? null;

if ($usuario == $usuario_bd && $senha == $senha_bd) {
    $_SESSION['usuario'] = $usuario_bd;
    $_SESSION['usuario'] = $senha_bd;
    $_SESSION['logado'] = true;

    header('Location: ../logado.php');
}