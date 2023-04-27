<?php

class Matricula
{
    private $id;
    private $id_aluno;
    private $id_turma;
    private $data_ingresso;

    public function __construct($id, $id_aluno, $id_turma, $data_ingresso)
    {
        $this->id = $id;
        $this-> id_aluno = $id_aluno;
        $this-> id_turma = $id_turma;
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