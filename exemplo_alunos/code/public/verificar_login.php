<?php
  require_once '../db/conexao.php';
  if(!isset($_SESSION)){
    session_start();
  }

  $login = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM tb_usuario WHERE login = '$login' and senha = '$senha'";

  echo $sql;
  $res = $conexao->query($sql);
  print_r($res);
  $row = $res->fetch_object();
  $quantidade = $res->num_rows;

  if($quantidade > 0){
    $_SESSION['login'] = $login;
    header('Location: pagina_principal.php');
  }else{
    header('Location: pagina_principal.php');
  }
?>
