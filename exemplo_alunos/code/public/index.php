<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <form action="login.php" method="post">
        Login: <br>
        <input type="text" name="login" id="login"> <br><br>

        Senha: <br>
        <input type="password" name="senha" id="senha"> <br><br>

        <input type="submit" value="Entrar"> <br><br>

        <a href="inicio.html">Entrar como visitante</a>

        <?php
            if(isset($_GET['erro'])){
                if($_GET['erro'] == 'permissao'){
                    echo '<p style="color:red">Faça login para acessar essa página!<p>';
                } else if ($_GET['erro'] == 'login'){
                    echo '<p style="color:red">Login ou senha inválidos!<p>';
                } 
            }
        ?>
    </form>
</body>
</html>