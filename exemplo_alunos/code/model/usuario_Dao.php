<?php

require_once '../db/conexao.php';
require_once '../model/usuario.php';

class UsuarioDao{
    private $conexao;

    public function __construct()
    {
        global $conexao;
        $this->conexao = $conexao ->conectar();
    }

    public function autenticar(Usuario $usuario)
    {
        $sql = 'SELECT * FROM tb_usuario WHERE usuario = :usuario AND senha = :senha';
        $stmt = $this -> conexao -> prepare($sql);
        $stmt -> bindValue('usuario', $usuario -> usuario);        
        $stmt -> bindValue('senha', $usuario -> senha);
        $stmt -> execute();

        $entrou = $stmt -> fetch(PDO::PARAM_BOOL);
        return $entrou;
    }
}