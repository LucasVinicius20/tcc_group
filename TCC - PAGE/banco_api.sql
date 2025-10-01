-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/10/2025 às 05:48
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
-- Banco de dados: `banco_api`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp(),
  `imagem` longblob DEFAULT NULL,
  `categoria_programa` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `criado_em`, `imagem`, `categoria_programa`) VALUES
(1, '', 'ola@gmail.com', '$2y$10$bL3K86sWqGMbKW.x8G5qR.G6tEC.H7OA/YTmat/rqOJd3FI5rvjfO', '2025-05-29 23:40:08', NULL, NULL),
(3, 'Lucas Vinicius', 'lu@gmail.com', '$2y$10$GXK8o.skILVtmrEdbzfva.CKyZLxUGcv7HKTI7RfGv95fsNc8Fj3a', '2025-08-04 18:17:46', NULL, NULL),
(4, 'Emanuelly ', 'manu@gmail.com', '$2y$10$k8gF5sJvvFDOoGP1wDSKrukqopxr3qP/dGYuujxsDjH3a4iahUL.a', '2025-10-01 03:16:06', NULL, 'iniciante'),
(5, 'Manu', 'ema@gmail.com', '$2y$10$td4.qjBhW/Ub0D/gK9NfIuasFFmZeP0XcKhGkbjA1AcvLzrFkaI2q', '2025-10-01 03:17:09', NULL, 'avancado');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
