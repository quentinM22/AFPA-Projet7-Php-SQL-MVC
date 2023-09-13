-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 25 mars 2021 à 18:15
-- Version du serveur :  8.0.22
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mission7`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

DROP TABLE IF EXISTS `billets`;
CREATE TABLE IF NOT EXISTS `billets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `auteur` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `contenu` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `billets`
--

INSERT INTO `billets` (`id`, `titre`, `auteur`, `contenu`, `date_creation`) VALUES
(1, 'Bienvenue sur mon blog !', 'Machin', 'Je vous souhaite à toutes et à tous la bienvenue sur mon blog qui parlera de... PHP bien sûr !', '2010-03-25 16:28:41'),
(2, 'Le PHP à la conquête du monde !', 'Bidule', 'C\'est officiel, l\'éléPHPant a annoncé à la radio hier soir \"J\'ai l\'intention de conquérir le monde !\".\r\nIl a en outre précisé que le monde serait à sa botte en moins de temps qu\'il n\'en fallait pour dire \"éléPHPant\". Pas dur, ceci dit entre nous...', '2010-03-27 18:31:11'),
(3, 'Règles et bonnes pratiques du forum', 'Untel', 'Cette section est destinée à recueillir vos questions concernant l\'écosystème PHP et les frameworks associés.\r\n\r\n', '2021-03-20 14:11:46'),
(4, 'Foire Aux Questions PHP', 'Truc', 'Si vous débutez dans le développement PHP, vous serez sans doute amené à vous posez des questions durant votre apprentissage. Cette Foire Aux Questions du forum PHP a été élaborée pour être à la fois un complément des tutoriels officiels et pour expliquer les erreurs qui reviennent de manière récurrente sur le forum.\r\n', '2021-03-20 14:18:46'),
(5, 'Symfony 3.4 et moins — Class not found', 'Bidule', 'Si vous êtes ici, c\'est :\r\n\r\n    que vous avez un problème de classes non trouvées dans l\'un de vos (nouveaux) bundles, que ce soit :\r\n        juste après l\'avoir créé ;\r\n        après en avoir supprimé un ;\r\n        après avoir installé une dépendance avec Composer.\r\n    que vous avez fait des recherches (dans ce cas, merci !) ;\r\n    que vous êtes simplement curieux.\r\n', '2021-03-20 14:19:54'),
(6, '[Symfony2] Questions fréquemment posées', 'Trucmuche', '              En parcourant vos sujets sur ce forum, je me rends compte que pas mal de questions reviennent souvent. Ce sont des questions qui sont un peu déconnectées du flux du tutoriel, je pensais donc les rassembler toutes dans un chapitre FAQ.', '2021-03-20 14:22:54');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_billet` int NOT NULL,
  `auteur` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `commentaire` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date_commentaire` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_billet`, `auteur`, `commentaire`, `date_commentaire`) VALUES
(1, 1, 'M@teo21', 'Un peu court ce billet !', '2010-03-25 16:49:53'),
(2, 1, 'Maxime', 'Oui, ça commence pas très fort ce blog...', '2010-03-25 16:57:16'),
(3, 1, 'MultiKiller', '+1 !', '2010-03-25 17:12:52'),
(4, 2, 'John', 'Preum\'s !', '2010-03-27 18:59:49'),
(5, 2, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tôt qu\'on ne le pense !', '2010-03-27 22:02:13'),
(6, 2, 'Albert', 'Ceci est le premier test de commentaire                    ', '2021-03-20 13:07:01'),
(7, 2, 'Albert', 'second test                    ', '2021-03-20 13:13:29'),
(8, 2, 'Albert', 'troisieme test                    ', '2021-03-20 13:17:16'),
(9, 2, 'Albert', 'quatrieme test de commentaire                ', '2021-03-20 13:22:44'),
(10, 2, 'Albert', ' 5eme test de comm               ', '2021-03-20 13:37:18'),
(11, 6, 'Albert', 'ceci est un un test de commentaire ', '2021-03-20 14:27:06'),
(12, 6, 'John', 'Preum\'s !', '2010-03-27 18:59:49'),
(13, 6, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tôt qu\'on ne le pense !', '2010-03-27 22:02:13'),
(14, 6, 'Albert', 'Ceci est le premier test de commentaire                    ', '2021-03-20 13:07:01'),
(15, 6, 'Albert', 'second test                    ', '2021-03-20 13:13:29'),
(16, 6, 'Albert', 'troisieme test                    ', '2021-03-20 13:17:16'),
(17, 6, 'Albert', 'quatrieme test de commentaire                ', '2021-03-20 13:22:44'),
(18, 6, 'Albert', ' 5eme test de comm               ', '2021-03-20 13:37:18'),
(19, 1, 'John', 'Preum\'s !', '2010-03-27 18:59:49'),
(20, 1, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tôt qu\'on ne le pense !', '2010-03-27 22:02:13'),
(21, 1, 'Albert', 'Ceci est le premier test de commentaire                    ', '2021-03-20 13:07:01'),
(22, 1, 'Albert', 'second test                    ', '2021-03-20 13:13:29'),
(23, 1, 'Albert', 'troisieme test                    ', '2021-03-20 13:17:16'),
(24, 1, 'Albert', 'quatrieme test de commentaire                ', '2021-03-20 13:22:44'),
(25, 1, 'Albert', ' 5eme test de comm               ', '2021-03-20 13:37:18'),
(26, 5, 'John', 'Preum\'s !', '2010-03-27 18:59:49'),
(27, 5, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tôt qu\'on ne le pense !', '2010-03-27 22:02:13'),
(28, 5, 'Albert', 'Ceci est le premier test de commentaire                    ', '2021-03-20 13:07:01'),
(29, 5, 'Albert', 'second test                    ', '2021-03-20 13:13:29'),
(30, 5, 'Albert', 'troisieme test                    ', '2021-03-20 13:17:16'),
(31, 5, 'Albert', 'quatrieme test de commentaire                ', '2021-03-20 13:22:44'),
(32, 5, 'Albert', ' 5eme test de comm               ', '2021-03-20 13:37:18'),
(33, 4, 'John', 'Preum\'s !', '2010-03-27 18:59:49'),
(34, 4, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tôt qu\'on ne le pense !', '2010-03-27 22:02:13'),
(35, 4, 'Albert', 'Ceci est le premier test de commentaire                    ', '2021-03-20 13:07:01'),
(36, 4, 'Albert', 'second test                    ', '2021-03-20 13:13:29'),
(37, 4, 'Albert', 'troisieme test                    ', '2021-03-20 13:17:16'),
(38, 4, 'Albert', 'quatrieme test de commentaire                ', '2021-03-20 13:22:44'),
(39, 4, 'Albert', ' 5eme test de comm               ', '2021-03-20 13:37:18'),
(40, 3, 'John', 'Preum\'s !', '2010-03-27 18:59:49'),
(41, 3, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tôt qu\'on ne le pense !', '2010-03-27 22:02:13'),
(42, 3, 'Albert', 'Ceci est le premier test de commentaire                    ', '2021-03-20 13:07:01'),
(43, 3, 'Albert', 'second test                    ', '2021-03-20 13:13:29'),
(44, 3, 'Albert', 'troisieme test                    ', '2021-03-20 13:17:16'),
(45, 3, 'Albert', 'quatrieme test de commentaire                ', '2021-03-20 13:22:44'),
(46, 3, 'Albert', ' 5eme test de comm               ', '2021-03-20 13:37:18'),
(47, 6, 'Chris', 'Probleme: commentaires_post ne renvoi pas id du billet dans l\'URL apres l\'envoi du message               ', '2021-03-20 14:46:49'),
(48, 6, 'Chris', 'suppression de la boucle qui test $données                ', '2021-03-20 15:02:30'),
(49, 6, 'Chris', 'ça ne marche pas                ', '2021-03-20 15:05:57'),
(50, 6, 'Chris', 'reprise des tests              ', '2021-03-22 08:38:42'),
(51, 6, 'Chris', 'test                ', '2021-03-22 08:50:44'),
(52, 6, 'Chris', ' remplacement de id_billet par billet a la ligne 13 dans commentaires_post.php               ', '2021-03-22 08:53:13'),
(53, 6, 'Chris', 'eureka ça fonctionne                ', '2021-03-22 09:05:51'),
(54, 6, 'Chris', 'Ca marche?                            ', '2021-03-22 11:17:42'),
(55, 6, 'Chris', ' on rajoute des \'s\' a $page_comms                           ', '2021-03-22 11:23:39'),
(56, 6, 'Chris', ' Ok ça marche                                   ', '2021-03-22 12:11:08'),
(57, 6, 'Chris', ' test de comm                              ', '2021-03-22 14:30:13'),
(58, 6, 'Chris', 'test de commentaire apres refactorisation du code                                ', '2021-03-25 07:36:01'),
(59, 6, 'Chris', ' test reussi!                               ', '2021-03-25 07:36:29'),
(60, 8, 'Chris', ' test de commentaire                                   ', '2021-03-25 11:53:04');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_id` int NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`) VALUES
(1, 1, 'M@teo21', 'Un peu court ce billet !', '2010-03-25 16:49:53'),
(2, 1, 'Maxime', 'Oui, ça commence pas très fort ce blog...', '2010-03-25 16:57:16'),
(3, 1, 'MultiKiller', '+1 !', '2010-03-25 17:12:52'),
(4, 2, 'John', 'Preum\'s !', '2010-03-27 18:59:49'),
(5, 2, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tôt qu\'on ne le pense !', '2010-03-27 22:02:13'),
(6, 2, 'Albert', 'Ceci est le premier test de commentaire                    ', '2021-03-20 13:07:01'),
(7, 2, 'Albert', 'second test                    ', '2021-03-20 13:13:29'),
(8, 2, 'Albert', 'troisieme test                    ', '2021-03-20 13:17:16'),
(9, 2, 'Albert', 'quatrieme test de commentaire                ', '2021-03-20 13:22:44'),
(10, 2, 'Albert', ' 5eme test de comm               ', '2021-03-20 13:37:18'),
(14, 6, 'Albert', 'Ceci est le premier test de commentaire                    ', '2021-03-20 13:07:01'),
(18, 6, 'Albert', ' 5eme test de comm               ', '2021-03-20 13:37:18'),
(19, 1, 'John', 'Preum\'s !', '2010-03-27 18:59:49'),
(20, 1, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tôt qu\'on ne le pense !', '2010-03-27 22:02:13'),
(21, 1, 'Albert', 'Ceci est le premier test de commentaire                    ', '2021-03-20 13:07:01'),
(22, 1, 'Albert', 'second test                    ', '2021-03-20 13:13:29'),
(23, 1, 'Albert', 'troisieme test                    ', '2021-03-20 13:17:16'),
(24, 1, 'Albert', 'quatrieme test de commentaire                ', '2021-03-20 13:22:44'),
(25, 1, 'Albert', ' 5eme test de comm               ', '2021-03-20 13:37:18'),
(26, 5, 'John', 'Preum\'s !', '2010-03-27 18:59:49'),
(28, 5, 'Albert', 'Ceci est le premier test de commentaire                    ', '2021-03-20 13:07:01'),
(32, 5, 'Albert', ' 5eme test de comm               ', '2021-03-20 13:37:18'),
(33, 4, 'John', 'Preum\'s !', '2010-03-27 18:59:49'),
(34, 4, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tôt qu\'on ne le pense !', '2010-03-27 22:02:13'),
(35, 4, 'Albert', 'Ceci est le premier test de commentaire                    ', '2021-03-20 13:07:01'),
(36, 4, 'Albert', 'second test                    ', '2021-03-20 13:13:29'),
(37, 4, 'Albert', 'troisieme test                    ', '2021-03-20 13:17:16'),
(38, 4, 'Albert', 'quatrieme test de commentaire                ', '2021-03-20 13:22:44'),
(39, 4, 'Albert', ' 5eme test de comm               ', '2021-03-20 13:37:18'),
(40, 3, 'John', 'Preum\'s !', '2010-03-27 18:59:49'),
(41, 3, 'Maxime', 'Excellente analyse de la situation !\r\nIl y arrivera plus tôt qu\'on ne le pense !', '2010-03-27 22:02:13'),
(42, 3, 'Albert', 'Ceci est le premier test de commentaire                    ', '2021-03-20 13:07:01'),
(43, 3, 'Albert', 'second test                    ', '2021-03-20 13:13:29'),
(44, 3, 'Albert', 'troisieme test                    ', '2021-03-20 13:17:16'),
(45, 3, 'Albert', 'quatrieme test de commentaire                ', '2021-03-20 13:22:44'),
(46, 3, 'Albert', ' 5eme test de comm               ', '2021-03-20 13:37:18'),
(47, 6, 'Chris', 'Probleme: commentaires_post ne renvoi pas id du billet dans l\'URL apres l\'envoi du message               ', '2021-03-20 14:46:49'),
(52, 6, 'Chris', ' remplacement de id_billet par billet a la ligne 13 dans commentaires_post.php               ', '2021-03-22 08:53:13'),
(54, 6, 'Chris', 'Ca marche?                            ', '2021-03-22 11:17:42'),
(58, 6, 'Chris', 'modification de commentaire apres refactorisation du code                                ', '2021-03-25 17:13:06'),
(60, 8, 'Chris', ' test de commentaire                                   ', '2021-03-25 11:53:04');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_inscription` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `pass`, `email`, `type`, `date_inscription`) VALUES
(1, 'Chris', 'e59ae67897757d1a138a46c1f501ce94321e96aa7ec4445e0e97e94f2ec6c8e1', 'mannebarth0905@hotmail.fr', 'admin', '2021-03-24'),
(2, 'bob', '8d059c3640b97180dd2ee453e20d34ab0cb0f2eccbe87d01915a8e578a202b11', 'bob@gmail.com', 'utilisateur', '2021-03-24');

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

