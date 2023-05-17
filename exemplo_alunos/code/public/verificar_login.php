<?php
  require_once '../db/conexao.php';
  if(!isset($_SESSION)){
    session_start();
  }

  $login = $_POST['email'];
  $senha = $_POST['senha'];

  $_SESSION['login'] = $login;
  $_SESSION['senha'] = $senha;


  header('Location: pagina_principal.php');
?>
