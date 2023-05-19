<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login do CRUD</title>
  <link rel="stylesheet" type="text/css" href="../style/estilo_login.css">
</head>

<body>
  <div class="conteiner_login">
  
    <div class="content-login">
  
        <h2> Tela de Login </h2>
  
        <form class="caixa_login" method="post" action="verificar_login.php">
          <label for="email">Login:</label>
          <br>
          <input type="text" id="email" class="campo" name="email" placeholder="Digite aqui o seu login"><br>
          <label class="espaco_senha" for="senha">Senha:</label>
          <br>
          <input type="password" id="senha" class="campo" name="senha" placeholder="Digite aqui a sua senha">
          <input type="submit" class="botao" value="Entrar">
        </form>
    </div><!--corpo onde se tem os dados do formulario de login-->
  
  </div><!--Corpo que movimenta o login na pagina-->
</body>

</html>
