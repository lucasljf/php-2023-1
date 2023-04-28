<?php

class Matricula
{
    private $id;
    private $aluno;
    private $turma;
    private $data_matricula;

    public function __construct($id, $aluno, $turma, $data_matricula)
    {
        $this->id = $id;
        $this->aluno = $aluno;
        $this->turma = $turma;
        $this->data_matricula = $data_matricula;
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