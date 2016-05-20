-- phpMyAdmin SQL Dump
-- version 3.4.7.1
-- http://www.phpmyadmin.net
--
-- Host: 62.149.150.224
-- Generato il: Mag 18, 2016 alle 09:34
-- Versione del server: 5.5.45
-- Versione PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Sql801819_1`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `link` text NOT NULL,
  `descrizione` longtext NOT NULL,
  `tipo` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dump dei dati per la tabella `download`
--

INSERT INTO `download` (`id`, `link`, `descrizione`, `tipo`) VALUES
(40, 'x dispensaVELA_1.2.pdf', 'DISPENSA VELA SCUOLA NAUTICA RINALDINI', 1),
(37, 'VP2 (VELA PRATICA 2).pdf', 'NOZIONI SECONDA USCITA', 1),
(38, 'VP1 (VELA PRATICA 1).pdf', 'NOZIONI PRIMA USCITA', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `news` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dump dei dati per la tabella `news`
--

INSERT INTO `news` (`id`, `news`) VALUES
(1, 'NUOVI CORSI PER IL DIPORTO E LA VELA D&#039;ALTURA  - ORMEGGIO - STRUMENTI - IMPIANTI'),
(5, 'METEO - PERFEZIONAMENTO VELA - GENNAKER - SPINNAKER - CROCIERE DIDATTICHE'),
(3, 'Scopri RAIATEA barca scuola e noleggio con skipper'),
(4, 'AGOSTO: ARCIPELAGO TOSCANO con base a Punta Ala. POSTI LIMITATI! Richiedi info.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
