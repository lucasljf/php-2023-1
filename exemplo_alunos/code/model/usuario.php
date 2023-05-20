<?php

class Usuario
{
  private $id;
  private $usuario;
  private $senha;

  public function __construct($id, $usuario, $senha)
  {
    $this->id = $id;
    $this->usuario = $usuario;
    $this->senha = $senha;
  }

  public function __get($atributo)
  {
    return $this->$atributo;
  }

  public function __set($atributo, $valor)
  {
    $this->$atributo = $valor;
  }
}

?>