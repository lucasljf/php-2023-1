<?php

require_once '../model/usuario.php';
require_once '../model/usuario_dao.php';

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$usuario = new Usuario(0, $nome, $senha);
$conexao = new Conexao();

$usuarioDao = new UsuarioDao($conexao);

$usuarioAutenticado = $usuarioDao->autenticar($usuario);

if($usuarioAutenticado){
    session_start();
        $_SESSION["logado"] = true;
        $_SESSION["usuario"] = $nome;

    header('Location: indexlogado.php');
} else {
    header('Location: index.html');
}
