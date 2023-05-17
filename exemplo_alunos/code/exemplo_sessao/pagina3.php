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
    <form action="final.php">
        Variável <b>teste3</b>: <br>
        <input type="text" name="teste3">
        <br><br>
        <input type="submit" value="Próxima">
    </form>
    <?php
    echo "conteudos anteriores: <br>";

    // não será possível imprimir o valor da variável $_GET['teste1'] pois ela não foi passada na URL.
    // echo "teste1: " . $_GET['teste1'] . "<br>";

    // é possível imprimir o valor da variável de sessão $_SESSION['teste1'] pois a sessão foi iniciada e a variável de sessão foi criada na página anterior.
    echo "teste1: " . $_SESSION['teste1'] . "<br>";

    // já a variável $_GET['teste2'] foi passada na URL, então é possível imprimi-la.
    // não foi  w
    echo "teste2: " . $_GET['teste2'] . "<br>";

    // é possível utilizar a variável de sessão aqui, pois a sessão foi iniciada.
    // o valor de $_GET['teste2'] foi atribuído à variável de sessão $_SESSION['teste2'].
    $_SESSION['teste2'] = $_GET['teste2'];
    ?>
</body>

</html>