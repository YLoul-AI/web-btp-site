-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 22 mai 2024 à 18:09
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
-- Base de données : `ptb`
--

-- --------------------------------------------------------

--
-- Structure de la table `certifications`
--

DROP TABLE IF EXISTS `certifications`;
CREATE TABLE IF NOT EXISTS `certifications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `delivre_par` varchar(255) DEFAULT NULL,
  `date_delivrance` date DEFAULT NULL,
  `date_expiration` date DEFAULT NULL,
  `niveau_certification` varchar(255) DEFAULT NULL,
  `cree_le` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `mis_a_jour_le` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `certifications`
--

INSERT INTO `certifications` (`id`, `nom`, `description`, `delivre_par`, `date_delivrance`, `date_expiration`, `niveau_certification`, `cree_le`, `mis_a_jour_le`) VALUES
(16, 'Certification LEED', 'Certification pour les bâtiments écologiques et durables.', 'US Green Building Council', '2023-05-15', '2026-05-15', 'Avancé', '2024-05-22 13:10:11', '2024-05-22 13:10:11'),
(14, 'Certification PMP', 'Certification pour la gestion de projets.', 'PMI', '2023-01-15', '2026-01-15', 'Avancé', '2024-05-22 13:07:26', '2024-05-22 13:07:26'),
(15, 'Certification Google Ads', 'Certification pour la gestion de campagnes Google Ads.', 'Google', '2022-07-10', '2025-07-10', 'Basique', '2024-05-22 13:07:26', '2024-05-22 13:07:26'),
(17, 'Certification ISO 9001', 'Certification pour la gestion de la qualité.', 'ISO', '2022-10-10', '2025-10-10', 'Basique', '2024-05-22 13:10:11', '2024-05-22 13:10:11'),
(18, 'Certification LEED', 'Certification pour les bâtiments écologiques et durables.', 'US Green Building Council', '2023-05-15', '2026-05-15', 'Avancé', '2024-05-22 13:11:01', '2024-05-22 13:11:01'),
(19, 'Certification ISO 9001', 'Certification pour la gestion de la qualité.', 'ISO', '2022-10-10', '2025-10-10', 'Basique', '2024-05-22 13:11:01', '2024-05-22 13:11:01'),
(20, 'Certification LEED', 'Certification pour les bâtiments écologiques et durables.', 'US Green Building Council', '2023-05-15', '2026-05-15', 'Avancé', '2024-05-22 13:11:33', '2024-05-22 13:11:33'),
(21, 'Certification ISO 9001', 'Certification pour la gestion de la qualité.', 'ISO', '2022-10-10', '2025-10-10', 'Basique', '2024-05-22 13:11:33', '2024-05-22 13:11:33');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `message` text NOT NULL,
  `sujet` varchar(255) DEFAULT NULL,
  `recu_le` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `email`, `telephone`, `message`, `sujet`, `recu_le`) VALUES
(4, 'Bob Leroy', 'bob.leroy@example.com', '0987654321', 'Pouvez-vous m\'envoyer un devis pour un site web ?', 'Demande de devis', '2024-05-22 13:07:26'),
(3, 'Alice Martin', 'alice.martin@example.com', '0234567890', 'Je suis intéressé par vos services de marketing digital.', 'Demande de renseignements', '2024-05-22 13:07:26'),
(5, 'Jean Dupuis', 'jean.dupuis@example.com', '0234567890', 'Je souhaite obtenir plus d\'informations sur vos services de construction.', 'Demande de renseignements', '2024-05-22 13:10:11'),
(6, 'Claire Petit', 'claire.petit@example.com', '0987654321', 'Pouvez-vous me fournir un devis pour la planification de projet ?', 'Demande de devis', '2024-05-22 13:10:11'),
(7, 'Jean Dupuis', 'jean.dupuis@example.com', '0234567890', 'Je souhaite obtenir plus d\'informations sur vos services de construction.', 'Demande de renseignements', '2024-05-22 13:11:01'),
(8, 'Claire Petit', 'claire.petit@example.com', '0987654321', 'Pouvez-vous me fournir un devis pour la planification de projet ?', 'Demande de devis', '2024-05-22 13:11:01'),
(9, 'Jean Dupuis', 'jean.dupuis@example.com', '0234567890', 'Je souhaite obtenir plus d\'informations sur vos services de construction.', 'Demande de renseignements', '2024-05-22 13:11:33'),
(10, 'Claire Petit', 'claire.petit@example.com', '0987654321', 'Pouvez-vous me fournir un devis pour la planification de projet ?', 'Demande de devis', '2024-05-22 13:11:33');

-- --------------------------------------------------------

--
-- Structure de la table `equipes`
--

DROP TABLE IF EXISTS `equipes`;
CREATE TABLE IF NOT EXISTS `equipes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `bio` text,
  `photo_url` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `cree_le` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `mis_a_jour_le` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `equipes`
