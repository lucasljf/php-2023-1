<?php

class Turma
{
    private $id;
    private $nome;
    private $curso_id;

    public function __construct($id, $nome, $curso_id)
    {
        $this->id = $id;
        $this-> nome = $nome;
        $this-> curso_id = $curso_id;

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