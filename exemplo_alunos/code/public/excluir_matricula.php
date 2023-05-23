<?php
    $id = $_GET['id'];

    require_once '../model/matricula_dao.php';

    $conexao = new Conexao();
    $matriculaDao = new MatriculaDao($conexao);

    $matriculaDao->excluir($id);
    header('Location: listar_matriculas.php');