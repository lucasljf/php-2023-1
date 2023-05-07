<?php

require_once '../../db/conexao.php';
require_once 'turma.php';
require_once '../../model/curso/curso_dao.php';

class TurmaDao {
    private $conexao;

    public function __construct(Conexao $conexao) {
        $this->conexao = $conexao->conectar();
        
    }

    public function inserir(Turma $turma){
        $sql = 'INSERT INTO tb_turma (nome, id_curso) VALUES (:nome, :id_curso)';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':nome', $turma->__get('nome'));
        $stmt->bindValue(':id_curso', $turma->__get('curso'));

        $stmt->execute();
    }

    public function listar_tudo(){
        $sql = 'SELECT * FROM tb_turma';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        $turmas = array();
        
        /*
        foreach ($resultados as $item) {
            $nova_turma = new Turma($item->id, $item->nome, $item->id_curso);

            $turmas[] = $nova_turma;
        }
        */
        foreach ($resultados as $item) {

            $conexao = new Conexao();
            $cursoDao = new CursoDao($conexao);
            $curso = $cursoDao->buscar_id($item->id_curso);

            $nova_turma = new Turma($item->id, $item->nome, $curso);

            $turmas[] = $nova_turma;
        }
        return $turmas;
    }

}