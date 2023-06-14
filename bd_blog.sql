-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/06/2023 às 06:06
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
-- Banco de dados: `bd_blog`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `administracao`
--

CREATE TABLE `administracao` (
  `codigo_tabela` int(11) NOT NULL,
  `login` varchar(300) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Despejando dados para a tabela `administracao`
--

INSERT INTO `administracao` (`codigo_tabela`, `login`, `senha`) VALUES
(1, 'Girlane', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `post`
--

CREATE TABLE `post` (
  `post` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `categoria_post` varchar(200) NOT NULL,
  `data` varchar(50) NOT NULL,
  `titulo_post` varchar(350) NOT NULL,
  `descricao` varchar(600) NOT NULL,
  `imagem_autor` varchar(100) NOT NULL,
  `nome_autor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Despejando dados para a tabela `post`
--

INSERT INTO `post` (`post`, `imagem`, `categoria_post`, `data`, `titulo_post`, `descricao`, `imagem_autor`, `nome_autor`) VALUES
(1, 'cachorro.png', 'Cultura', '2023-06-13', 'Haverão coisa de acontecer que nao estão mais ai com você?', 'Tudo isso pode ser voltado contra voce pq isso é perigoso', 'perfilcachorro.png', 'cachorro'),
(2, 'tenis.jpg', 'Esportes', '2023-06-13', 'Tenista ganhando um trofeu', 'Muito legal essa imagem ', 'niva.png', 'Nivaldo'),
(8, 'futebol.jpg', 'Esportes', '2023-06-13', 'Será que o Brasil ganha desta vez??', 'ffffffffffffffff', 'gih.png', 'Gika'),
(22, 'download.jfif', '            Teologia', '2023-06-13', '            O que é TEOLOGIA? ', '            é estudo da fé e das religiões. O prefixo “teo”, em grego, significa “Deus”, e esta ciência humana analisa como as crenças influenciam culturas e sociedades, sob pontos de vistas e contextos históricos.', 'gir.png', 'Girlane');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `administracao`
--
ALTER TABLE `administracao`
  ADD PRIMARY KEY (`codigo_tabela`);

--
-- Índices de tabela `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administracao`
--
ALTER TABLE `administracao`
  MODIFY `codigo_tabela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `post`
--
ALTER TABLE `post`
  MODIFY `post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
