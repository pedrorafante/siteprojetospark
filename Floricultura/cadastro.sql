-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 25-Abr-2023 às 01:37
-- Versão do servidor: 5.7.37
-- versão do PHP: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `flor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `secao` varchar(255) DEFAULT NULL,
  `valor` decimal(10,0) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `descricao`, `secao`, `valor`, `nome`, `url`) VALUES
(1, 'Elegância das rosas vermelhas.', 'Arranjos', '193', 'Elegância das rosas vermelhas', 'img/ARosa1.jpeg'),
(2, 'Arranjo de flores vermelhas.', 'Arranjos', '25', 'Chica flor', 'img/ALaranja.jpg'),
(3, 'Arranjo de Flor Artificial Amarílis Vermelho no Vaso Bronze Redondo.', 'Arranjos', '180', 'Formosinha', 'img/AVaso.jpg'),
(4, 'Arranjo de flores secas coloridas.', 'Arranjos', '80', 'Arranjo de flores secas', 'img/AColorido.jpg'),
(5, 'Mini Arranjo Flores Desidratadas.', 'Arranjos', '89', 'Flores Desidratadas', 'img/AFolha.jpg'),
(6, 'Flores silvestres do campo coloridas.', 'Arranjos', '100', 'Arranjo Flores do Campo', 'img/APapel.jpg'),
(7, 'Lindo arranjo de Lírios.', 'Arranjos', '160', 'Arranjos de Lírios Rosa', 'img/ARosa.jpg'),
(8, 'Decoração Centro Mesa Arranjo Flores Artificiais Orquídeas.', 'Arranjos', '635', 'Orquídeas', 'img/ARoxo.jpg'),
(9, 'Buquê de Rosas Azuis.', 'Buquê', '267', 'Buquê de Rosas Azuis', 'img/BAzul1.jpeg'),
(10, 'Buquê de rosas sortidas.', 'Buquê', '160', 'Buquê de rosas sortidas', 'img/BColorido.jpeg'),
(11, 'Lindo Buquê de Rosas, Margaridas  e Flores do Campo.', 'Buquê', '130', 'Buquê Campestre Rosas, Margaridas e Flores Silvestres', 'img/BColorido1.jpeg'),
(12, 'Buquê de Copos de leite.', 'Buquê', '200', 'Buquê de Copos de leite', 'img/BCopodeLeite.jpeg'),
(13, 'Buquê de Girassol.', 'Buquê', '158', 'Buquê de Girassol', 'img/BGirassol.jpeg'),
(14, 'Buquê de Mine Rosas Vermelhas.', 'Buquê', '200', 'Buquê de Mine Rosas Vermelhas', 'img/BRosa v.jpeg'),
(15, 'Buquê  de Orquídeas Rosas', 'Buquê', '324', 'Buquê  de Orquídeas Rosas', 'img/BOrquidia.jpeg'),
(16, 'Buquê de Rosas Vermelhas e Girassol.', 'Buquê', '177', 'Buquê de Rosas Vermelhas e Girassol', 'img/BRosa e girassol.jpeg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
