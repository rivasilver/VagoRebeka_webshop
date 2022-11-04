-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 04, 2022 at 01:13 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `felhasznalo`
--

DROP TABLE IF EXISTS `felhasznalo`;
CREATE TABLE IF NOT EXISTS `felhasznalo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `felhasznalo_nev` varchar(30) COLLATE ucs2_hungarian_ci NOT NULL,
  `email` varchar(255) COLLATE ucs2_hungarian_ci NOT NULL,
  `jelszo` varchar(100) COLLATE ucs2_hungarian_ci NOT NULL,
  `teljes_nev` varchar(100) COLLATE ucs2_hungarian_ci NOT NULL,
  `szuletesi_datum` date NOT NULL,
  `iranyito_szam` int(4) NOT NULL,
  `varos` varchar(50) COLLATE ucs2_hungarian_ci NOT NULL,
  `cim` varchar(255) COLLATE ucs2_hungarian_ci NOT NULL,
  `regisztracio_idopontja` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `felhasznalo_nev` (`felhasznalo_nev`)
) ENGINE=MyISAM DEFAULT CHARSET=ucs2 COLLATE=ucs2_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `termek`
--

DROP TABLE IF EXISTS `termek`;
CREATE TABLE IF NOT EXISTS `termek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(100) COLLATE ucs2_hungarian_ci NOT NULL,
  `leiras` text COLLATE ucs2_hungarian_ci,
  `ar` int(11) NOT NULL,
  `kep` text COLLATE ucs2_hungarian_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=ucs2 COLLATE=ucs2_hungarian_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