--

INSERT INTO `equipes` (`id`, `nom`, `role`, `bio`, `photo_url`, `email`, `telephone`, `linkedin_url`, `cree_le`, `mis_a_jour_le`) VALUES
(7, 'Jean Dupont', 'Chef de projet', 'Jean est un chef de projet expérimenté avec plus de 10 ans d\'expérience.', 'http://example.com/jean.jpg', 'jean.dupont@example.com', '0123456789', 'http://linkedin.com/in/jeandupont', '2024-05-22 13:07:26', '2024-05-22 13:07:26'),
(6, 'Marie Dubois', 'Développeuse Web', 'Marie est une développeuse passionnée spécialisée en développement web.', 'Marie_Martin.jpg', 'marie.dubois@example.com', '0987654321', 'http://linkedin.com/in/mariedubois', '2024-05-22 12:29:30', '2024-05-22 12:35:17'),
(5, 'Jean Dupont', 'Chef de projet', 'Jean est un chef de projet expérimenté avec plus de 10 ans d\'expérience.', 'http://example.com/jean.jpg', 'jean.dupont@example.com', '0123456789', 'http://linkedin.com/in/jeandupont', '2024-05-22 12:29:30', '2024-05-22 12:29:30'),
(8, 'Marie Dubois', 'Développeuse Web', 'Marie est une développeuse passionnée spécialisée en développement web.', 'http://example.com/marie.jpg', 'marie.dubois@example.com', '0987654321', 'http://linkedin.com/in/mariedubois', '2024-05-22 13:07:26', '2024-05-22 13:07:26'),
(9, 'Paul Martin', 'Chef de Chantier', 'Paul a plus de 15 ans d\'expérience dans la gestion de chantiers de construction.', 'http://example.com/paul.jpg', 'paul.martin@example.com', '0123456789', 'http://linkedin.com/in/paulmartin', '2024-05-22 13:10:11', '2024-05-22 13:10:11'),
(10, 'Sophie Durand', 'Architecte', 'Sophie est une architecte spécialisée dans les projets résidentiels.', 'http://example.com/sophie.jpg', 'sophie.durand@example.com', '0987654321', 'http://linkedin.com/in/sophiedurand', '2024-05-22 13:10:11', '2024-05-22 13:10:11'),
(11, 'Paul Martin', 'Chef de Chantier', 'Paul a plus de 15 ans d\'expérience dans la gestion de chantiers de construction.', 'http://example.com/paul.jpg', 'paul.martin@example.com', '0123456789', 'http://linkedin.com/in/paulmartin', '2024-05-22 13:11:01', '2024-05-22 13:11:01'),
(12, 'Sophie Durand', 'Architecte', 'Sophie est une architecte spécialisée dans les projets résidentiels.', 'http://example.com/sophie.jpg', 'sophie.durand@example.com', '0987654321', 'http://linkedin.com/in/sophiedurand', '2024-05-22 13:11:01', '2024-05-22 13:11:01'),
(13, 'Paul Martin', 'Chef de Chantier', 'Paul a plus de 15 ans d\'expérience dans la gestion de chantiers de construction.', 'http://example.com/paul.jpg', 'paul.martin@example.com', '0123456789', 'http://linkedin.com/in/paulmartin', '2024-05-22 13:11:33', '2024-05-22 13:11:33'),
(14, 'Sophie Durand', 'Architecte', 'Sophie est une architecte spécialisée dans les projets résidentiels.', 'http://example.com/sophie.jpg', 'sophie.durand@example.com', '0987654321', 'http://linkedin.com/in/sophiedurand', '2024-05-22 13:11:33', '2024-05-22 13:11:33');

