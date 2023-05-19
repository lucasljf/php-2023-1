<? 
require_once '../db/conexao.php';
session_start();
$acao = isset($_GET["acao"]);
if(isset($acao) && $acao == 'Sair') {
    unset($_SESSION['logado']);
    header('Location: index.html');
}
