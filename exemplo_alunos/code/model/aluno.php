<?php

class Aluno
{
    private $id;
    private $nome;
    private $endereco;
    private $telefone;
    private $data_nascimento;

    public function __construct($id, $nome, $endereco, $telefone, $data_nascimento)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->data_nascimento = $data_nascimento;
    }
}