<?php

require_once '../model/usuario_dao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$usuarioDao = new UsuarioDao();

$loga = $usuarioDao->logar($login, $senha);

if($loga == false){
    header('Location: /public/index.php?aux=1');

}

else{
    session_start();
    $_SESSION['id'] = $loga->id;
    $_SESSION['nome'] = $loga->nome;
    header('Location: ../public/home.php');
}





