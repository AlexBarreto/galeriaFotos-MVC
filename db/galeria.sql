-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Dez-2021 às 18:37
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `galeria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id`, `nome`) VALUES
(143, 'f62ab4f95cfdd7756623106ae851fc57.jpg'),
(144, '23ac685565ea11667238feb18c850e38.jpg'),
(145, '2ca3f47f6aabe68a1d5e89cb4421a985.jpg'),
(146, '6324ee97a1894523e096de23c51eee19.jpg'),
(147, 'abea659fb9d1e5d741b6f94c70d03fa9.jpg'),
(148, '6fee521ed51e6147e853806816b98763.jpg'),
(149, '9f3f3c6363b278320cab611399ca70f0.jpg'),
(150, 'a71f921c01d918a33897a220f4127180.jpg'),
(151, 'd1d3880cfdd4baa033b443a3a46c6440.jpg'),
(152, '3398c32f6eefe73eb560d774a6c5e0f8.jpg'),
(153, '3a9d68ee60dcd519fffbcf04dc317b40.jpg'),
(154, '93dc1ed3f6b02c00a9a11e6d70160007.jpg'),
(155, '3ae7e99aed352a690f53782591379a67.jpg'),
(156, '74c93d63f62961a271ffcbabfb5eabbe.jpg'),
(157, '8a0f2f86ca685e7d36485e35f40ab8d8.jpg'),
(158, 'a741e114d2a2681e381f6ac1ca0149aa.jpg'),
(159, '900e776f63b1a81302a1814c87db170f.jpg'),
(160, 'cbfc7a857a8815fc57af7259ea3cd66e.jpg'),
(161, '7d692c24d1019f818a85ada280f0064e.jpg'),
(162, '3eddd1b04cb8be9750d22b17d1720c32.jpg'),
(163, 'db41a87e4792a20d08233cfb9b9a0173.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `id_imagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `info`
--

INSERT INTO `info` (`id`, `descricao`, `id_imagem`) VALUES
(102, 'none', 143),
(103, 'primeira imagem', 144),
(104, 'outra foto', 145),
(105, 'terceira foto', 146),
(106, 'mfioashdfahdsfas', 147),
(107, 'descricao de uma foto qualquer', 148),
(108, 'descricao de uma foto qualquer', 149),
(109, 'descricao de uma foto qualquer', 150),
(110, 'descricao de uma foto qualquer', 151),
(111, 'descricao de uma foto qualquer', 152),
(112, 'Descricao de uma foto qualquer outra', 153),
(113, 'Descricao de uma foto qualquer outra', 154),
(114, 'Descricao de uma foto qualquer outra', 155),
(115, 'Descricao de uma foto qualquer outra', 156),
(116, 'Descricao de uma foto qualquer outra', 157),
(117, 'Descricao de uma foto qualquer outra', 158),
(118, 'Descricao de uma foto qualquer outra', 159),
(119, 'dsadasdasda', 160),
(120, 'dasdasd', 161),
(121, 'dasdasd', 162),
(122, 'dasdasdasd', 163);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT de tabela `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
