-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/11/2024 às 21:09
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `street_loja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `sobrenome`, `email`, `senha`) VALUES
(6, 'Samuel', 'de Lima Ribeiro Brito', 'samuel05.samuca@gmail.com', '$2y$10$4Gg6l5M4jfN1wzQHcZgZqOTjXFgChrwMoyH3CTVncXLWyMswAwdIm'),
(7, 'Samuel', 'de Lima Ribeiro Brito', 'samuel05.dominic@gmail.com', '$2y$10$GiBu5FNEI/V0TbYdpuEZ/eQJMWJRdNLZ8BaMvQiww9ckp4cuuhJy.'),
(8, 'Adao', 'Martins', 'adaomartins@gmail.com', '$2y$10$EdtHnHI3TjAAahzjtadOTO0g5V5FtnWdCF42hls2DX4thPdfXF.aq'),
(9, 'Hélio', 'Wesley', 'helio7wesley@gmail.com', '$2y$10$u88AkjnM/Agg/WHYpTCA/.Nne9KxNpS9L7.jzztGdZMDjXabvm7om');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco` varchar(250) NOT NULL,
  `estoque` varchar(250) NOT NULL,
  `tamanho` varchar(255) NOT NULL,
  `Cor` varchar(255) NOT NULL,
  `Imagem_link_1` varchar(255) NOT NULL,
  `Imagem_link_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `categoria`, `nome_produto`, `descricao`, `preco`, `estoque`, `tamanho`, `Cor`, `Imagem_link_1`, `Imagem_link_2`) VALUES
(3, 'blusa', 'CAMISETA STREET JIAOLONG ', 'CAMISA OVERSIZED, PRETO, G', '99', '5', 'G', '#000000', '../uploads/CAMISETA STREET JIAOLONG _20241104_005218/1 PRETO.png', '../uploads/CAMISETA STREET JIAOLONG _20241104_005218/2 PRETO.png'),
(4, 'acessorio', 'BOLSA DE OMBRO MULTIFUNCIONAL STREET', 'BOLSA, PRETA', '44,95', '5', 'tamanho unico', '#000000', '../uploads/BOLSA DE OMBRO MULTIFUNCIONAL STREET_20241104_005723/1.png', '../uploads/BOLSA DE OMBRO MULTIFUNCIONAL STREET_20241104_005723/1.png'),
(5, 'calca', 'CALÇA CARGO DE MOLETOM PRETA', 'CALÇA CARGO, PRETA', '139,90', '5', 'G', '#000000', '../uploads/CALÇA CARGO DE MOLETOM PRETA_20241104_010148/1 (2).png', '../uploads/CALÇA CARGO DE MOLETOM PRETA_20241104_010148/1 (1).png'),
(6, 'blusa', 'CAMISETA STREET LIBERTY', 'CAMISETA OVERDIZED, BRANCA, LIBERTY', '99,89', '5', 'G', '#000000', '../uploads/CAMISETA STREET LIBERTY_20241104_010612/1 BRANCO.png', '../uploads/CAMISETA STREET LIBERTY_20241104_010612/2 BRANCO.png'),
(7, 'blusa', 'CAMISETA STREET MEDUSA', 'OVERSIZED, MEDUSA', '69,93', '5', 'G', '#000000', '../uploads/CAMISETA STREET MEDUSA_20241104_010815/PRETO 2.png', '../uploads/CAMISETA STREET MEDUSA_20241104_010815/PRETO 1.png'),
(8, 'calca', 'CALÇA CARGO DE SARJA', 'CALÇA ESTILO BALÃO', '149,90', '5', 'G', '#000000', '../uploads/CALÇA CARGO DE SARJA_20241104_010836/3.png', '../uploads/CALÇA CARGO DE SARJA_20241104_010836/1.png'),
(9, 'blusa', 'CAMISETA STREET MERCH SOLID BRUNO MARS', 'CAMISETA GOLA BAIXA, PRETA', '99,89', '5', 'M', '#000000', '../uploads/CAMISETA STREET MERCH SOLID BRUNO MARS_20241104_011049/PRETO 2.png', '../uploads/CAMISETA STREET MERCH SOLID BRUNO MARS_20241104_011049/PRETO 3.png'),
(10, 'calca', 'CALÇA CARGO JEANS CLARO', 'CALÇA JEANS ESTILO BALÃO ', '169,90', '5', 'G', '#000000', '../uploads/CALÇA CARGO JEANS CLARO_20241104_011058/2.png', '../uploads/CALÇA CARGO JEANS CLARO_20241104_011058/3.png'),
(11, 'calca', 'CALÇA CARGO SARJA BLACK&WHITE', 'CALÇA ESTILO BALÃO', '169,90', '5', 'G', '#000000', '../uploads/CALÇA CARGO SARJA BLACK&WHITE_20241104_011327/1.png', '../uploads/CALÇA CARGO SARJA BLACK&WHITE_20241104_011327/1.png'),
(12, 'calca', 'CALÇA MOLETOM ', 'CALÇA MOLETOM ESTILO BALÃO', '79,90', '5', 'G', '#000000', '../uploads/CALÇA MOLETOM _20241104_011422/1 (2).png', '../uploads/CALÇA MOLETOM _20241104_011422/1 (4).png'),
(13, 'blusa', 'CAMISETA STREET SUNFLOWER', 'OVERSIZED, SUNFLOWER', '99,89', '5', 'G', '#000000', '../uploads/CAMISETA STREET SUNFLOWER_20241104_011514/1 PRETO.png', '../uploads/CAMISETA STREET SUNFLOWER_20241104_011514/2 PRETO.png'),
(14, 'blusa', 'CAMISETA STREET TAKE IT EASY', 'OVERSIZED, PRODUTO STREETWEAR, ALTA QUALIDADE', '99,89', '10', 'G', '#000000', '../uploads/CAMISETA STREET TAKE IT EASY_20241104_011649/2 branco.png', '../uploads/CAMISETA STREET TAKE IT EASY_20241104_011649/1 branco.png'),
(15, 'acessorio', 'BONÉ CASUAL COM LETRAS GRÁFICAS', 'BONÉ ESTILO STREET WEAR', '37,99', '5', 'tamanho unico', '#000000', '../uploads/BONÉ CASUAL COM LETRAS GRÁFICAS_20241104_011925/4.png', '../uploads/BONÉ CASUAL COM LETRAS GRÁFICAS_20241104_011925/1.png'),
(16, 'blusa', 'CAMISETA STREETWEAR OLD SCHOOL SKULL', 'OVERSIZED, STREETWEAR, 100% ALGODÃO', '99,90', '15', 'G', '#fcfcfc', '../uploads/CAMISETA STREETWEAR OLD SCHOOL SKULL_20241104_011945/2 branco.png', '../uploads/CAMISETA STREETWEAR OLD SCHOOL SKULL_20241104_011945/1 branco.png'),
(17, 'acessorio', 'BONÉ STREET CAVEIRA', 'BONÉ ESTILO STREETWEAR COM ESTAMPA DE CAVEIRA', '23,72', '5', 'tamanho unico', '#000000', '../uploads/BONÉ STREET CAVEIRA_20241104_012030/3.png', '../uploads/BONÉ STREET CAVEIRA_20241104_012030/2.png'),
(18, 'acessorio', 'CHAPÉU BUCKET ', 'CHAPÉU BUCKET MASCULINO COM ESTAMPA DE CRÂNIO ESTILO STREETWEAR', '22,99', '5', 'tamanho unico', '#000000', '../uploads/CHAPÉU BUCKET _20241104_012345/3.png', '../uploads/CHAPÉU BUCKET _20241104_012345/1.png'),
(19, 'acessorio', 'GORRO CASUAL BORDADO', 'GORRO CASUAL BORDADO COM ESTAMPA DE EXPRESSÃO 100% ALGODÃO', '21,95', '5', 'tamanho unico', '#000000', '../uploads/GORRO CASUAL BORDADO_20241104_012532/2.png', '../uploads/GORRO CASUAL BORDADO_20241104_012532/1.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Adao', 'adaomartins@gmail.com', '$2y$10$Jaogk7/GGUcFrT.S.aClYesvMZQJ6eDRKllq/IoIqw.jUdh0/YOB.'),
(3, 'Samuel', 'samuel@gmail.com', '$2y$10$KWM4ChJOkzW/JMQaSfrgMuyUG.gyC2J7J8ixXq4dei93kbcFv7qbu');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
