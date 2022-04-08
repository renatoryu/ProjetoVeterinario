-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 31-Maio-2020 às 16:34
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `vet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE IF NOT EXISTS `perfil` (
  `nome_perfil` varchar(100) NOT NULL,
  `sobrenome_perfil` varchar(100) NOT NULL,
  `sexo_perfil` varchar(20) NOT NULL,
  `cpf_perfil` bigint(11) NOT NULL,
  `email_perfil` varchar(40) NOT NULL,
  `tel_perfil` bigint(30) NOT NULL,
  `cidade_perfil` varchar(40) NOT NULL,
  `estado_perfil` varchar(40) NOT NULL,
  PRIMARY KEY (`cpf_perfil`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`nome_perfil`, `sobrenome_perfil`, `sexo_perfil`, `cpf_perfil`, `email_perfil`, `tel_perfil`, `cidade_perfil`, `estado_perfil`) VALUES
('Renato', 'Cruz', 'masculino', 49561659489, 'renatoryuu@hotmail.com', 11940028922, 'São Paulo', 'MG'),
('Cláudia', 'Ferreira', 'feminino', 49119616489, 'claudia123@hotmail.com', 11949710348, 'Vitória da Conquista', 'BA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet`
--

DROP TABLE IF EXISTS `pet`;
CREATE TABLE IF NOT EXISTS `pet` (
  `cod_pet` int(11) NOT NULL AUTO_INCREMENT,
  `nome_pet` varchar(30) NOT NULL,
  `tipo_pet` varchar(30) NOT NULL,
  `sexo_pet` varchar(30) NOT NULL,
  `idade_pet` smallint(2) NOT NULL,
  `raca_pet` varchar(30) NOT NULL,
  `porte_pet` varchar(30) NOT NULL,
  `cast_pet` varchar(3) NOT NULL,
  `dono_pet` varchar(100) NOT NULL,
  PRIMARY KEY (`cod_pet`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `pet`
--

INSERT INTO `pet` (`cod_pet`, `nome_pet`, `tipo_pet`, `sexo_pet`, `idade_pet`, `raca_pet`, `porte_pet`, `cast_pet`, `dono_pet`) VALUES
(1, 'Mio', 'Gato', 'masculino', 5, 'Siamês', 'Pequeno', 'Sim', 'Renato Caetité Cruz');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
