<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login do CRUD</title>
  <link rel="stylesheet" type="text/css" href="../style/estilo_login.css">
</head>

<body>
  <div class="conteiner_login">
  
    <div class="content-login">
  
        <h2> Tela de Login </h2>
        <?php
          
          $_SESSION['login'] = 'admin';
          if(isset($_SESSION['login']) == 'admin') {echo "passou"; print_r($_SESSION) ;}

        ?>if($_SESSION['logado'] === 'admin' and $_SESSION['senha'] === 'admin'){
          //print_r($res);
  //var_dump($res);
  //$quantidade = sizeof($res);
  //print_r(sizeof($res));
        }
