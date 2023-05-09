<?php

require_once '../../db/conexao.php';
require_once 'matricula.php';
require_once '../../model/aluno/aluno_dao.php';
require_once '../../model/turma/turma_dao.php';

class MatriculaDao {
    private $conexao;

    public function __construct(Conexao $conexao) {
        $this->conexao = $conexao->conectar(); 
    }

    public function inserir(Matricula $matricula){
        $sql = 'INSERT INTO tb_matricula (id_aluno, id_turma, data_matricula) VALUES (:aluno, :turma, :data_matricula)';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':aluno', $matricula->__get('aluno'));
        $stmt->bindValue(':turma', $matricula->__get('turma'));
        $stmt->bindValue(':data_matricula', $matricula->__get('data_matricula'));
        
        $stmt->execute();
    }

}