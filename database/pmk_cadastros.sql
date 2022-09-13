-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.8-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para pmk_cadastros
CREATE DATABASE IF NOT EXISTS `pmk_cadastros` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `pmk_cadastros`;

-- Copiando estrutura para tabela pmk_cadastros.doadores
CREATE TABLE IF NOT EXISTS `doadores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL DEFAULT '0',
  `cpf` varchar(14) NOT NULL,
  `email` varchar(80) NOT NULL DEFAULT '0',
  `telefone` varchar(20) NOT NULL DEFAULT '0',
  `data_nasc` varchar(15) NOT NULL DEFAULT '0',
  `data_cadastro` varchar(15) NOT NULL DEFAULT '0',
  `intervalo_doacao` int(1) NOT NULL DEFAULT 0 COMMENT '1=Único, 2=Bimestral, 3=Semestral, 4=Anual',
  `valor_doacao` float NOT NULL DEFAULT 0,
  `forma_pagamento` int(1) NOT NULL DEFAULT 0 COMMENT '1=Débito, 2=Crédito',
  `agencia` int(6) DEFAULT 0,
  `conta` int(8) DEFAULT 0,
  `bandeira` varchar(20) DEFAULT NULL,
  `cartao` varchar(16) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela pmk_cadastros.doadores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `doadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `doadores` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
