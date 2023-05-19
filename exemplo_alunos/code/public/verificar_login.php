<?php
  require_once '../db/conexao.php';
  require_once '../model/usuario.php';
  require_once '../model/usuario_dao.php';


  if(!isset($_SESSION)){
    session_start();
  }

  $login = $_POST['email'];
  $senha = $_POST['senha'];

  $usuario = new Usuario(0, $login, $senha);

  $usuarioDao = new UsuarioDao();

  $logado = $usuarioDao->validar($usuario);

  if(!empty($logado)){
    if(password_verify($senha, $logado->senha)){
      $_SESSION['login'] = $login;
      $_SESSION['logado'] = true;
      header("location: pagina_principal.php");
    }else{
      header("location: pagina_principal.php");
    }
  }else{
    header("location: pagina_principal.php");
  }
?>
