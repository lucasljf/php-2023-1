<?php

require_once '../../db/conexao.php';
require_once 'curso.php';

class CursoDao extends Conexao{
  private $conexao;

  public function inserir(Curso $curso) {
    $conexao = $this->conectar();
    // monta SQL
    $sql = 'INSERT INTO tb_curso (nome, descricao, carga_horaria, data_inicio, data_fim) VALUES (:nome, :descricao, :carga_horaria, :data_inicio, :data_fim)';

    // preencher SQL com dados do curso que eu quero inserir
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':nome', $curso->nome);
    $stmt->bindValue(':descricao', $curso->descricao);
    $stmt->bindValue(':carga_horaria', $curso->carga_horaria);
    $stmt->bindValue(':data_inicio', $curso->data_inicio);
    $stmt->bindValue(':data_fim', $curso->data_fim);

    // manda executar SQL
    $stmt->execute();
  }

  public function listar_tudo() {
    $conexao = $this->conectar();
    $sql = 'SELECT * FROM tb_curso';
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
    $cursos = array();

    // percorrer resultados
    foreach ($resultados as $item) {

      // instanciar curso novo
      $novo_curso = new Curso($item->id, $item->nome, $item->descricao, $item->carga_horaria, $item->data_inicio, $item->data_fim);

      // guardar num novo array
      $cursos[] = $novo_curso;
    }
    // retornar esse novo array
    return $cursos;
  }

  public function buscar_id($id) {
    $conexao = $this->conectar();
    $sql = "SELECT * FROM tb_curso WHERE id = :id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_OBJ);

    $novo_curso = new Curso($resultado->id, $resultado->nome, $resultado->descricao, $resultado->carga_horaria, $resultado->data_inicio, $resultado->data_fim);

    return $novo_curso;
  }
}
