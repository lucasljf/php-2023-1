<?php

class Usuario
{
  private $id;
  private $nome;
  private $senha;

  public function __construct($id, $nome, $senha) {
    $this->id = $id;
    $this->nome = $nome;
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
