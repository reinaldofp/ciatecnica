-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 23-Fev-2018 às 12:30
-- Versão do servidor: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipocliente` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `nascimento` date NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobrenome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` int(11) NOT NULL,
  `logradouro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` int(11) NOT NULL,
  `razao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fantasia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `client`
--

INSERT INTO `client` (`id`, `tipocliente`, `cpf`, `nascimento`, `nome`, `sobrenome`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `cnpj`, `razao`, `fantasia`, `created_at`, `updated_at`) VALUES
(9, 2, 123456789, '1990-02-05', 'Novo cadastro CRUD', 'Sobrenome Novo cadastro', 71720555, 'Logradouro', 4, 'Complemento', 'Bairro', 'Brasilia', 'DF', 1234567891, 'razão social', 'Nome Fantasia', '2018-02-22 22:42:28', '2018-02-22 22:43:19'),
(8, 2, 789456123, '2018-02-04', 'Nome Editado', 'Sobrenome pessoa física', 789456132, 'logradouro', 45789, 'Complemento', 'Bairro primeiro', 'Brasilia', 'df', 45697423, 'razão social 2 Reinaldo', 'Nome Fantasia', '2018-02-22 22:02:16', '2018-02-22 22:37:49'),
(5, 1, 72654879, '2018-01-29', 'Quinto nome', 'Sobrenome', 23, 'loga', 456, 'complemento', 'Bairro', 'Brasilia', 'df', 72456892, 'razão social 2', 'asdfasadsf', '2018-02-22 19:57:20', '2018-02-22 19:57:20'),
(6, 1, 4564654, '2018-02-15', 'Primeiro Nome update', 'Sobrenome primeiro', 789456, 'Logradouro Primeiro', 5, 'Complemento primeiro', 'Bairro primeiro', 'cidade primeira', 'DF', 789456, 'razão social primeira', 'fantasia primeira', '2018-02-22 19:57:49', '2018-02-22 21:58:55'),
(10, 1, 123456789, '2018-02-04', 'Nome 12', 'sobrenome 12', 1234567, 'Logradouro 12', 125, '34ewqwer', 'Bairro 12', 'Cidade 12', 'SP', 12345687, 'razão 12', 'fantasia 12', '2018-02-22 22:47:35', '2018-02-23 00:08:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
