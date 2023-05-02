<?php

require_once 'curso.php';

class Turma
{
  private $id;
  private $nome;
  private Curso $id_curso;


  public function __construct($id, $nome, $id_curso)
  {
    $this->id = $id;
    $this->nome = $nome;
    $this->id_curso = $id_curso;
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
