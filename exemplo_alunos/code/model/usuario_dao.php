<?php

require_once '../../db/conexao.php';
require_once 'usuario.php';

class UsuarioDao extends Conexao {

  private $conexao;

  public function verifica($usuario) {
    $conexao = $this->conectar();
    $sql = "SELECT * FROM tb_usuario  WHERE nome = :nome AND senha = :senha";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':nome', $usuario->nome);
    $stmt->bindValue(':senha', $usuario->senha);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_OBJ);

    if ($resultado != null) {
      $verifica_usuario = new Usuario($resultado->id, $resultado->nome, $resultado->senha);
      return $verifica_usuario;
    }
  }
}