-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 11. Apr 2014 um 00:35
-- Server Version: 5.6.16
-- PHP-Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `tjunecup`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `teamId` int(25) NOT NULL,
  `vorname` varchar(100) NOT NULL,
  `nachname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Daten für Tabelle `player`
--

INSERT INTO `player` (`id`, `teamId`, `vorname`, `nachname`) VALUES
(1, 1, 'Kevin', 'Kohls'),
(2, 2, 'jan', 'werder'),
(6, 1, 'Janyy', 'Werderaw3w');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `logo` varchar(500) NOT NULL,
  `teamName` varchar(100) NOT NULL,
  `passwort` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Daten für Tabelle `team`
--

INSERT INTO `team` (`id`, `logo`, `teamName`, `passwort`) VALUES
(1, 'images/1_logo.jpg', 'testTeam123', '1cc39ffd758234422e1f75beadfc5fb2'),
(2, 'images/2_logo.jpg', 'Team 42', 'e628b7776186bcf524167415337e69b8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
