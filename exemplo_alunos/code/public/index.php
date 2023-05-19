<?php
    session_start();
?>

</body>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <center>
        <h1>Bem vind@!!</h1>
        <form method="post" action="login.php">
            
            <input type="search" placeholder="Digite seu usuário" id="usuario" name="usuario"> <br> <br>

            <input type="password" placeholder="Digite sua senha" id="senha" name="senha"><br>
            
            <h3>Sem login? <br><a href="somente_listagem.php">Clique aqui!</h3></a> 

            <button type="submit">Entrar</button>
            <?php
                if(isset($_GET['i']))
                {
                    echo "<h2>Sem usuário? Entre sem logar!</h2>";
                }
            ?>

        </center>
        </form>

    </body>