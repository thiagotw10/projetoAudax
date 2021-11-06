-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Nov-2021 às 06:36
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetoaudax`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_usuario`
--

CREATE TABLE `login_usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nivel` varchar(30) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login_usuario`
--

INSERT INTO `login_usuario` (`id`, `usuario`, `senha`, `nivel`, `nome`) VALUES
(5, 'audax@audax.com', 'admin', 'administrador', 'audax'),
(31, 'matheus@matheus.com', '123', 'aprovador', 'matheus'),
(32, 'rafael@rafael.com', '123', 'aprovador', 'rafael'),
(33, 'joao@joao.com', '123', 'aprovador', 'joao'),
(40, 'marcos@marcos.com', '123', 'aprovador', 'marcos'),
(41, 'pedro@pedro.com', '123', 'solicitador', 'pedro'),
(42, 'valdenio@valdenio.com', '123', 'solicitador', 'valdenio'),
(43, 'edivania@edivania.com', '123', 'solicitador', 'edivania');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materiais`
--

CREATE TABLE `materiais` (
  `id` int(11) NOT NULL,
  `nome_material` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `materiais`
--

INSERT INTO `materiais` (`id`, `nome_material`) VALUES
(1, 'vassoura'),
(2, 'rodo'),
(3, 'palha de aço'),
(5, 'roupa de banho'),
(6, 'martelo'),
(7, 'mesa'),
(8, 'torneira'),
(9, 'guarda roupa'),
(10, 'cama'),
(11, 'chinelo'),
(12, 'madeira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacoes`
--

CREATE TABLE `solicitacoes` (
  `id` int(11) NOT NULL,
  `solicitador` varchar(30) NOT NULL,
  `status_solicitacao` varchar(30) DEFAULT 'Aguardando aprovação',
  `data_atual` date DEFAULT NULL,
  `materiais` varchar(30) NOT NULL,
  `observacao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `solicitacoes`
--

INSERT INTO `solicitacoes` (`id`, `solicitador`, `status_solicitacao`, `data_atual`, `materiais`, `observacao`) VALUES
(11, 'pedro', 'reprovado', '2021-11-06', 'madeira', 'infelizmente, vai ser reprovado');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `login_usuario`
--
ALTER TABLE `login_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `materiais`
--
ALTER TABLE `materiais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `login_usuario`
--
ALTER TABLE `login_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `materiais`
--
ALTER TABLE `materiais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
