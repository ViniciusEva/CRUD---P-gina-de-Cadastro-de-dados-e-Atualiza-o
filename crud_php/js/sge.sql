-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/05/2025 às 14:02
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sge`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `login_sge`
--

CREATE TABLE `login_sge` (
  `id_login_sge` int(150) NOT NULL,
  `login_sge` varchar(150) NOT NULL,
  `password_sge` varchar(150) NOT NULL,
  `profile_sge` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `login_sge`
--

INSERT INTO `login_sge` (`id_login_sge`, `login_sge`, `password_sge`, `profile_sge`) VALUES
(1, 'admin', '123', 'admin'),
(2, 'Leandro', '456', 'cliente');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sge_alunos`
--

CREATE TABLE `sge_alunos` (
  `id_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(200) NOT NULL,
  `email_aluno` varchar(150) NOT NULL,
  `celular_aluno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `sge_alunos`
--

INSERT INTO `sge_alunos` (`id_aluno`, `nome_aluno`, `email_aluno`, `celular_aluno`) VALUES
(3, 'vvvv', 'vvvv', 'vvvv'),
(4, '22 aasdas', '22@@@asdadas', '225555'),
(10, '1', '1@email.com', '(11) 99999 - 9999'),
(11, 'Vinicius', 'teste@email.com', '(11) 99999 - 9998'),
(12, 'v', '3@f', '33');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `login_sge`
--
ALTER TABLE `login_sge`
  ADD PRIMARY KEY (`id_login_sge`);

--
-- Índices de tabela `sge_alunos`
--
ALTER TABLE `sge_alunos`
  ADD PRIMARY KEY (`id_aluno`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `login_sge`
--
ALTER TABLE `login_sge`
  MODIFY `id_login_sge` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `sge_alunos`
--
ALTER TABLE `sge_alunos`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
