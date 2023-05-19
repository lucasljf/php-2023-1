<?php 
   
	// Verifica se o formulário foi submetido
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			// Conecta ao banco de dados
			require_once 'db/conexao.php';
			require_once 'model/usuario.php';
			require_once 'model/usuario_dao.php';
			$conexao = new Conexao();
			$usuarioDao = new UsuarioDao($conexao);

			// Obtém os valores do formulário
			$nome_login = $_POST['nome_login'];
			$senha = $_POST['senha'];

			// Cria um objeto usuário e verifica se estão corretas
			$usuario = new Usuario(0,$nome_login, $senha);
			if ($usuarioDao->autenticar($usuario)) {
				// se estão corretas, redireciona para a página protegida
				header('Location: public/inicio.html');
				exit;
			} else {
				// Caso contrário, exibe uma mensagem de erro
				echo '<p>Credenciais inválidas. Tente novamente.</p>';
	}	
		}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Inicial</title>
</head>
<body>
	<h1>Bem-vindo à página inicial</h1>
	
	<form method="POST">
		<label for="nome_login">Nome de usuário:</label>
		<input type="text" name="nome_login" required>
		<label for="senha">Senha:</label>
		<input type="password" name="senha" required>
		<button type="submit">Entrar</button>
	</form>
	<a href="./public/inicio_navegador.html">Acessar sem conta</a> <br>
</body>
</html>



