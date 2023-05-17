<?php

class Usuario
{
  private $id;
  private $nome;
  private $login;
  private $senha;
  private $email;

  public function __construct($id, $nome, $login, $senha, $email)
  {
    $this->id = $id;
    $this->nome = $nome;
    $this->login = $login;
    $this->senha = $senha;
    $this->email = $email;
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
