-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 23/12/2021 às 01:35
-- Versão do servidor: 8.0.27-0ubuntu0.21.10.1
-- Versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tudo-para-obra`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_produtos`
--

CREATE TABLE `tbl_produtos` (
  `prod_id` int NOT NULL,
  `prod_nome` varchar(60) NOT NULL,
  `prod_desc` text NOT NULL,
  `prod_marca` varchar(25) NOT NULL,
  `prod_valor` float NOT NULL,
  `prod_dataMod` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `tbl_produtos`
--

INSERT INTO `tbl_produtos` (`prod_id`, `prod_nome`, `prod_desc`, `prod_marca`, `prod_valor`, `prod_dataMod`) VALUES
(3, 'Fio Eletrico 2 5mm P/ Construção Rolo C/ 100m Flexível', 'Condutor com características de não propagação e autoextinção do fogo fabricado pela Cabo Flex Materiais Elétricos, Com a intenção de atender ao custo x benefício com um dos melhores preços do mercado e boa qualidade ele é Recomendado para aplicações onde exigem-se cabos com maior flexibilidade, como em redes de distribuição de energia de prédios residenciais, comerciais e industriais, ligações de painéis e motores elétricos.\r\nCONSTRUÇÃO: Condutor flexível de cobre nu e têmpera mole.\r\nIsolação de PVC/A 70°C - composto termoplástico extrudado à base de policloreto de vinila, com características especiais para não propagação e autoextinção do fogo.\r\nTEMPERATURA MÁXIMA DO CONDUTOR:\r\n70°C em regime permanente;\r\n100°C em regime de sobrecarga;\r\n160°C em regime de curto-circuito.', 'Cabo Flex Materiais Elé', 158, '2021-12-23');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbl_produtos`
--
ALTER TABLE `tbl_produtos`
  ADD PRIMARY KEY (`prod_id`),
  ADD UNIQUE KEY `prod_id` (`prod_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_produtos`
--
ALTER TABLE `tbl_produtos`
  MODIFY `prod_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
