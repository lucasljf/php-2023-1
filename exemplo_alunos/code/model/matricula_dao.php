<?php

require_once '../db/conexao.php';
require_once 'matricula.php';
require_once '../model/aluno_dao.php';
require_once '../model/turma_dao.php';

class MatriculaDao extends Conexao{
    private $conexao;

    public function inserir(Matricula $matricula)
    {
        $conexao = $this->conectar();
    
        $sql = 'INSERT INTO tb_matricula (id_aluno, id_turma, data_matricula) VALUES (:id_aluno, :id_turma, :data_matricula)';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id_aluno', $matricula->aluno->id);
        $stmt->bindValue(':id_turma', $matricula->turma->id);
        $stmt->bindValue(':data_matricula', $matricula->data_matricula);

        $stmt->execute();
    }

    public function listar_tudo()
    {
        $sql = 'SELECT * FROM tb_matricula';
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        $matriculas = array();

        foreach ($resultados as $matricula) {
            $alunoDao = new AlunoDao(new Conexao());
            $aluno = $alunoDao->buscar_id($matricula->id_aluno);

            $turmaDao = new TurmaDao(new Conexao());
            $turma = $turmaDao->buscar_id($matricula->id_turma);

            $nova_matricula = new Matricula($matricula->id, $aluno, $turma, $matricula->data_matricula);

            $matriculas[] = $nova_matricula;
        }
        return $matriculas;
    }
}
