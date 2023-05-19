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

INSERT INTO `tb_aluno` (`id`, `nome`, `endereco`, `telefone`, `data_nascimento`) VALUES
(1,	'Fulano',	'Rua F1',	'62987654321',	'2010-10-01'),
(2,	'Ciclano',	'Rua C1',	'62999222222',	'1990-12-30'),
(3,	'Teste3',	'Rua 3',	'62991003333',	'1993-03-03');

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

INSERT INTO `tb_curso` (`id`, `nome`, `descricao`, `carga_horaria`, `data_inicio`, `data_fim`) VALUES
(1,	'Tec. Teste',	'Curso para teste do CursoDao',	200,	'2000-01-30',	'2000-03-30'),
(2,	'Tec. Info',	'Técnico em Informática (Teste 1)',	1000,	'2011-01-01',	'2012-01-01');

DROP TABLE IF EXISTS `tb_turma`;
CREATE TABLE `tb_turma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `id_curso` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_curso` (`id_curso`),
  CONSTRAINT `tb_turma_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `tb_curso` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tb_turma` (`id`, `nome`, `id_curso`) VALUES
(1,	'Turma 2009',	1),
(2,	'Turma de 2010',	2),
(3,	'2a',	2);

DROP TABLE IF EXISTS `tb_login`;
CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tb_login` (`id`, `usuario`, `senha`) VALUES
(1,	'daianny',	'123456');

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

INSERT INTO `tb_matricula` (`id`, `id_aluno`, `id_turma`, `data_matricula`) VALUES
(1,	3,	2,	'2020-01-01'),
(2,	2,	1,	'2023-05-01');

