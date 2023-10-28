-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Set-2023 às 18:10
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escolaedu`
--
create DATABASE `escolaedu`;
use `escolaedu`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `Cod_aluno` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `dt_nasc` varchar(10) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `Cod_respon` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`Cod_aluno`, `nome`, `endereco`, `dt_nasc`, `cpf`, `rg`, `Cod_respon`) VALUES
(11, 'Silva dos Santos Moreira', 'Rua Céu Rosado, 987', '02/08/2018', '445.983.127-20', '12.431.762-9', 1),
(12, 'Laila da Rocha', 'Rua Azul do Mar Areia, 020', '12/10/2017', '349.167.258-02', '15.946.378-1', 2),
(13, 'Alexa Evena', 'Rua Estrada de iporã', '2008/11/12', '123.456.789-12', '13.123.353-9', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `Cod_disciplina` int(11) NOT NULL,
  `tipo_disciplina` varchar(50) NOT NULL,
  `sigla_disciplina` varchar(5) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`Cod_disciplina`, `tipo_disciplina`, `sigla_disciplina`, `descricao`) VALUES
(20, 'Língua Portuguesa', 'LP', 'A Língua Portuguesa se aprende a comunicação oral e o sistema de escrita alfabética.'),
(21, 'Matemática', 'MAT', 'A Matemática ensina a importância dos números e dos cálculos que ajudaram durante o cotidiano.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `leciona`
--

CREATE TABLE `leciona` (
  `Cod_leciona` int(11) NOT NULL,
  `Cod_professor` int(11) NOT NULL,
  `Cod_disciplina` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `leciona`
--

INSERT INTO `leciona` (`Cod_leciona`, `Cod_professor`, `Cod_disciplina`) VALUES
(2001, 31, 20),
(2002, 30, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `Cod_matricula` int(11) NOT NULL,
  `DataMatricula` varchar(10) NOT NULL,
  `Cod_aluno` int(11) NOT NULL,
  `Cod_turma` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `matricula`
--

INSERT INTO `matricula` (`Cod_matricula`, `DataMatricula`, `Cod_aluno`, `Cod_turma`) VALUES
(100, '10/02/2023', 11, 20),
(101, '10/02/2022', 12, 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `Cod_professor` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `dt_nasc` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`Cod_professor`, `nome`, `telefone`, `endereco`, `cpf`, `rg`, `dt_nasc`) VALUES
(30, 'Rosa Carvalho', '(11)41725-3968', 'Rua Pedras dos Sonhos, 132', '148.367.259-12', '16.324.587-0', '13/05/1987'),
(31, 'Rafael Goumes', '(11)48530-1236', 'Rua Águas Geladas do Mar, 84', '227.154.789-11', '66.012.354-9', '28/12/1986');

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `Cod_respon` int(11) NOT NULL,
  `tipo_respon` varchar(50) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`Cod_respon`, `tipo_respon`, `telefone`, `endereco`, `cpf`, `rg`, `nome`) VALUES
(1, 'Pai', '(11)12345-6789', 'Rua Céu Rosado, 987', '987.654.321-02', '20.123.456-7', 'José Almeida da Rocha Souares'),
(2, 'Mãe', '(11)21354-6978', 'Rua Azul do Mar Areia, 020', '456.131.897-30', '03.798.131-6', 'Lesyi Souza Madeira Carvalho');

-- --------------------------------------------------------

--
-- Estrutura da tabela `retem`
--

CREATE TABLE `retem` (
  `Cod_retem` int(11) NOT NULL,
  `Cod_turma` int(11) NOT NULL,
  `Cod_disciplina` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `retem`
--

INSERT INTO `retem` (`Cod_retem`, `Cod_turma`, `Cod_disciplina`) VALUES
(50, 101, 20),
(51, 100, 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblprof`
--

CREATE TABLE `tblprof` (
  `Nome` varchar(20) NOT NULL,
  `Senha` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblprof`
--

INSERT INTO `tblprof` (`Nome`, `Senha`) VALUES
('Rosa', 123),
('Rafael Goumes', 321);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblrespon`
--

CREATE TABLE `tblrespon` (
  `Nome` varchar(20) NOT NULL,
  `Cpf` varchar(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblrespon`
--

INSERT INTO `tblrespon` (`Nome`, `Cpf`) VALUES
('José Souares', '987.654.321-02'),
('Lesyi Souza', '456.131.897-30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblusuario`
--

CREATE TABLE `tblusuario` (
  `Usuario` varchar(50) NOT NULL,
  `Senha` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblusuario`
--

INSERT INTO `tblusuario` (`Usuario`, `Senha`) VALUES
('A', '123'),
('B', '456'),
('C', 'CCC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `Cod_turma` int(11) NOT NULL,
  `num_sala` int(11) NOT NULL,
  `qtde_alunos` int(11) NOT NULL,
  `turno` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`Cod_turma`, `num_sala`, `qtde_alunos`, `turno`) VALUES
(100, 1, 20, 'Vespertino'),
(101, 2, 20, 'Vespertino');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`Cod_aluno`);

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`Cod_disciplina`);

--
-- Índices para tabela `leciona`
--
ALTER TABLE `leciona`
  ADD PRIMARY KEY (`Cod_leciona`);

--
-- Índices para tabela `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`Cod_matricula`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`Cod_professor`);

--
-- Índices para tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`Cod_respon`);

--
-- Índices para tabela `retem`
--
ALTER TABLE `retem`
  ADD PRIMARY KEY (`Cod_retem`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`Cod_turma`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `Cod_respon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
