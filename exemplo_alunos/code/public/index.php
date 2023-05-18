<?php
    session_start();
    if(isset($_SESSION['id'])){
        header('Location: home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
        #divlogin{
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-top: 10%;
            font-size: 22px;
        }

        input{
            border-radius: 10px;
            border-style: solid;
            border-color: black;
            height: 25px;
            width: 250px;
        }
    </style>

    <title>Login</title>
</head>
<body>
    <div id="divlogin">
        <form action="../controller/resposta_login.php" method="post">
            Login:<br/>
            <input placeholder='Insira seu login' type='text' name="login" id="login"> <br/>
            <br/>
            Senha:<br/> 
            <input placeholder='Insira sua senha' type='password' name="senha" id="senha"> <br/>
            <br/>
            <input type="submit" value="Entrar"><br/>
            <br>
            <a href="home.php">Entrar sem login</a>
            <br/>
            <?php
            if(isset($_GET['aux']))
            {
                echo "<h4 style='color:red;'>Dados inválidos.</h4>";
            }
        ?>
        </form>
    </div>
    
</body>
</html>