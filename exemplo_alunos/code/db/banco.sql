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

DROP TABLE IF EXISTS `tb_turma`;
CREATE TABLE `tb_turma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `id_curso` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_curso` (`id_curso`),
  CONSTRAINT `tb_turma_ibfk_3` FOREIGN KEY (`id_curso`) REFERENCES `tb_curso` (`id`)
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

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `login` varchar(12) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `email` varchar(45) NOT NULL,
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_usuario` (`id`, `nome`, `login`, `senha`, `email`) VALUES
(1,	'Guilherme',	'gui',	'gui123',	'guilherme@gmail.com');

-- 2023-05-18 03:43:05


INSERT INTO `tb_aluno` (`id`, `nome`, `endereco`, `telefone`, `data_nascimento`) VALUES
(1,	'Guilherme',	'Rua 09',	'123456789',	'2001-04-15'),
(2,	'Gustavo',	'rua 21 ',	'25417854',	'2023-05-01'),
(3,	'pedro',	'rua 8 ',	'584125874',	'2001-05-01'),
(4,	'jose',	'rua 44',	'256354',	'2000-02-12');

INSERT INTO `tb_curso` (`id`, `nome`, `descricao`, `carga_horaria`, `data_inicio`, `data_fim`) VALUES
(1,	'Sistemas',	'tecnologia',	3000,	'2023-04-25',	'2023-04-26'),
(2,	'Engenharia',	'enhenharia civil',	5000,	'2023-05-08',	'2023-05-09'),
(3,	'farmacia',	'farmacia basica',	2000,	'2023-05-02',	'2023-08-23'),
(4,	'odonto',	'odontologia',	3000,	'2021-01-01',	'2023-01-01');

INSERT INTO `tb_turma` (`id`, `nome`, `id_curso`) VALUES
(1,	'turma a',	1),
(2,	'turma a',	2),
(3,	'turma c',	3),
(4,	'turma vi',	1);

INSERT INTO `tb_matricula` (`id`, `id_aluno`, `id_turma`, `data_matricula`) VALUES
(1,	1,	3,	'2023-05-07'),
(2,	1,	2,	'2023-05-09'),
(3,	2,	3,	'2023-05-15'),
(4,	3,	4,	'2023-05-16'),
(5,	3,	4,	'2023-05-16'),
(6,	3,	4,	'2023-05-18');
