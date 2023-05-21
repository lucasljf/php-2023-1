<?php

class Usuario
{
    private $id;
    private $login;
    private $senha;


    public function __construct($id, $login, $senha)
    {
        $this->id = $id;
        $this->login = $login;
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