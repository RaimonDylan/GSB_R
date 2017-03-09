-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 25 Novembre 2016 à 10:43
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



/*!40101 SET NAMES utf8 */;

--
-- Base de données: `acceswifi`
--
CREATE DATABASE IF NOT EXISTS `acceswifi` 
USE `acceswifi`;

-- --------------------------------------------------------

--
-- Structure de la table `port_etudiant`
--

CREATE TABLE IF NOT EXISTS `port_etudiant` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `numGroupe` int(11) NULL DEFAULT ,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `mel` varchar(64) NOT NULL,
  `mdp` varchar(32) NOT NULL,
  `numexam` varchar(16) NULL DEFAULT,
  `valide` varchar(1) NOT NULL DEFAULT 'O',
  PRIMARY KEY (`num`)
  KEY `ietudgrou` (`numGroupe`);
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Contenu de la table `port_etudiant`
--

INSERT INTO `port_etudiant` (`num`, `numGroupe`, `nom`, `prenom`, `mel`, `mdp`, `numexam`, `valide`) VALUES(1, 1, 'Raimon', 'Dylan', 'dylanraimon@gmail.com', 'admin!', '1231231231231231', 'O');


-- --------------------------------------------------------

--
-- Structure de la table `port_professeur`
--

CREATE TABLE IF NOT EXISTS `port_professeur` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `mel` varchar(64) NOT NULL,
  `mdp` varchar(32) NOT NULL,
  `niveau` int(11) NOT NULL ,
  `valide` varchar(1) DEFAULT 'O',
  PRIMARY KEY (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Contenu de la table `port_professeur`
--

INSERT INTO `port_professeur` (`num`, `nom`, `prenom`, `mel`, `mdp`, `niveau`, `valide`) VALUES(1, 'Admin', 'Admin', 'dylanraimon@gmail.com', 'admin!', 1, 'O');
INSERT INTO `commande` (`ID`, `IDCLIENT`, `DATECDE`) VALUES(2, 2, '2014-09-08');
INSERT INTO `commande` (`ID`, `IDCLIENT`, `DATECDE`) VALUES(3, 3, '2014-09-10');
INSERT INTO `commande` (`ID`, `IDCLIENT`, `DATECDE`) VALUES(4, 2, '2014-10-01');
INSERT INTO `commande` (`ID`, `IDCLIENT`, `DATECDE`) VALUES(5, 3, '2014-10-01');
INSERT INTO `commande` (`ID`, `IDCLIENT`, `DATECDE`) VALUES(6, 4, '2014-10-01');
INSERT INTO `commande` (`ID`, `IDCLIENT`, `DATECDE`) VALUES(7, 5, '2014-10-01');

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE IF NOT EXISTS `ligne_commande` (
  `IDCOMMANDE` int(11) NOT NULL,
  `IDPRODUIT` int(11) NOT NULL DEFAULT '0',
  `QTELIGNE` int(11) NOT NULL,
  PRIMARY KEY (`IDCOMMANDE`,`IDPRODUIT`),
  KEY `FK_LIGNE_PRODUIT` (`IDPRODUIT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(1, 1, 2);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(1, 4, 1);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(2, 1, 3);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(2, 2, 2);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(2, 3, 4);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(3, 1, 4);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(3, 2, 2);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(3, 3, 5);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(3, 4, 3);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(3, 5, 12);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(3, 6, 7);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(3, 7, 5);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(3, 8, 9);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(4, 3, 6);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(4, 4, 6);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(5, 1, 6);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(5, 2, 2);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(5, 3, 5);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(5, 4, 3);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(5, 5, 13);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(5, 6, 7);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(5, 7, 5);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(5, 8, 9);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(6, 4, 5);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(6, 5, 12);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(7, 5, 9);
INSERT INTO `ligne_commande` (`IDCOMMANDE`, `IDPRODUIT`, `QTELIGNE`) VALUES(7, 7, 3);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DESIGNATION` varchar(50) DEFAULT NULL,
  `PUHT` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`ID`, `DESIGNATION`, `PUHT`) VALUES(1, 'CARS 2 - MARTIN - Voiture radiocommandée 1/16ème', '29.99');
INSERT INTO `produit` (`ID`, `DESIGNATION`, `PUHT`) VALUES(2, 'Lego Super Héros - La poursuite De Catwoman', '11.19');
INSERT INTO `produit` (`ID`, `DESIGNATION`, `PUHT`) VALUES(3, 'Titeuf, L''Ecole En Folie', '5.49');
INSERT INTO `produit` (`ID`, `DESIGNATION`, `PUHT`) VALUES(4, 'Robot Tankbot Compatible Smartphone', '13.99');
INSERT INTO `produit` (`ID`, `DESIGNATION`, `PUHT`) VALUES(5, 'Vélo VTT homme', '67.99');
INSERT INTO `produit` (`ID`, `DESIGNATION`, `PUHT`) VALUES(6, 'Vélo VTT femme', '59.99');
INSERT INTO `produit` (`ID`, `DESIGNATION`, `PUHT`) VALUES(7, 'Train électrique', '45.99');
INSERT INTO `produit` (`ID`, `DESIGNATION`, `PUHT`) VALUES(8, 'Pompe Vélo', '18.85');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_COMMANDE_CLIENT` FOREIGN KEY (`IDCLIENT`) REFERENCES `client` (`ID`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `FK_LIGNE_PRODUIT` FOREIGN KEY (`IDPRODUIT`) REFERENCES `produit` (`ID`),
  ADD CONSTRAINT `FK_LIGNE_COMMANDE` FOREIGN KEY (`IDCOMMANDE`) REFERENCES `commande` (`ID`);
COMMIT;client

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
