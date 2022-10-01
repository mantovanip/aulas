-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Jan-2022 às 15:13
-- Versão do servidor: 8.0.27
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `senhas`
--

DROP TABLE IF EXISTS `senhas`;
CREATE TABLE IF NOT EXISTS `senhas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_senha` varchar(44) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sits_senha_id` int NOT NULL,
  `tipos_senha_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `senhas`
--

INSERT INTO `senhas` (`id`, `nome_senha`, `sits_senha_id`, `tipos_senha_id`) VALUES
(1, 'A1', 2, 1),
(2, 'A2', 2, 1),
(3, 'A3', 2, 1),
(4, 'A4', 2, 1),
(5, 'A5', 2, 1),
(6, 'A6', 2, 1),
(7, 'A7', 2, 1),
(8, 'A8', 2, 1),
(9, 'A9', 2, 1),
(10, 'A10', 1, 1),
(11, 'A11', 1, 1),
(12, 'A12', 1, 1),
(13, 'A13', 1, 1),
(14, 'A14', 1, 1),
(15, 'A15', 1, 1),
(16, 'A16', 1, 1),
(17, 'A17', 1, 1),
(18, 'A18', 1, 1),
(19, 'A19', 1, 1),
(20, 'A20', 1, 1),
(21, 'M1', 2, 2),
(22, 'M2', 2, 2),
(23, 'M3', 2, 2),
(24, 'M4', 2, 2),
(25, 'M5', 2, 2),
(26, 'M6', 2, 2),
(27, 'M7', 2, 2),
(28, 'M8', 2, 2),
(29, 'M9', 2, 2),
(30, 'M10', 2, 2),
(31, 'M11', 1, 2),
(32, 'M12', 1, 2),
(33, 'M13', 1, 2),
(34, 'M14', 1, 2),
(35, 'M15', 1, 2),
(36, 'M16', 1, 2),
(37, 'M17', 1, 2),
(38, 'M18', 1, 2),
(39, 'M19', 1, 2),
(40, 'M20', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `senhas_geradas`
--

DROP TABLE IF EXISTS `senhas_geradas`;
CREATE TABLE IF NOT EXISTS `senhas_geradas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `senha_id` int NOT NULL,
  `sits_senha_id` int NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `senhas_geradas`
--

INSERT INTO `senhas_geradas` (`id`, `senha_id`, `sits_senha_id`, `created`, `modified`) VALUES
(1, 1, 4, '2022-01-23 12:15:49', '2022-01-30 11:55:18'),
(2, 21, 4, '2022-01-23 12:16:30', '2022-01-30 11:54:41'),
(3, 22, 4, '2022-01-23 12:16:33', '2022-01-30 12:05:18'),
(4, 2, 4, '2022-01-23 12:16:36', '2022-01-30 11:55:32'),
(5, 3, 4, '2022-01-30 11:05:38', '2022-01-30 12:03:17'),
(6, 23, 4, '2022-01-30 11:05:41', '2022-01-30 12:05:27'),
(7, 24, 4, '2022-01-30 11:05:43', '2022-01-30 12:09:19'),
(8, 25, 4, '2022-01-30 12:09:28', '2022-01-30 12:09:42'),
(9, 4, 4, '2022-01-30 12:09:29', '2022-01-30 12:10:07'),
(10, 5, 4, '2022-01-30 12:09:29', '2022-01-30 12:10:09'),
(11, 6, 4, '2022-01-30 12:09:30', '2022-01-30 12:10:11'),
(12, 26, 4, '2022-01-30 12:09:30', '2022-01-30 12:09:51'),
(13, 27, 4, '2022-01-30 12:09:30', '2022-01-30 12:10:02'),
(14, 7, 4, '2022-01-30 12:09:31', '2022-01-30 12:10:13'),
(15, 28, 2, '2022-01-30 12:09:31', NULL),
(16, 8, 4, '2022-01-30 12:09:32', '2022-01-30 12:10:19'),
(17, 29, 2, '2022-01-30 12:09:32', NULL),
(18, 9, 4, '2022-01-30 12:09:33', '2022-01-30 12:10:27'),
(19, 30, 4, '2022-01-30 12:09:33', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sits_senhas`
--

DROP TABLE IF EXISTS `sits_senhas`;
CREATE TABLE IF NOT EXISTS `sits_senhas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sits_senhas`
--

INSERT INTO `sits_senhas` (`id`, `nome`) VALUES
(1, 'Livre'),
(2, 'Emitida'),
(3, 'Chamada'),
(4, 'Atendida'),
(5, 'Cancelada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_senhas`
--

DROP TABLE IF EXISTS `tipos_senhas`;
CREATE TABLE IF NOT EXISTS `tipos_senhas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipos_senhas`
--

INSERT INTO `tipos_senhas` (`id`, `nome`) VALUES
(1, 'Senha Convencional'),
(2, 'Senha Preferencial');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
