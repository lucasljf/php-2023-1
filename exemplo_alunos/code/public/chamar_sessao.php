<?php
require_once '../model/usuariocadastrado_dao.php';
require_once '../model/usuario.php';

session_start();

$usuarioDao = new UsuarioDao();
$usuario = $usuarioDao->autenticar($_POST['usuario'], $_POST['senha']);

if ($usuario == null) {
    header('Location: index.html');
} else {
    $_SESSION['usuario_logado'] = $usuario;
    header('Location: usuariocadastrado.html');
}




