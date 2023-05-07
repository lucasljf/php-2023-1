<?php

require_once '../db/conexao.php';
require_once 'turma.php';
require_once 'curso_dao.php';

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
    $stmt->bindValue(':nome', $turma->nome);
    $stmt->bindValue(':id_curso', $turma->curso->id);
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
      $conexao = new Conexao();
      $cursoDao = new CursoDao($conexao);
      $curso = $cursoDao->buscar_id($item->id_curso);

      // instanciar turma nova
      $nova_turma = new Turma($item->id, $item->nome, $curso);

      // guardar num novo array
      $turmas[] = $nova_turma;
    }
    // retornar esse novo array
    return $turmas;
  }

  public function buscar_id($id){
    $sql = "select * from tb_turma where id = :id";
    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_OBJ);

    $conexao = new Conexao();
    
    $cursoDao = new CursoDao($conexao);
    $curso = $cursoDao->buscar_id($item->id_curso);


    $nova_turma = new Turma($resultado->id, $resultado->nome, $curso);

    return $nova_turma;
  }
}

