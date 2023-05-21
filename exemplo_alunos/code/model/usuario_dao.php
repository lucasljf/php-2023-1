<?php

require_once '../db/conexao.php';
require_once 'usuario.php';

class usuarioDao
{
    private $conexao;

    public function __construct()
    {
        $conexao = new Conexao();
        $this->conexao = $conexao->conectar();
    }

    public function logar(Usuario $usuario)
    {
        $sql = 'SELECT * FROM tb_usuario WHERE usuario = :usuario AND senha = :senha';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':usuario', $usuario->usuario);
        $stmt->bindValue(':senha', $usuario->senha);
        $stmt->execute();

        $resultado = $stmt->fetch(PDO::PARAM_BOOL);
        return $resultado;
    }
}
