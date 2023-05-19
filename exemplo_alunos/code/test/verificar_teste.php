<?php
  require_once '../db/conexao.php';
  require_once '../model/usuario.php';
  require_once '../model/usuario_dao.php';


  $login = 'admin';
  $senha = 'admin';

  $usuario = new Usuario(0, $login, $senha);

  $usuariodao = new UsuarioDao();

  $logado = $usuariodao->validar($usuario);

  if(!empty($logado)){
    echo "Aqui faz a verificação de que a variavel logado esta ou não vazia";
    echo "<br>";
    print_r($logado);
    echo "<br><br>";
    if(password_verify($senha, $logado->senha)){
      echo "Verificação da senha se esta de acordo com o banco";
      echo "<br>";
      print_r($logado);
      echo "<br><br>";
      //header("location: pagina_principal.php");
      echo "Logado com sucesso";
    }else{
      //header("location: pagina_principal.php");
      echo "erro ao logar";
    }
  }else{
    echo "logado sem usuario cadastrado";
    //header("location: pagina_principal.php");
  }
?>
