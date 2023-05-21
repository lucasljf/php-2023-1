<?php
require_once 'usuario.php';
require_once 'usuario_dao.php';
require_once '../db/conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuarioDao = new usuarioDao();

    $usuario = new Usuario(0, $usuario, $senha);

    if ($usuarioDao->logar($usuario)) {
        session_start();
        $_SESSION["logado"] = true;
        header("Location: ../public/logado.php");
        exit;
    } else {
        header("Location: ../public/erro.html");
    }
}
