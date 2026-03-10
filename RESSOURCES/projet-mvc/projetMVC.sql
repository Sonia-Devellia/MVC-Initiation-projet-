-- phpMyAdmin SQL Dump
-- http://www.phpmyadmin.net
--
-- Client :  localhost

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetMVC`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `title` varchar(150) DEFAULT NULL,
  `author` varchar(150) DEFAULT NULL,
  `content` text,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `title`, `author`, `content`, `picture`, `created_at`) VALUES
(1, 'Mon premier article', 'Bob', 'Voici le contenu de mon premier article', 'imgArticle1.jpg', '2024-01-31 16:06:23'),
(2, 'Mon deuxième article', 'Mary', 'Voici le contenu de mon deuxième article', 'imgArticle2.jpg', '2024-01-31 17:24:12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
