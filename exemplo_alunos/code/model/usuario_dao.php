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

    public function logar($login, $senha)
    {
        $sql = 'SELECT * FROM tb_usuario WHERE LOGIN = :login';

        // preencher SQL com dados do usuario que eu quero logar
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':login', $login);
    
        // manda executar SQL
        $stmt->execute();   

        $resultado = $stmt->fetch(PDO::FETCH_OBJ);
    
        if($resultado != null && $resultado->senha == $senha)
        {
            // instanciar usuario novo
            $novo_usuario = new Usuario($resultado->id, $resultado->nome, $resultado->login, $resultado->senha, $resultado->email);
            return $novo_usuario;
        }
        else
        {
            return false;
        }
    }


}
