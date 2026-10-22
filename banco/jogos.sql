-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/09/2026 às 03:07
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
-- Banco de dados: `jogos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `goty_winners`
--

CREATE TABLE `goty_winners` (
  `ano` int(11) NOT NULL,
  `nome_do_jogo` varchar(255) NOT NULL,
  `desenvolvedora` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `goty_winners`
--

INSERT INTO `goty_winners` (`ano`, `nome_do_jogo`, `desenvolvedora`) VALUES
(2003, 'Madden NFL 2004', 'EA Tiburon'),
(2004, 'Grand Theft Auto: San Andreas', 'Rockstar North'),
(2005, 'Resident Evil 4', 'Capcom Production Studio 4'),
(2006, 'The Elder Scrolls IV: Oblivion', 'Bethesda Game Studios'),
(2007, 'BioShock', 'Irrational Games'),
(2008, 'Grand Theft Auto IV', 'Rockstar North'),
(2009, 'Uncharted 2: Among Thieves', 'Naughty Dog'),
(2010, 'Red Dead Redemption', 'Rockstar San Diego'),
(2011, 'The Elder Scrolls V: Skyrim', 'Bethesda Game Studios'),
(2012, 'The Walking Dead', 'Telltale Games'),
(2013, 'Grand Theft Auto V', 'Rockstar North'),
(2014, 'Dragon Age: Inquisition', 'BioWare'),
(2015, 'The Witcher 3: Wild Hunt', 'CD Projekt Red'),
(2016, 'Overwatch', 'Blizzard Entertainment'),
(2017, 'The Legend of Zelda: Breath of the Wild', 'Nintendo EPD'),
(2018, 'God of War', 'Santa Monica Studio'),
(2019, 'Sekiro: Shadows Die Twice', 'FromSoftware'),
(2020, 'The Last of Us Part II', 'Naughty Dog'),
(2021, 'It Takes Two', 'Hazelight Studios'),
(2022, 'Elden Ring', 'FromSoftware'),
(2023, 'Baldur\'s Gate 3', 'Larian Studios'),
(2024, 'Astro Bot', 'Team ASOBI'),
(2025, 'Clair Obscur: Expedition 33', 'Sandfall Interactive');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `goty_winners`
--
ALTER TABLE `goty_winners`
  ADD PRIMARY KEY (`ano`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
