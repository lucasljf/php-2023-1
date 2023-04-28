<?php
require_once '../model/aluno_dao.php';
require_once '../model/turma_dao.php';
require_once '../db/conexao.php';
require_once '../model/matricula.php';

class MatriculaDao{
    private $conexao;

    public function __construct()
    {
        $conexao = new Conexao();
        $this->conexao = $conexao->conectar();
    }

    public function inserir(Matricula $matricula){
        // monta SQL
        $sql = 'INSERT INTO tb_matricula (id_aluno, id_turma, data_matricula) VALUES (:id_aluno, :id_turma, :data_matricula)';

        // preencher SQL com dados do aluno que eu quero inserir
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id_aluno', $matricula->__get('aluno')->_get('id'));
        $stmt->bindValue(':id_turma', $matricula->__get('turma')->_get('id'));
        $stmt->bindValue(':data_matricula', $matricula->__get('data_matricula'));

        // manda executar SQL
        $stmt->execute();
    }

    public function listar_tudo(){
        $sql = 'SELECT * FROM tb_matricula';
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        $matriculas = array();

        foreach ($resultados as $item){
            // Buscar aluno
            $alunoDao = new AlunoDao(new Conexao());
            $aluno = $alunoDao->procurar_por_id($item->id_aluno);

            // Buscar turma
            $turmaDao = new TurmaDao(new Conexao());
            $turma = $turmaDao->procurar_por_id($item->id_turma);

            // instancia uma nova matricula
            $nova_matricula = new Matricula($item->id, $aluno, $turma, $item->data_matricula);

            // guardar num novo array
            $matriculas[] = $nova_matricula;
        }
        return $matriculas;
    }


}

?>