<?php
  include_once './public/acesso/verifica_sessao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>

<body>

<?php
  if (!$_SESSION['logado']) {
    include_once './public/visitante.php';
  } else {
    include_once './public/logado.php';
  }
?>
</body>

</html>
