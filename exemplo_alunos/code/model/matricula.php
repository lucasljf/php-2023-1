<?php

class Matricula
{
    private $id;
    private $data_matricula;
    private $id_aluno;
    private $id_turma;

    public function __construct($id, $data_matricula, $id_aluno, $id_turma)
    {
        $this->id = $id;
        $this->data_matricula = $data_matricula;
        $this->id_aluno = $id_aluno;
        $this->id_turma = $id_turma;
    }

    public function __get($atributo)
    {
      return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function setAluno($id_aluno)
    {
        $this->id_aluno = $id_aluno;
    }

    public function setTurma($id_turma)
    {
        $this->id_turma = $id_turma;
    }
}