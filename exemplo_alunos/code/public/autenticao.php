<?php
    $nome = $_POST["login"];
    $senha = $_POST["senha"];


    if ($nome == "layza" && $senha = "123") {
        session_start();
        $_SESSION["logado"] = true;
        $_SESSION["login"] = "layza";
        $_SESSION["senha"] = "123";


        header("Location: logado.html");

    }
       else
       header ("Location: erro.php");
    ?>