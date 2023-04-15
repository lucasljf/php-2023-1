<?php

class Curso
{
    private $id;
    private $nome;
    private $descricao;
    private $carga_horaria; 
    private $data_inicio;
    private $data_fim;

    public function __construct($id, $nome, $descricao, $carga_horaria, $data_inicio, $data_fim)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->carga_horaria = $carga_horaria;
        $this->data_inicio = $data_inicio;
        $this->data_fim = $data_fim;
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
