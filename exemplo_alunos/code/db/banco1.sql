-- Adminer 4.8.1 MySQL 5.5.5-10.5.19-MariaDB-1:10.5.19+maria~ubu2004 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

create database db_exemplo_alunos;

use db_exemplo_alunos;

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
  `descricao` varchar(200) NOT NULL,
  `carga_horaria` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `tb_matricula`;
CREATE TABLE `tb_matricula` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL,
  `data_matricula` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_aluno` (`id_aluno`),
  KEY `id_turma` (`id_turma`),
  CONSTRAINT `tb_matricula_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`id`),
  CONSTRAINT `tb_matricula_ibfk_2` FOREIGN KEY (`id_turma`) REFERENCES `tb_turma` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `tb_turma`;
CREATE TABLE `tb_turma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `id_curso` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_curso` (`id_curso`),
  CONSTRAINT `tb_turma_ibfk_3` FOREIGN KEY (`id_curso`) REFERENCES `tb_curso` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;



-- 2023-05-09 23:35:50

INSERT INTO `tb_aluno` (`id`, `nome`, `endereco`, `telefone`, `data_nascimento`) VALUES
(1,	'Guilherme',	'Rua 09',	'123456789',	'2001-04-15'),
(2,	'Gustavo',	'rua 21 ',	'25417854',	'2023-05-01');

INSERT INTO `tb_curso` (`id`, `nome`, `descricao`, `carga_horaria`, `data_inicio`, `data_fim`) VALUES
(1,	'Sistemas',	'tecnologia',	3000,	'2023-04-25',	'2023-04-26'),
(2,	'Engenharia',	'enhenharia civil',	5000,	'2023-05-08',	'2023-05-09'),
(3,	'farmacia',	'farmacia basica',	2000,	'2023-05-02',	'2023-08-23');

INSERT INTO `tb_turma` (`id`, `nome`, `id_curso`) VALUES
(1,	'turma a',	1),
(2,	'turma a',	2),
(3,	'turma c',	3);

INSERT INTO `tb_matricula` (`id`, `id_aluno`, `id_turma`, `data_matricula`) VALUES
(1,	1,	3,	'2023-05-07'),
(2,	1,	2,	'2023-05-09'),
(3,	2,	3,	'2023-05-15');