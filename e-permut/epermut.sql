-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 28 mai 2021 à 14:51
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `epermut`
--

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `idp` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `id_utilisateur` varchar(255) NOT NULL,
  `ecole_souhaitee` varchar(255) NOT NULL,
  `filiere_souhaitee` varchar(255) NOT NULL,
  `idv_souhaitee` varchar(255) NOT NULL,
  `date_pub` datetime NOT NULL DEFAULT current_timestamp(),
  `statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idu` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `ecole_origine` varchar(255) NOT NULL,
  `idv_origine` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `idv` int(11) NOT NULL,
  `nom_ville` varchar(150) CHARACTER SET utf8 NOT NULL,
  `statut` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`idv`, `nom_ville`, `statut`) VALUES
(1, 'abidjan', ''),
(2, 'abengourou', ''),
(3, 'aboisso', ''),
(4, 'adzope', ''),
(5, 'agboville', ''),
(6, 'agnibilekrou', ''),
(7, 'anyama', ''),
(8, 'beoumi', ''),
(9, 'bingerville', ''),
(10, 'bocanda', ''),
(11, 'bondoukou', ''),
(12, 'bongouanou', ''),
(13, 'bonoua', ''),
(14, 'boundiali', ''),
(15, 'dabou', ''),
(16, 'daloa', ''),
(17, 'bouaflé', ''),
(18, 'danané', ''),
(19, 'daoukro', ''),
(20, 'dimbokro', ''),
(21, 'divo', ''),
(22, 'douekoue', ''),
(23, 'ferkessedougou', ''),
(24, 'gagnoa', ''),
(25, 'gohitafla', ''),
(26, 'grandlahou', ''),
(27, 'grandbassam', ''),
(28, 'Grand-Bereby', ''),
(29, 'guiglo', ''),
(30, 'issia', ''),
(31, 'jacqueville', ''),
(32, 'katiola', ''),
(33, 'korhogo', ''),
(34, 'mbahiakro', ''),
(35, 'mankono', ''),
(36, 'odienne', ''),
(37, 'oumé', ''),
(38, 'sassandra', ''),
(39, 'seguela', ''),
(40, 'sinfra', ''),
(41, 'soubré', ''),
(42, 'tengrela', ''),
(43, 'tiassale', ''),
(44, 'Toulepleu', ''),
(45, 'toumodi', ''),
(46, 'vavoua', ''),
(47, 'yamoussoukro', ''),
(48, 'zuenoula', ''),
(49, 'Bouna', ''),
(50, 'lakota', ''),
(51, 'kani', ''),
(52, 'man', ''),
(53, 'dabakala', ''),
(54, 'kong', ''),
(55, 'Touba', ''),
(56, 'bouake', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`idp`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idu`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`idv`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `idv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
