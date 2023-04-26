<?php

class Matricula
{
    private $id;
    private $data_matricula;
    private $aluno;
    private $turma;

    public function __construct($id, $data_matricula, $aluno, $turma)
    {
        $this->id = $id;
        $this->data_matricula = $data_matricula;
        $this->aluno = $aluno;
        $this->turma = $turma;
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