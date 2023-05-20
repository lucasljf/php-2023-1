<?php

require_once '../model/usuario.php';
require_once '../model/usuario_dao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$usuario = new Usuario(0, $usuario, $senha);
$conexao = new Conexao();

$usuarioDao = new UsuarioDao($conexao);

$usuariovalidado = $usuarioDao->validar($usuario);

if($usuariovalidado){
    session_start();
        $_SESSION["logado"] = true;
        $_SESSION["usuario"] = $usuario;

    header('Location: index.html');
} else {
    echo"Falha no login";
}
?>
