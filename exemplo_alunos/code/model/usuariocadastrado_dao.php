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

public function inserir(Usuario $usuario)
    {
        // monta SQL
        $sql = 'INSERT INTO tb_usuario (usuario, senha) VALUES (:usuario, :senha)';

        // preencher SQL com dados do aluno que eu quero inserir
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':usuario', $usuario->__get('usuario'));
        $stmt->bindValue(':senha', $usuario->__get('senha'));

        // manda executar SQL
        $stmt->execute();
    }

   
  public function autenticar($usuario, $senha)
  {
    
    $query = "SELECT * FROM tb_usuario WHERE usuario=:usuario and senha=:senha";
    
  
    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue(':usuario', $usuario);
    $stmt->bindValue(':senha', $senha);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_OBJ);
    if ($resultado){
      $usuario = new Usuario($resultado->id, $resultado->usuario, $resultado->senha);

      return $usuario;
    
    }
  }
}