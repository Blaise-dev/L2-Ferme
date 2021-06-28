-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 27 juin 2021 à 22:46
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp_ferme`
--

-- --------------------------------------------------------

--
-- Structure de la table `arrondissement`
--

CREATE TABLE `arrondissement` (
  `nom_arrondissement` varchar(100) NOT NULL,
  `nomDepartement` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `arrondissement`
--

INSERT INTO `arrondissement` (`nom_arrondissement`, `nomDepartement`) VALUES
('Gobo', 'Mayo-Danay'),
('Guéré', 'Mayo-Danay'),
('Guémé', 'Mayo-Danay'),
('Maga', 'Mayo-Danay'),
('Batcham', 'Bamboutos'),
('Babadjou', 'Bamboutos'),
('Galim', 'Bamboutos'),
('Mbouda', 'Bamboutos'),
('Dembo', 'Benoue'),
('Demsa', 'Benoue'),
('Lagdo', 'Benoue'),
('Pitoa', 'Benoue'),
('Batouri', 'Kadey'),
('Kette', 'Kadey'),
('Mbang', 'Kadey'),
('Ouli', 'Kadey'),
('Bafoussam Ie', 'Mifi'),
('Bafoussam IIe', 'Mifi'),
('Bafoussam IIIeme', 'Mifi');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `nom` varchar(100) NOT NULL,
  `arrondissement` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `departement` varchar(100) NOT NULL,
  `prenom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`nom`, `arrondissement`, `login`, `mdp`, `region`, `departement`, `prenom`) VALUES
('Corine', 'Bafoussam Ie', '@coco', '1111111', 'Ouest', 'Mifi', 'Corinevega'),
('Mbassi Atangana', 'Bafoussam IIe', 'blaise-dev', 'blaise625', 'Ouest', 'Mifi', 'Blaise'),
('efrerz', '', 'ezrez', '', 'Extreme-Nord', '', 'zerze'),
('zaeaze', 'Ouli', 'jghjg', 'ghh,g', 'Est', 'Kadey', 'hgjgh'),
('rfsfqsd', '', 'KJHKJHKJH', 'JHKJH', '', '', 'fsdfKJHHJ'),
('Toto', 'Bafoussam Ie', 'lala525', 'toto525', 'Ouest', 'Mifi', 'Lala'),
('fssefs', '', 'uytuyt', 'fght', '', '', 'sfefd'),
('zerze', '', 'zezaea', 'azeraze', 'Extreme-Nord', '', 'zerazea');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `nomDepartement` varchar(100) NOT NULL,
  `nomRegion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`nomDepartement`, `nomRegion`) VALUES
('Bamboutos', 'Ouest'),
('Benoue', 'Nord'),
('Boumba-et-Ngoko', 'Est'),
('Boyo-Bui', 'Nord-Ouest'),
('Diamaré', 'Extrême-Nord'),
('Dja-et-Lobo', 'Sud'),
('Djérem', 'Adamaoua'),
('Fako', 'Sud-Ouest'),
('Faro', 'Nord'),
('Faro-et-Déo', 'Adamaoua'),
('Haut-Nyong', 'Est'),
('Haute-Sanaga', 'Centre'),
('Kadey', 'Est'),
('Koung-Khi', 'Ouest'),
('Lebialem', 'Sud-Ouest'),
('Lekié', 'Centre'),
('Logone-et-Chari', 'Extrême-Nord'),
('Lom-et-Djérem', 'Est'),
('Manyu', 'Sud-Ouest'),
('Mayo-Banyo', 'Adamaoua'),
('Mayo-Danay', 'Extrême-Nord'),
('Mayo-Kani', 'Extrême-Nord'),
('Mayo-Louti', 'Nord'),
('Mayo-Rey', 'Nord'),
('Mayo-Sava', 'Extrême-Nord'),
('Mayo-Tsanaga', 'Extrême-Nord'),
('Mbam-et-inoubou', 'Centre'),
('Mbam-et-Kim', 'Centre'),
('Mbéré', 'Adamaoua'),
('Menchum', 'Nord-Ouest'),
('Mezam', 'Nord-Ouest'),
('Mifi', 'Ouest'),
('Momo', 'Nord-Ouest'),
('Moungo', 'Littoral'),
('Mvila', 'Sud'),
('Ndé', 'Ouest'),
('Ndian', 'Sud-Ouest'),
('Nkam', 'Littoral'),
('Noun', 'Ouest'),
('Océan', 'Sud'),
('Sanaga-Maritime', 'Littoral'),
('Vallée-du-Ntem', 'Sud'),
('Vina', 'Adamaoua'),
('Wouri', 'Littoral');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `nomRegion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`nomRegion`) VALUES
('Adamaoua'),
('Centre'),
('Est'),
('Extrême-Nord'),
('Littoral'),
('Nord'),
('Nord-Ouest'),
('Ouest'),
('Sud'),
('Sud-Ouest');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`login`);

--
-- Index pour la table `departement`
--
ALTER TABLE `arrondissement`
  ADD PRIMARY KEY (`nom_arrondissement`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`nomDepartement`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`nomRegion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
