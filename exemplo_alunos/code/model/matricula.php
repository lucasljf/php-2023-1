<?php

class Matricula
{
    private $id;
    private $aluno;
    private $turma;
    private $data_ingresso;

    public function __construct($id, $aluno, $turma, $data_ingresso)
    {
        $this-> id = $id;
        $this-> aluno = $aluno;
        $this-> turma = $turma;
        $this-> data_ingresso = $data_ingresso;

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