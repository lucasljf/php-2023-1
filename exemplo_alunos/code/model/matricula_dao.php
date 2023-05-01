<?php

require_once '../db/conexao.php';
require_once 'matricula.php';
require_once 'aluno_dao.php';
require_once 'turma_dao.php';

class MatriculaDao
{
    private $conexao;

    public function __construct()
  {
    $conexao = new Conexao();
    $this->conexao = $conexao->conectar();
  }

    public function inserir(Matricula $matricula)
    {
        // monta SQL
        $sql = 'INSERT INTO tb_matricula (id_aluno, id_turma, data_matricula) VALUES (:id_aluno, :id_turma, :data_matricula)';

        // preencher SQL com dados da matricula que eu quero inserir
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id_aluno', $matricula->__get('aluno')->__get('id'));
        $stmt->bindValue(':id_turma', $matricula->__get('turma')->__get('id'));
        $stmt->bindValue(':data_matricula', $matricula->__get('data_matricula'));

        // manda executar SQL
        $stmt->execute();
    }

    public function listar_tudo()
    {
        $sql = 'SELECT * FROM tb_matricula';
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        $matriculas = array();

        // percorrer resultados
        foreach ($resultados as $item) {
        
            // buscar aluno
            $alunoDao = new AlunoDao();
            $aluno = $alunoDao->procurar_por_id($item->id_aluno);

            // buscar turma
            $turmaDao = new TurmaDao();
            $turma = $turmaDao->procurar_por_id($item->id_turma);

            // instanciar matricula nova
            $nova_matricula = new Matricula($item->id, $aluno, $turma, $item->data_matricula);
            
            // guardar num novo array
            $matriculas[] = $nova_matricula;
        }
        // retornar esse novo array
        return $matriculas;
    }
}
