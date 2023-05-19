<?php
session_start();
$_SESSION['logado'] = $_SESSION['logado'] ?? false;

if(isset($_GET['sair']) && $_GET['sair'] == 1)
{
    $_SESSION = array();
    session_destroy();
    header('Location: ../../index.php');
}