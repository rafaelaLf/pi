-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Ago-2021 às 16:02
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `takecare`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_baba`
--

CREATE TABLE `cadastro_baba` (
  `id` int(11) NOT NULL,
  `nome` varchar(240) NOT NULL,
  `documento` varchar(240) NOT NULL,
  `apelido` varchar(240) NOT NULL,
  `idade` int(240) NOT NULL,
  `nascimento` date NOT NULL,
  `idadeFilho` int(20) NOT NULL,
  `atividade` varchar(240) NOT NULL,
  `dirigir` varchar(240) NOT NULL,
  `dormiBaba` varchar(240) NOT NULL,
  `semana` varchar(240) NOT NULL,
  `nomeMae` varchar(240) NOT NULL,
  `cep` varchar(240) NOT NULL,
  `cidade` varchar(240) NOT NULL,
  `endereco` varchar(240) NOT NULL,
  `bairro` varchar(240) NOT NULL,
  `numero` varchar(240) NOT NULL,
  `complemento` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `senha` varchar(240) NOT NULL,
  `link` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro_baba`
--

INSERT INTO `cadastro_baba` (`id`, `nome`, `documento`, `apelido`, `idade`, `nascimento`, `idadeFilho`, `atividade`, `dirigir`, `dormiBaba`, `semana`, `nomeMae`, `cep`, `cidade`, `endereco`, `bairro`, `numero`, `complemento`, `email`, `senha`, `link`) VALUES
(22, 'Rafaela', '2020', 'Rafa', 18, '2002-09-05', 5, 'ingles,matematica', 'sim', 'sim', 'dias da semana', 'meri', '89040006', 'blumenau', 'rua', 'velha', '5', 'casa', 'rafaela.lf@aluno.ifsc.edu.br', '827ccb0eea8a706c4c34a16891f84e7b', 'https://www.linkedin.com/'),
(23, 'Meri', '200', 'Meri', 26, '9445-01-05', 6, 'ingles', 'sim', 'sim', 'terca', 'maria', '898989', 'Blumenau', 'rua', 'rua', 'rua', 'rua', 'meri@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'https://www.linkedin.com/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_responsavel`
--

CREATE TABLE `cadastro_responsavel` (
  `id` int(11) NOT NULL,
  `nome` varchar(240) NOT NULL,
  `documento` varchar(240) NOT NULL,
  `apelido` varchar(30) NOT NULL,
  `idade` varchar(240) NOT NULL,
  `nascimento` date NOT NULL,
  `idadeFilho` int(10) NOT NULL,
  `atividade` varchar(240) NOT NULL,
  `dirigir` varchar(240) NOT NULL,
  `dormiPais` varchar(240) NOT NULL,
  `semana` varchar(240) NOT NULL,
  `nomeMae` varchar(240) NOT NULL,
  `cep` varchar(240) NOT NULL,
  `cidade` varchar(240) NOT NULL,
  `endereco` varchar(240) NOT NULL,
  `bairro` varchar(240) NOT NULL,
  `numero` varchar(240) NOT NULL,
  `complemento` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `link` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro_responsavel`
--

INSERT INTO `cadastro_responsavel` (`id`, `nome`, `documento`, `apelido`, `idade`, `nascimento`, `idadeFilho`, `atividade`, `dirigir`, `dormiPais`, `semana`, `nomeMae`, `cep`, `cidade`, `endereco`, `bairro`, `numero`, `complemento`, `email`, `senha`, `link`) VALUES
(25, 'Ester', '2021', 'Rafinha', '18', '2002-09-05', 3, 'ingles', 'sim', 'sim', 'final de semana', 'Maria', '89040006', 'Blumenau', 'rua', 'velha', '6', 'casa', 'rafa@gmail.com', '202cb962ac59075b964b', 'https://www.linkedin.com/'),
(26, 'Danielly', '300', 'Dani', '26', '0000-00-00', 2, 'mate', 'sim', 'sim', 'sexta', 'Maria Helena', '8987', 'Blumenau', 'rua', 'velha', 'rua', 'rua', 'dani@gmail.com', 'c4ca4238a0b923820dcc', 'https://www.linkedin.com/');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro_baba`
--
ALTER TABLE `cadastro_baba`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cadastro_responsavel`
--
ALTER TABLE `cadastro_responsavel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_baba`
--
ALTER TABLE `cadastro_baba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `cadastro_responsavel`
--
ALTER TABLE `cadastro_responsavel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
