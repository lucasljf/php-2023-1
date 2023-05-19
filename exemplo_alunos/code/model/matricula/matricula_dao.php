<?php

require_once '../../db/conexao.php';
require_once 'matricula.php';
require_once '../../model/aluno/aluno_dao.php';
require_once '../../model/turma/turma_dao.php';

class MatriculaDao extends Conexao {
    private $conexao;

    public function inserir(Matricula $matricula){
        $conexao = $this->conectar();
        $sql = 'INSERT INTO tb_matricula (id_aluno, id_turma, data_matricula) VALUES (:aluno, :turma, :data_matricula)';
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':aluno', $matricula->aluno->id);
        $stmt->bindValue(':turma', $matricula->turma->id);
        $stmt->bindValue(':data_matricula', $matricula->data_matricula);
        
        $stmt->execute();
    }

    public function listar_tudo() {
        $conexao = $this->conectar();
        $sql = 'SELECT * FROM tb_matricula';
        $stmt = $conexao->prepare($sql);
        $stmt->execute();

        $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
        $matriculas = array();

        foreach ($resultado as $item ) {
            $alunoDao = new AlunoDao();
            $aluno = $alunoDao->buscar_id($item->id_aluno);

            $turmaDao = new TurmaDao();
            $turma = $turmaDao->buscar_id($item->id_turma);

            $nova_matricula = new Matricula($item->id, $aluno, $turma, $item->data_matricula);

            $matriculas[] = $nova_matricula;
        }
        return $matriculas;
    }
}