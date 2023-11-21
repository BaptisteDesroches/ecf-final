-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 21 nov. 2023 à 14:29
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `games`
--

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `weight` int NOT NULL,
  `engine_id` int NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `estimated_release_date` date NOT NULL,
  `budget` int NOT NULL,
  `status` enum('Annoncé','En production','Disponible') NOT NULL,
  `type_id` int NOT NULL,
  `players_count` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`id`, `title`, `description`, `weight`, `engine_id`, `created_at`, `updated_at`, `estimated_release_date`, `budget`, `status`, `type_id`, `players_count`) VALUES
(1, 'The Last of Us', 'The Last of Us (litt. « Le(s) dernier(s) d’entre nous ») est un jeu vidéo d’action-aventure en vue à la troisième personne, de type survival horror, développé par Naughty Dog et édité par Sony Computer Entertainment, sorti le 14 juin 2013 sur PlayStation 3. D\'abord exclusivement développé sur cette dernière, le jeu connaît une version remastérisée et titrée The Last of Us: Remastered, regroupant tous les contenus téléchargeables, sortie le 29 juillet 2014 sur PlayStation 4.', 40, 1, '2013-06-14', '2022-08-02', '2013-06-14', 20, 'Disponible', 1, 20),
(2, 'The Last of Us 2', 'The Last of Us Part II (litt. « Le(s) dernier(s) d’entre nous, 2e partie ») est un jeu vidéo d’action-aventure en vue à la troisième personne, de type survival horror et se déroulant dans un monde post-apocalyptique. Développé par Naughty Dog et édité par Sony Interactive Entertainment, il sort le 19 juin 2020 sur la console PlayStation 4, plus de trois ans après son annonce officielle le 3 décembre 2016. Il s’agit de la suite du jeu The Last of Us du même studio.', 60, 2, '2020-06-19', '2020-06-26', '2020-06-19', 50, 'Disponible', 1, 25);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
