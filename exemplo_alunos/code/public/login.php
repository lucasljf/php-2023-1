<?php
require_once '../model/usuario.php';
require_once '../model/usuario_Dao.php';
$login = $_POST['usuario'];
$senha = $_POST['senha'];

$usuario = new Usuario(0, $login, $senha);

$conexao = new Conexao();
$usuarioDao = new UsuarioDao();

$autenticado = $usuarioDao->autenticar($usuario);

if($autenticado){
    $_SESSION['usuario'] = $login;
    header('Location: pagina_inicial.php');
 } elseif($autenticado == null){
    header('Location: index.php?i=0'); }
?>