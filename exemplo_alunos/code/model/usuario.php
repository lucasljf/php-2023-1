<?php

class Usuario
{
    private $id;
    private $nome_login;
    private $senha;

    public function __construct($id, $nome_login, $senha)
    {
        $this->id = $id;
        $this->nome_login = $nome_login;
        $this->senha = $senha;
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