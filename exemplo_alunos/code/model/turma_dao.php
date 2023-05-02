<?php

require_once '../db/conexao.php';
require_once '../model/curso_dao.php';
require_once 'turma.php';

class TurmaDao
{
    private $conexao;

    public function __construct(Conexao $conexao)
    {
        $this->conexao = $conexao->conectar();
    }

    public function inserir(Turma $turma)
    {
        $sql = 'INSERT INTO tb_turma (nome, id_curso) VALUES (:nome, :id_curso)';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':nome', $turma->nome);
        $stmt->bindValue(':id_curso', $turma->curso->id);

        $stmt->execute();
    }

    public function listar_tudo()
    {
        $sql = 'SELECT * FROM tb_turma';
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        $turmas = array();

        foreach ($resultados as $turma) {
            $cursoDao = new CursoDao(new Conexao());
            $curso = $cursoDao->buscar_id($turma->id_curso);

            // $novo_curso = new Curso($turma->id_curso, $turma->nome_curso);
            $nova_turma = new Turma($turma->id, $turma->nome, $curso);

            $turmas[] = $nova_turma;
        }
        return $turmas;
    }
}
