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
        $stmt->bindValue(':aluno', $matricula->aluno->id);
        $stmt->bindValue(':turma', $matricula->turma->id);
        $stmt->bindValue(':data_matricula', $matricula->data_matricula);
        
        $stmt->execute();
    }

    public function listar_tudo() {
        $sql = 'SELECT * FROM tb_matricula';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
        $matriculas = array();

        foreach ($resultado as $item ) {
            $conexao = new Conexao();
            
            $alunoDao = new AlunoDao($conexao);
            $aluno = $alunoDao->buscar_id($item->id_aluno);

            $turmaDao = new TurmaDao($conexao);
            $turma = $turmaDao->buscar_id($item->id_turma);

            $nova_matricula = new Matricula($item->id, $aluno, $turma, $item->data_matricula);

            $matriculas[] = $nova_matricula;
        }
        return $matriculas;
    }
}