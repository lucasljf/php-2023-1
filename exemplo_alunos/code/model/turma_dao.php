<?php

require_once '../db/conexao.php';
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
    // monta SQL
    $sql = 'INSERT INTO tb_turma (nome, id_curso) VALUES (:nome, :id_curso)';

    // preencher SQL com dados do curso que eu quero inserir
    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(':nome', $turma->__get('nome'));
    $stmt->bindValue(':id_curso', $turma->__get('id_curso'));


    // manda executar SQL
    $stmt->execute();
  }

  public function listar_tudo()
  {
    $sql = 'SELECT * FROM tb_turma';
    $stmt = $this->conexao->prepare($sql);
    $stmt->execute();

    $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
    $cursos = array();

    // percorrer resultados
    foreach ($resultados as $item) {

      // instanciar turma nova
      $nova_turma = new Turma($item->id, $item->nome, $item->id_curso);

      // guardar num novo array
      $turmas[] = $nova_turma;
    }
    // retornar esse novo array
    return $turmas;
  }
}