-- --------------------------------------------------------

--
-- Structure de la table `equipes_projets`
--

DROP TABLE IF EXISTS `equipes_projets`;
CREATE TABLE IF NOT EXISTS `equipes_projets` (
  `equipe_id` int NOT NULL,
  `projet_id` int NOT NULL,
  `cree_le` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`equipe_id`,`projet_id`),
  KEY `projet_id` (`projet_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `equipes_projets`
--

INSERT INTO `equipes_projets` (`equipe_id`, `projet_id`, `cree_le`) VALUES
(2, 2, '2024-05-22 13:07:26'),
(1, 1, '2024-05-22 13:07:26');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(34) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(45) NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `full_name`, `username`, `password`, `date_create`, `email`, `phone`, `address`) VALUES
(1, '', 'youssef', 'loul', '2024-05-30 14:36:49', 'loul34@gmail.com', 765600000, 'casa,el fath rue,45');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `budget` decimal(15,2) DEFAULT NULL,
  `localisation` varchar(255) DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL,
  `nom_client` varchar(255) DEFAULT NULL,
  `contact_client` varchar(255) DEFAULT NULL,
  `cree_le` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `mis_a_jour_le` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `nom`, `description`, `date_debut`, `date_fin`, `budget`, `localisation`, `statut`, `nom_client`, `contact_client`, `cree_le`, `mis_a_jour_le`) VALUES
(6, 'Refonte Site Web', 'Refonte complète du site web de la société.', '2024-05-01', '2024-07-01', '10000.00', 'Lyon', 'En cours', 'Entreprise ABC', 'info@abc.com', '2024-05-22 13:07:26', '2024-05-22 13:07:26'),
(5, 'Migration Serveur', 'Migration des serveurs vers une nouvelle infrastructure.', '2024-06-01', '2024-06-15', '20000.00', 'Paris', 'Prévu', 'Société XYZ', 'contact@xyz.com', '2024-05-22 13:07:26', '2024-05-22 13:07:26'),
(7, 'Construction d\'un Immeuble Résidentiel', 'Projet de construction d\'un immeuble de 20 étages.', '2024-01-01', '2024-12-31', '5000000.00', 'Paris', 'En cours', 'Société Immobilière ABC', 'contact@abc-immo.com', '2024-05-22 13:10:11', '2024-05-22 13:10:11'),
(8, 'Rénovation d\'un Pont', 'Projet de rénovation d\'un pont historique.', '2024-03-01', '2024-09-30', '2000000.00', 'Lyon', 'Prévu', 'Mairie de Lyon', 'info@mairie-lyon.fr', '2024-05-22 13:10:11', '2024-05-22 13:10:11'),
(9, 'Construction d\'un Immeuble Résidentiel', 'Projet de construction d\'un immeuble de 20 étages.', '2024-01-01', '2024-12-31', '5000000.00', 'Paris', 'En cours', 'Société Immobilière ABC', 'contact@abc-immo.com', '2024-05-22 13:11:01', '2024-05-22 13:11:01'),
(10, 'Rénovation d\'un Pont', 'Projet de rénovation d\'un pont historique.', '2024-03-01', '2024-09-30', '2000000.00', 'Lyon', 'Prévu', 'Mairie de Lyon', 'info@mairie-lyon.fr', '2024-05-22 13:11:01', '2024-05-22 13:11:01'),
(11, 'Construction d\'un Immeuble Résidentiel', 'Projet de construction d\'un immeuble de 20 étages.', '2024-01-01', '2024-12-31', '5000000.00', 'Paris', 'En cours', 'Société Immobilière ABC', 'contact@abc-immo.com', '2024-05-22 13:11:33', '2024-05-22 13:11:33'),
(12, 'Rénovation d\'un Pont', 'Projet de rénovation d\'un pont historique.', '2024-03-01', '2024-09-30', '2000000.00', 'Lyon', 'Prévu', 'Mairie de Lyon', 'info@mairie-lyon.fr', '2024-05-22 13:11:33', '2024-05-22 13:11:33');

-- --------------------------------------------------------

--
-- Structure de la table `projets_services`
--

DROP TABLE IF EXISTS `projets_services`;
CREATE TABLE IF NOT EXISTS `projets_services` (
  `projet_id` int NOT NULL,
  `service_id` int NOT NULL,
  `cree_le` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`projet_id`,`service_id`),
  KEY `service_id` (`service_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `projets_services`
--

INSERT INTO `projets_services` (`projet_id`, `service_id`, `cree_le`) VALUES
(2, 2, '2024-05-22 13:07:26'),
(1, 2, '2024-05-22 13:07:26'),
(1, 1, '2024-05-22 13:07:26'),
(1, 3, '2024-05-22 13:10:11');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `duree_estimee` int DEFAULT NULL,
  `cree_le` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `mis_a_jour_le` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `nom`, `description`, `categorie`, `prix`, `duree_estimee`, `cree_le`, `mis_a_jour_le`) VALUES
