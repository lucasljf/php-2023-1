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

    // preencher SQL com dados do curso que eu quero inserir
    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(':id_aluno', $matricula->aluno->id);
    $stmt->bindValue(':id_turma', $matricula->turma->id);
    $stmt->bindValue(':data_matricula', $matricula->data);

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

      $alunoDao = new AlunoDao();
      $aluno = $alunoDao->buscar_id($item->id_aluno);

      $turmaDao = new TurmaDao();
      $turma = $turmaDao->buscar_id($item->id_turma);

      // instanciar matricula nova
      $nova_matricula = new Matricula($item->id, $aluno, $turma, $item->data_matricula);

      // guardar num novo array
      $matriculas[] = $nova_matricula;
    }
    // retornar esse novo array
    return $matriculas;
  }
}

