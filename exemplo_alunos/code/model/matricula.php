<?php

class Matricula
{
  private $id;
  private $aluno;
  private $turma;
  private $data;



  public function __construct($id, $aluno, $turma, $data)
  {
    $this->id = $id;
    $this->aluno = $aluno;
    $this->turma = $turma;
    $this->data = $data;

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