(11, 'Marketing Digital', 'Stratégies de marketing en ligne pour augmenter la visibilité.', 'Marketing', '800.00', 14, '2024-05-22 13:07:26', '2024-05-22 13:07:26'),
(10, 'Développement Web', 'Création de sites web personnalisés.', 'Web', '1500.00', 30, '2024-05-22 13:07:26', '2024-05-22 13:07:26'),
(9, 'Consultation IT', 'Service de consultation pour améliorer l\'infrastructure IT.', 'IT', '500.00', 7, '2024-05-22 13:07:26', '2024-05-22 13:07:26'),
(12, 'Consultation BTP', 'Service de consultation pour les projets de construction.', 'Consultation', '1000.00', 10, '2024-05-22 13:10:11', '2024-05-22 13:10:11'),
(13, 'Planification de Projet', 'Service de planification détaillée pour les projets de construction.', 'Planification', '2000.00', 20, '2024-05-22 13:10:11', '2024-05-22 13:10:11'),
(14, 'Construction de Bâtiments', 'Service de construction de bâtiments résidentiels et commerciaux.', 'Construction', '50000.00', 120, '2024-05-22 13:10:11', '2024-05-22 13:10:11'),
(15, 'Consultation BTP', 'Service de consultation pour les projets de construction.', 'Consultation', '1000.00', 10, '2024-05-22 13:11:01', '2024-05-22 13:11:01'),
(16, 'Planification de Projet', 'Service de planification détaillée pour les projets de construction.', 'Planification', '2000.00', 20, '2024-05-22 13:11:01', '2024-05-22 13:11:01'),
(17, 'Construction de Bâtiments', 'Service de construction de bâtiments résidentiels et commerciaux.', 'Construction', '50000.00', 120, '2024-05-22 13:11:01', '2024-05-22 13:11:01'),
(18, 'Consultation BTP', 'Service de consultation pour les projets de construction.', 'Consultation', '1000.00', 10, '2024-05-22 13:11:33', '2024-05-22 13:11:33'),
(19, 'Planification de Projet', 'Service de planification détaillée pour les projets de construction.', 'Planification', '2000.00', 20, '2024-05-22 13:11:33', '2024-05-22 13:11:33'),
(20, 'Construction de Bâtiments', 'Service de construction de bâtiments résidentiels et commerciaux.', 'Construction', '50000.00', 120, '2024-05-22 13:11:33', '2024-05-22 13:11:33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
