<?php

require_once '../db/conexao.php';
require_once 'curso.php';

class CursoDao
{
  private $conexao;

  public function __construct()
  {
    $conexao = new Conexao();
    $this->conexao = $conexao->conectar();
  }

  public function inserir(Curso $curso)
  {
    $sql = 'INSERT INTO tb_curso (nome, descricao, carga_horaria, data_inicio, data_fim) VALUES (:nome, :descricao, :carga_horaria, :data_inicio, :data_fim)';

    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(':nome', $curso->nome);
    $stmt->bindValue(':descricao', $curso->descricao);
    $stmt->bindValue(':carga_horaria', $curso->carga_horaria);
    $stmt->bindValue(':data_inicio', $curso->data_inicio);
    $stmt->bindValue(':data_fim', $curso->data_fim);

    $stmt->execute();
  }

  public function listar_tudo()
  {
    $sql = 'SELECT * FROM tb_curso';
    $stmt = $this->conexao->prepare($sql);
    $stmt->execute();

    $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
    $cursos = array();

    foreach ($resultados as $curso) {
      $novo_curso = new Curso($curso->id, $curso->nome, $curso->descricao, $curso->carga_horaria, $curso->data_inicio, $curso->data_fim);
      $cursos[] = $novo_curso;
    }

    return $cursos;
  }

  public function buscar_id(int $id)
  {
    $sql = 'SELECT * FROM tb_curso WHERE id = :id';
    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_OBJ);

    $novo_curso = new Curso($resultado->id, $resultado->nome, $resultado->descricao, $resultado->carga_horaria, $resultado->data_inicio, $resultado->data_fim);

    return $novo_curso;
  }
}
