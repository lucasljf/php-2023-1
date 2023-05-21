 <?php

 require_once '../db/conexao.php';
 require_once 'usuario.php';

 class UsuarioDao

 {
    private $conexao;

    public function __construct()
    {
        $conexao = new Conexao();
        $this->conexao = $conexao->conectar();
    }

       












 }
