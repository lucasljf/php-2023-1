<?php
  include_once './a.php';

  require_once '../../model/usuario.php';
  require_once '../../model/usuario_dao.php';

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    if ($nome == "root" && $senha = "123"){
        session_start();
        $_SESSION["logado"] = true;
        $_SESSION["usuario"] = "root";

        header('Location: painel.php');
    } else {
        header('Location: ../../index.php');
    }
?>