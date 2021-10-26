-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Out-2021 às 02:51
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_veiculos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `codigo` int(20) NOT NULL,
  `placa` varchar(20) NOT NULL,
  `combustivel` varchar(20) NOT NULL,
  `fabricante` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`codigo`, `placa`, `combustivel`, `fabricante`) VALUES
(1, 'BTB5020', 'S10', 'VOLVO'),
(2, 'BTB5126', 'S10', 'VOLVO'),
(3, 'BTB5122', 'S10', 'VOLVO'),
(4, 'BTB5027', 'S10', 'VOLVO');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `codigo` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
