<?php

require_once __DIR__ . '/../db/conexao.php';
require_once 'usuario.php';

class UsuarioDao
{
    private $conexao;

    public function __construct()
    {
        $conexao = new Conexao();
        $this->conexao = $conexao->conectar();
    }

    public function autenticar(Usuario $usuario)
    {
        $sql = "SELECT * FROM tb_usuario 
        WHERE nome_login = :nome_login AND senha = :senha";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':nome_login', $usuario->nome_login);
        $stmt->bindValue(':senha', $usuario->senha);
        $stmt->execute();

        $resultado = $stmt->fetch(PDO::PARAM_BOOL);
        return $resultado;
    }

}