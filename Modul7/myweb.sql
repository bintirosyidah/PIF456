-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2013 at 10:52 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`) VALUES
('110533430528', 'Bekti Widhiandana', 'Yogyakarta'),
('110533430523', 'Mia Vernanda', 'Mlarak, Ponorogo'),
('110533430522', 'Rully Dwi Akustina', 'Bandung 45'),
('110533430526', 'Rosy Binti', 'Ponorogo'),
('110533430521', 'Wawanity', 'Bojonegoro'),
('110533430524', 'Ria Ratna Sari', 'Malang'),
('110533430525', 'Dwi Agni S', 'Surabaya'),
('110533430527', 'Ami Sastro', 'Malang'),
('110533430529', 'Binti Rosyidah', 'Ponorogo'),
('110533430520', 'Rudi Hartono', 'Jetis,Ponorogo'),
('110533430510', 'Totok Aris', 'Mlarak,Ponorogo'),
('110533430512', 'Pramita Hanit Kusuma', 'Mlarak,Ponorogo'),
('110533430513', 'Reni Dyah Ayu', 'Jl Pacar 34, Bojonegoro'),
('110533430514', 'Renita Erdiana', 'Tugu, Trenggalek'),
('110533430515', 'Esti Merindari', 'Tugu, Trenggalek'),
('110533430516', 'Ria Ratna Sari', 'Sumbersari,Malang'),
('110533430517', 'Ida Faradela', 'Sinduro, Ponorogo'),
('110533430518', 'Tina Margareta', 'Kalimantan'),
('110533430519', 'Juana Tri Widianto', 'Mlarak,Ponorogo'),
('110533430530', 'Gracia Sinta ', 'Joresan, Ponorogo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
