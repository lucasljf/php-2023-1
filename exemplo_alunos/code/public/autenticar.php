<? 
require_once '../db/conexao.php';
session_start();
$acao = isset($_GET["acao"]);
if(isset($acao) && $acao == 'Sair') {
    unset($_SESSION['logado']);
    header('Location: index.html');
}
else {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $conexao = new Conexao();
    $conectado = $conexao->conectar();

    $sql = 'SELECT * from tb_login WHERE usuario= :usuario AND senha= :senha';

    // preencher SQL com dados do aluno que eu quero inserir
    $stmt = $conectado->prepare($sql);
    $stmt->bindValue(':usuario', $usuario);
    $stmt->bindValue(':senha', $senha);
    $stmt->execute();
    // manda executar SQL
    $result = $stmt->rowCount();

    if($result === 1) {
        $_SESSION['logado'] = 'true';
        header('Location: menu.php');
    }
    else {
        header('Location: index.html');
    }
}