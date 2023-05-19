<?php
  include_once './public/autenticacao.php';
?>
<body>
    <form method="post" action="autenticacao.php">
        Nome:<br />
        <input type="text" name="nome" value="root" />
        <br /><br />

        Senha:<br />
        <input type="password" name="senha" value="123" />
        <br /><br />

        <input type="submit" value="Enviar" />
    </form>

</body>

</html>