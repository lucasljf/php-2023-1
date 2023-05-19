
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
(1,	'maria',	'nafiss',	'123456789',	'2005-04-03'),
(2,	'luiz',	'brasilia',	'987654321',	'2002-11-20'),
(3,	'jorge',	'agra',	'123789456',	'1978-10-28'),
(4,	'Julia',	'feitosa',	'9140258215',	'2012-05-12');

DROP TABLE IF EXISTS `tb_curso`;
CREATE TABLE `tb_curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `carga_horaria` int(200) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_final` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tb_curso` (`id`, `nome`, `descricao`, `carga_horaria`, `data_inicio`, `data_final`) VALUES
(1,	'sistemas de informação',	'curso para quem gosta de programar',	400,	'2000-01-01',	'2022-01-01'),
(2,	'biologia',	'quem gosta de planta',	400,	'2023-01-01',	'2027-01-01');

DROP TABLE IF EXISTS `tb_turma`;
CREATE TABLE `tb_turma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `curso_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `curso_id` (`curso_id`),
  CONSTRAINT `tb_turma_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `tb_curso` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `tb_matricula`;
CREATE TABLE `tb_matricula` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_turma` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `data_ingresso` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_aluno` (`id_aluno`),
  KEY `id_turma` (`id_turma`),
  CONSTRAINT `tb_matricula_ibfk_5` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`id`),
  CONSTRAINT `tb_matricula_ibfk_6` FOREIGN KEY (`id_turma`) REFERENCES `tb_turma` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `tb_usuario` (`id`, `usuario`, `senha`) VALUES
(1,	'admin',	'admin');