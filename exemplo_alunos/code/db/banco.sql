
DROP DATABASE IF EXISTS `db_exemplo_alunos`;
CREATE DATABASE `db_exemplo_alunos` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `db_exemplo_alunos`;

DROP TABLE IF EXISTS `tb_aluno`;
CREATE TABLE `tb_aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `data_nascimento` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tb_aluno` (`id`, `nome`, `endereco`, `telefone`, `data_nascimento`) VALUES
(1,	'Mayko',	'Rua Jose',	'062914253685',	'1995-05-20'),
(2,	'Diouzef',	'Rua Pereira',	'062925634197',	'1995-05-19'),
(3,	'Mairon Marques Dos Santos',	'Rod GO 154, Zona Rural',	'993155510',	'2023-05-17'),
(4,	'Mairon Marques ',	'Rod GO 154, Zona Rural',	'993155510',	'2023-05-30');

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
(1,	'Sistemas de Informação',	'Faz tudo',	2451,	'2024-12-01',	'2024-12-30'),
(2,	'Biologia',	'Mexe com plantas',	324,	'2024-01-04',	'2024-12-28'),
(3,	'Mairon Marques Dos Santos',	'Relatório mensal de atendimentos',	456,	'2023-05-09',	'2023-06-02');

DROP TABLE IF EXISTS `tb_turma`;
CREATE TABLE `tb_turma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `id_curso` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_curso` (`id_curso`),
  CONSTRAINT `tb_turma_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `tb_curso` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tb_turma` (`id`, `nome`, `id_curso`) VALUES
(1,	'Web II',	1),
(2,	'Web II',	1),
(3,	'IA',	1),
(4,	'Redes',	1);

DROP TABLE IF EXISTS `tb_matricula`;
CREATE TABLE `tb_matricula` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL,
  `data_matricula` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_aluno` (`id_aluno`),
  KEY `id_turma` (`id_turma`),
  CONSTRAINT `tb_matricula_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `tb_aluno` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_matricula_ibfk_2` FOREIGN KEY (`id_turma`) REFERENCES `tb_turma` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tb_matricula` (`id`, `id_aluno`, `id_turma`, `data_matricula`) VALUES
(1,	3,	3,	'2023-05-17');

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `tb_usuario` (`id`, `nome`, `senha`) VALUES
(1,	'mayko',	'12345');