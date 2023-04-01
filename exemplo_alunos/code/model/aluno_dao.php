<?php

require_once '../db/conexao.php';

class AlunoDao
{
    private $conexao;

    public function __construct(Conexao $conexao)
    {
        $this->conexao = $conexao->conectar();
    }
}