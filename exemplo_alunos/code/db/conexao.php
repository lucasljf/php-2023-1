<?php

class Conexao
{
    private $host = 'mariadb-server';
    private $db = 'db_exemplo_alunos';
    private $user = 'root';
    private $password = '123';

    public function conectar()
    {
        try {
            $conexao = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password);
            return $conexao;
        } catch (PDOException $e) {
            echo $e;
        }
    }
}
