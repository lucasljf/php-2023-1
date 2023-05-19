<?php
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['logado']);
    session_destroy();
    $_SESSION = array();
    header("location: index.php"); 
    exit;