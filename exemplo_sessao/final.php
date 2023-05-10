<?php
// inicia a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Todos conteúdos:<br>";

    // não será possível imprimir o valor da variável $_GET['teste1'] pois ela não foi passada na URL.
    // echo "teste1: " . $_GET["teste1"] . "<br>";

    // não será possível imprimir o valor da variável $_GET['teste2'] pois ela não foi passada na URL.
    // echo "teste2: " . $_GET["teste2"] . "<br>";


    // é possível imprimir o valor da variável de sessão $_SESSION['teste1'] pois a sessão foi iniciada e a variável de sessão foi criada em uma página anterior.
    echo "teste1: " . $_SESSION["teste1"] . "<br>";

    // é possível imprimir o valor da variável de sessão $_SESSION['teste2'] pois a sessão foi iniciada e a variável de sessão foi criada em uma página anterior.
    echo "teste2: " . $_SESSION["teste2"] . "<br>";

    // será possível imprimir o valor da variável $_GET['teste3'] pois ela foi passada na URL.
    echo "teste3: " . $_GET["teste3"] . "<br>";
    ?>
</body>

</html>