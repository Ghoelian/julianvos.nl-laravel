-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2018 at 11:52 AM
-- Server version: 5.7.20-log
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eindopdracht`
--

-- --------------------------------------------------------

--
-- Table structure for table `verjaardagen`
--

CREATE TABLE `verjaardagen` (
  `idverjaardagen` int(11) NOT NULL,
  `geboortedatum` date DEFAULT NULL,
  `voornaam` varchar(45) DEFAULT NULL,
  `achternaam` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `verjaardagen`
--

INSERT INTO `verjaardagen` (`idverjaardagen`, `geboortedatum`, `voornaam`, `achternaam`) VALUES
(1, '1972-01-14', 'Berry', 'Vos'),
(2, '1973-12-29', 'Froukje', 'van der Voort'),
(3, '2002-08-21', 'Anne', 'Vos'),
(4, '2000-12-25', 'Julian', 'Vos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `verjaardagen`
--
ALTER TABLE `verjaardagen`
  ADD PRIMARY KEY (`idverjaardagen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `verjaardagen`
--
ALTER TABLE `verjaardagen`
  MODIFY `idverjaardagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
