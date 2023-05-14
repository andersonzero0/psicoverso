-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 14/05/2023 às 14:15
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `psicoverso_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `calls`
--

CREATE TABLE `calls` (
  `id` int(11) NOT NULL,
  `id_creatorFK` int(11) NOT NULL,
  `id_recieverFK` int(11) DEFAULT NULL,
  `dateCreation` datetime DEFAULT NULL,
  `call_status` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `calls`
--

INSERT INTO `calls` (`id`, `id_creatorFK`, `id_recieverFK`, `dateCreation`, `call_status`) VALUES
(43, 1, 4, '2023-05-13 22:05:30', 'on'),
(44, 4, 1, '2023-05-14 08:59:32', 'on');

-- --------------------------------------------------------

--
-- Estrutura para tabela `call_links`
--

CREATE TABLE `call_links` (
  `id` int(11) NOT NULL,
  `id_call` int(11) DEFAULT NULL,
  `call_link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `call_links`
--

INSERT INTO `call_links` (`id`, `id_call`, `call_link`) VALUES
(1, 43, 'ola'),
(2, 44, 'meet');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users_tb`
--

CREATE TABLE `users_tb` (
  `id` int(11) NOT NULL,
  `nome` varchar(24) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `senha` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `users_tb`
--

INSERT INTO `users_tb` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Manoel Gomes', 'manoel@bluepen.com', 'canetaazul'),
(2, 'Ednaldo Pereira', 'ednaldo@mestre.com', 'mestre'),
(3, 'armandao', 'armando@gmail.com', '123'),
(4, 'pedro', 'pg@gmail.com', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `calls`
--
ALTER TABLE `calls`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `call_links`
--
ALTER TABLE `call_links`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users_tb`
--
ALTER TABLE `users_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `calls`
--
ALTER TABLE `calls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `call_links`
--
ALTER TABLE `call_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users_tb`
--
ALTER TABLE `users_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
