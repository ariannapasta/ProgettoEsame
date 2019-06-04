-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2019 at 11:41 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appuntamento`
--

-- --------------------------------------------------------

--
-- Table structure for table `prenotazione`
--

CREATE TABLE `prenotazione` (
  `IdServizio` int(11) NOT NULL,
  `IdUtente` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Orario` time NOT NULL,
  `Libero` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prenotazione`
--

INSERT INTO `prenotazione` (`IdServizio`, `IdUtente`, `Data`, `Orario`, `Libero`) VALUES
(1, 1, '0000-00-00', '00:00:00', 1),
(3, 1, '0000-00-00', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `servizio`
--

CREATE TABLE `servizio` (
  `IdServizio` int(11) NOT NULL,
  `NomeServizio` varchar(50) NOT NULL,
  `Prezzo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servizio`
--

INSERT INTO `servizio` (`IdServizio`, `NomeServizio`, `Prezzo`) VALUES
(1, 'Piega', 15),
(2, 'Taglio', 17),
(3, 'Colore', 18);

-- --------------------------------------------------------

--
-- Table structure for table `tipocapello`
--

CREATE TABLE `tipocapello` (
  `IdTipoCapello` int(11) NOT NULL,
  `CapelloGrosso` tinyint(1) NOT NULL,
  `CapelloSano` tinyint(1) NOT NULL,
  `PerditaCapelli` tinyint(1) NOT NULL,
  `Forfora` tinyint(1) NOT NULL,
  `CapelloSottile` tinyint(1) NOT NULL,
  `CapelloDanneggiato` tinyint(1) NOT NULL,
  `Altro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipocapello`
--

INSERT INTO `tipocapello` (`IdTipoCapello`, `CapelloGrosso`, `CapelloSano`, `PerditaCapelli`, `Forfora`, `CapelloSottile`, `CapelloDanneggiato`, `Altro`) VALUES
(1, 1, 1, 0, 0, 0, 0, NULL),
(2, 0, 0, 1, 1, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `utente`
--

CREATE TABLE `utente` (
  `IdUtente` int(11) NOT NULL,
  `Nome` varchar(20) NOT NULL,
  `Cognome` varchar(20) NOT NULL,
  `DataNascita` date NOT NULL,
  `Sesso` varchar(1) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `IdTipoCapello` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utente`
--

INSERT INTO `utente` (`IdUtente`, `Nome`, `Cognome`, `DataNascita`, `Sesso`, `Username`, `Password`, `IdTipoCapello`) VALUES
(1, 'Arianna', 'Pasta', '1999-12-07', 'F', 'ariannapasta', 'arianna', 1),
(2, 'Cristian', 'Tironi', '2000-03-18', 'M', 'cristiantironi', 'cristian', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prenotazione`
--
ALTER TABLE `prenotazione`
  ADD KEY `IdServizio` (`IdServizio`),
  ADD KEY `IdUtente` (`IdUtente`);

--
-- Indexes for table `servizio`
--
ALTER TABLE `servizio`
  ADD PRIMARY KEY (`IdServizio`),
  ADD KEY `IdServizio` (`IdServizio`);

--
-- Indexes for table `tipocapello`
--
ALTER TABLE `tipocapello`
  ADD PRIMARY KEY (`IdTipoCapello`),
  ADD KEY `IdTipoCapello` (`IdTipoCapello`);

--
-- Indexes for table `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`IdUtente`),
  ADD KEY `IdUtente` (`IdUtente`),
  ADD KEY `IdTipoCapello` (`IdTipoCapello`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prenotazione`
--
ALTER TABLE `prenotazione`
  ADD CONSTRAINT `prenotazione_ibfk_2` FOREIGN KEY (`IdUtente`) REFERENCES `utente` (`IdUtente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
