-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 21-Out-2017 às 02:54
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ares2.0`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargoservidor`
--

DROP TABLE IF EXISTS `cargoservidor`;
CREATE TABLE IF NOT EXISTS `cargoservidor` (
  `codCargo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomeCargo` varchar(255) DEFAULT NULL,
  `nivelCargo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codCargo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `elemento`
--

DROP TABLE IF EXISTS `elemento`;
CREATE TABLE IF NOT EXISTS `elemento` (
  `codElemento` int(10) UNSIGNED NOT NULL,
  `nomeElemento` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codElemento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

DROP TABLE IF EXISTS `itens`;
CREATE TABLE IF NOT EXISTS `itens` (
  `codItemq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subElemento_codSubElemento` int(10) UNSIGNED NOT NULL,
  `nomeItem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codItemq`),
  KEY `itens_FKIndex1` (`subElemento_codSubElemento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretaria`
--

DROP TABLE IF EXISTS `secretaria`;
CREATE TABLE IF NOT EXISTS `secretaria` (
  `codSecretaria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ordenadorSecretaria` int(10) UNSIGNED NOT NULL,
  `gestorSecretaria` int(10) UNSIGNED NOT NULL,
  `nomeSecretaira` varchar(255) DEFAULT NULL,
  `siglaSecretaria` varchar(255) DEFAULT NULL,
  `CNPJSecretaria` int(10) UNSIGNED DEFAULT NULL,
  `enderecoSecretaria` varchar(255) DEFAULT NULL,
  `telefoneSecretaria` varchar(255) DEFAULT NULL,
  `emailSecretaria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codSecretaria`),
  KEY `secretaria_FKIndex1` (`ordenadorSecretaria`),
  KEY `secretaria_FKIndex2` (`gestorSecretaria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servidores`
--

DROP TABLE IF EXISTS `servidores`;
CREATE TABLE IF NOT EXISTS `servidores` (
  `codServidor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cargoServidor_codCargo` int(10) UNSIGNED NOT NULL,
  `nomeServidor` varchar(255) DEFAULT NULL,
  `CPFServidor` varchar(255) DEFAULT NULL,
  `telefoneServidor` varchar(255) DEFAULT NULL,
  `emailServidor` varchar(255) DEFAULT NULL,
  `cargo_id` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`codServidor`),
  KEY `servidores_FKIndex1` (`cargoServidor_codCargo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sol_despesa`
--

DROP TABLE IF EXISTS `sol_despesa`;
CREATE TABLE IF NOT EXISTS `sol_despesa` (
  `secretaria_codSecretaria` int(10) UNSIGNED NOT NULL,
  `numeroSolicitacao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subElemento_codSubElemento` int(10) UNSIGNED NOT NULL,
  `dataSolicitacao` date DEFAULT NULL,
  `registroPreco` int(40) DEFAULT NULL,
  `dotacaoOrcamentaria` varchar(255) DEFAULT NULL,
  `tipoDespesa` varchar(255) DEFAULT NULL,
  `objetoSolicitacao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`secretaria_codSecretaria`,`numeroSolicitacao`),
  KEY `sol_Despesa_FKIndex1` (`subElemento_codSubElemento`),
  KEY `sol_Despesa_FKIndex2` (`secretaria_codSecretaria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sol_despesa_itens`
--

DROP TABLE IF EXISTS `sol_despesa_itens`;
CREATE TABLE IF NOT EXISTS `sol_despesa_itens` (
  `numeroSolicitacao` int(10) UNSIGNED NOT NULL,
  `itens_codItemq` int(10) UNSIGNED NOT NULL,
  `sol_Despesa_secretaria_codSecretaria` int(10) UNSIGNED NOT NULL,
  `sol_Despesa_numeroSolicitacao` int(10) UNSIGNED NOT NULL,
  `unidadeMedida_codUnidadeMedida` int(10) UNSIGNED NOT NULL,
  `codItem` int(10) UNSIGNED DEFAULT NULL,
  `quantidadeItem` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`numeroSolicitacao`,`itens_codItemq`,`sol_Despesa_secretaria_codSecretaria`),
  KEY `sol_Despesa_itens_FKIndex1` (`unidadeMedida_codUnidadeMedida`),
  KEY `sol_Despesa_secretaria_codSecretaria` (`sol_Despesa_secretaria_codSecretaria`,`sol_Despesa_numeroSolicitacao`),
  KEY `itens_codItemq` (`itens_codItemq`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `subelemento`
--

DROP TABLE IF EXISTS `subelemento`;
CREATE TABLE IF NOT EXISTS `subelemento` (
  `codSubElemento` int(10) UNSIGNED NOT NULL,
  `elemento_codElemento` int(10) UNSIGNED NOT NULL,
  `nomeSubelemento` varchar(255) DEFAULT NULL,
  `descricaoSubElemento` tinytext,
  `elemento_cod` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`codSubElemento`),
  KEY `subElemento_FKIndex1` (`elemento_codElemento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidademedida`
--

DROP TABLE IF EXISTS `unidademedida`;
CREATE TABLE IF NOT EXISTS `unidademedida` (
  `codUnidadeMedida` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomeUnidaddeMedida` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codUnidadeMedida`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
