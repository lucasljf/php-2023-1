<?php
session_start();

if (isset($_SESSION["logado"])) {
    header("Location: logado.php");
} else {
    header("Location: convidado.html");
}
