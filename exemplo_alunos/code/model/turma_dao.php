<?php
require_once '../db/conexao.php';
require_once 'turma.php';
require_once 'curso_dao.php';

class TurmaDao{
    private $conexao;

    public function __construct()
    {
        $conexao = new Conexao();
        $this->conexao = $conexao->conectar();
    }

    public function inserir(Turma $turma){
        // monta SQL
        $sql = 'INSERT INTO tb_turma (nome, id_curso) VALUES (:nome, :id_curso)';

        // preencher SQL com dados do aluno que eu quero inserir
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':nome', $turma->__get('nome'));
        $stmt->bindValue(':id_curso', $turma->__get('curso')->_get('id'));

        // manda executar SQL
        $stmt->execute();
    }

    public function listar_tudo()
    {
        $sql = 'SELECT * FROM tb_turma';
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        $turmas = array();
        // percorrer resultados
        foreach ($resultados as $item) {
        
            // buscar curso
            $cursoDao = new CursoDao(new Conexao());
            $curso = $cursoDao->procurar_por_id($item->id_curso);
            // instanciar turma nova
            $nova_turma = new Turma($item->id, $item->nome, $curso);
            
            // guardar num novo array
            $turmas[] = $nova_turma;
        }
    }

    public function procurar_por_id($id)
    {
        $sql = 'SELECT * FROM tb_turma WHERE id = :id';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_OBJ);
        $item = $resultado;
        
        // buscar curso
        $cursoDao = new CursoDao(new Conexao());
        $curso = $cursoDao->procurar_por_id($item->id_curso); 
        // instanciar turma nova
        $turma = new Turma($item->id, $item->nome, $curso);
        return $turma;
    }
}
?>