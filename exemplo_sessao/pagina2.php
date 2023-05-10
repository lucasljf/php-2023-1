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
    <form action="pagina3.php">
        Variável <b>teste2</b>: <br>
        <input type="text" name="teste2">
        <br><br>
        <input type="submit" value="Próxima">
    </form>
    <?php
    echo "conteudo anterior:<br>";
    // foi possível imprimir o valor da variável $_GET['teste1'] pois ela foi passada na URL.
    echo "teste1: " . $_GET["teste1"] . "<br>";

    // é possível utilizar a variável de sessão aqui, pois a sessão foi iniciada.
    // o valor de $_GET['teste1'] foi atribuído à variável de sessão $_SESSION['teste1'].
    $_SESSION["teste1"] = $_GET["teste1"];
    ?>
</body>

</html>