DROP TABLE IF EXISTS `minichat`;
CREATE TABLE IF NOT EXISTS `minichat` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_message` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `minichat`
--

INSERT INTO `minichat` (`ID`, `pseudo`, `message`, `date_message`) VALUES
(1, 'bob', 'plip', '2021-03-17 08:51:40'),
(2, 'robert', 'ça va?', '2021-03-17 08:51:40'),
(3, 'bob', 'ouep et toi?', '2021-03-17 08:51:40'),
(4, 'robert', ' comme un mardi!\r\n       ', '2021-03-17 08:51:40'),
(5, 'bob', '8976        ', '2021-03-17 08:51:40'),
(9, 'bob', '        hein?\r\n', '2021-03-17 08:51:40'),
(10, 'bob', 'test', '2021-03-17 08:51:40'),
(11, 'bob', 'test', '2021-03-17 08:51:40'),
(12, 'bob', 'grrrr', '2021-03-17 08:51:40'),
(13, 'bob', 'plop', '2021-03-17 08:51:40'),
(14, 'robert', 'test apres refactorisation', '2021-03-25 07:43:55'),
(15, 'robert', 'test réussi', '2021-03-25 07:44:08');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `content`, `creation_date`) VALUES
(1, 'Bienvenue sur mon blog !', 'Machin', 'Je vous souhaite à toutes et à tous la bienvenue sur mon blog qui parlera de... PHP bien sûr !', '2010-03-25 16:28:41'),
(2, 'Le PHP à la conquête du monde !', 'Bidule', 'C\'est officiel, l\'éléPHPant a annoncé à la radio hier soir \"J\'ai l\'intention de conquérir le monde !\".\r\nIl a en outre précisé que le monde serait à sa botte en moins de temps qu\'il n\'en fallait pour dire \"éléPHPant\". Pas dur, ceci dit entre nous...', '2010-03-27 18:31:11'),
(3, 'Règles et bonnes pratiques du forum', 'Untel', 'Cette section est destinée à recueillir vos questions concernant l\'écosystème PHP et les frameworks associés.\r\n\r\n', '2021-03-20 14:11:46'),
(4, 'Foire Aux Questions PHP', 'Truc', 'Si vous débutez dans le développement PHP, vous serez sans doute amené à vous posez des questions durant votre apprentissage. Cette Foire Aux Questions du forum PHP a été élaborée pour être à la fois un complément des tutoriels officiels et pour expliquer les erreurs qui reviennent de manière récurrente sur le forum.\r\n', '2021-03-20 14:18:46'),
(5, 'Symfony 3.4 et moins — Class not found', 'Bidule', 'Si vous êtes ici, c\'est :\r\n\r\n    que vous avez un problème de classes non trouvées dans l\'un de vos (nouveaux) bundles, que ce soit :\r\n        juste après l\'avoir créé ;\r\n        après en avoir supprimé un ;\r\n        après avoir installé une dépendance avec Composer.\r\n    que vous avez fait des recherches (dans ce cas, merci !) ;\r\n    que vous êtes simplement curieux.\r\n', '2021-03-20 14:19:54'),
(6, '[Symfony2] Questions fréquemment posées', 'Trucmuche', '              En parcourant vos sujets sur ce forum, je me rends compte que pas mal de questions reviennent souvent. Ce sont des questions qui sont un peu déconnectées du flux du tutoriel, je pensais donc les rassembler toutes dans un chapitre FAQ.', '2021-03-20 14:22:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
