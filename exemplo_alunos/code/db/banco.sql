
DROP DATABASE IF EXISTS `db_exemplo_alunos`;
CREATE DATABASE `db_exemplo_alunos` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `db_exemplo_alunos`;

DROP TABLE IF EXISTS `tb_aluno`;
CREATE TABLE `tb_aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `data_nascimento` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `tb_curso`;
CREATE TABLE `tb_curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descrição` varchar(200) NOT NULL,
  `carga_horaria` int NOT NULL,
  date `data_inicio` NOT NULL,
  date `data_fim` NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;