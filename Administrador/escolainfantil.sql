-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Nov-2023 às 15:29
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escolainfantil`
--
CREATE DATABASE `escolainfantil`;
USE `escolainfantil`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `Id_aluno` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `RG` varchar(13) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `DataNasc` date NOT NULL,
  `Sexo` char(1) NOT NULL,
  `arquivo` varchar(50) NOT NULL,
  `Id_responsavel` int(11) NOT NULL,
  `Id_turma` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`Id_aluno`, `Nome`, `RG`, `CPF`, `DataNasc`, `Sexo`, `arquivo`, `Id_responsavel`, `Id_turma`) VALUES
(1, '', '', '', '0000-00-00', '', '', 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `Id` int(11) NOT NULL,
  `InteracaoColegas` varchar(130) NOT NULL,
  `InteracaoProfessores` varchar(130) NOT NULL,
  `ParticipacaoAula` varchar(100) NOT NULL,
  `Comunicacao` varchar(100) NOT NULL,
  `RealizacaoAtividades` varchar(100) NOT NULL,
  `DesenvolvimentoHabilidades` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `coordenador`
--

CREATE TABLE `coordenador` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `Telefone` varchar(10) NOT NULL,
  `Id_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `ID` int(11) NOT NULL,
  `serie` varchar(25) NOT NULL,
  `extra` int(25) NOT NULL,
  `aula` int(25) NOT NULL,
  `Id_turma` int(11) NOT NULL,
  `Id_aluno` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `Id_professor` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `RG` varchar(12) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `DataNasc` varchar(10) NOT NULL,
  `Telefone` varchar(10) NOT NULL,
  `Celular` varchar(15) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `CEP` varchar(9) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Id_turma` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `Id_responsavel` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `RG` varchar(12) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `DataNasc` varchar(10) NOT NULL,
  `Telefone` varchar(10) NOT NULL,
  `Celular` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CEP` varchar(9) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `residencia` varchar(50) NOT NULL,
  `Id_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`Id_responsavel`, `Nome`, `RG`, `CPF`, `DataNasc`, `Telefone`, `Celular`, `email`, `CEP`, `Endereco`, `residencia`, `Id_usuario`) VALUES
(2, 'José Almeida da Rocha Souares', '20.123.456-7', '987.654.321-02', '1979-01-09', '2346-9876', '(11)98765-4321', 'teste@gmail.com', '64005-210', 'Rua Azul do Mar Areia, 020', '', 101);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `Id_turma` int(11) NOT NULL,
  `Serie` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `Id_usuario` int(11) NOT NULL,
  `NomeUsuario` varchar(100) NOT NULL,
  `Senha` varchar(10) NOT NULL,
  `Perfil` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`Id_aluno`);

--
-- Índices para tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `coordenador`
--
ALTER TABLE `coordenador`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`Id_professor`);

--
-- Índices para tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`Id_responsavel`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`Id_turma`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
