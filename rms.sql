-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2013 at 10:19 AM
-- Server version: 5.1.53
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic`
--

CREATE TABLE `basic` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `software` varchar(50) NOT NULL,
  `objective` varchar(20) NOT NULL,
  `solution` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `basic`
--


-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `id` int(11) NOT NULL,
  `brand` varchar(15) DEFAULT NULL,
  `manufacturer` varchar(15) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `cores` int(11) DEFAULT NULL,
  `speedGHZ` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`id`, `brand`, `manufacturer`, `quality`, `price`, `cores`, `speedGHZ`) VALUES
(0, 'intel', 'intel', 3, '25000.00', 7, '2.50'),
(1, 'amd', 'amd', 2, '27000.00', 5, '2.30'),
(2, 'motorola', 'motorola', 4, '30000.00', 7, '3.00'),
(3, 'inteli5_4570R', 'intel', 2, '23000.00', 2, '1.70'),
(4, 'power6', 'ibm', 4, '31000.00', 6, '3.00'),
(5, 'inteli5_4250U', 'intel', 3, '21000.00', 2, '1.30'),
(6, 'SPARCt3', 'sun', 2, '23000.00', 2, '2.00'),
(7, 'inteli5_4370U', 'intel', 3, '25000.00', 2, '1.40'),
(8, 'power4', 'ibm', 1, '19000.00', 2, '1.20'),
(9, 'hp_37', 'intel', 5, '40000.00', 7, '4.00');

-- --------------------------------------------------------

--
-- Table structure for table `hdd`
--

CREATE TABLE `hdd` (
  `id` int(11) NOT NULL,
  `brand` varchar(15) DEFAULT NULL,
  `manufacturer` varchar(15) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `storageGB` decimal(10,2) DEFAULT NULL,
  `rpm` int(11) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hdd`
--

INSERT INTO `hdd` (`id`, `brand`, `manufacturer`, `quality`, `price`, `storageGB`, `rpm`, `type`) VALUES
(0, 'maxter', 'maxter', 3, '25000.00', '750.00', 7200, 'IDE'),
(1, 'hitachi', 'ibm', 3, '27000.00', '320.00', 3600, 'SATA'),
(2, 'Seagate', 'Seagate', 3, '28000.00', '320.00', 7200, 'IDE'),
(3, 'maxter', 'maxter', 4, '30000.00', '1000.00', 7200, 'SATA'),
(4, 'Seagate', 'Seagate', 2, '24000.00', '600.00', 3200, 'ATA'),
(5, 'hp', 'hp', 1, '23000.00', '320.00', 1200, 'SCSI'),
(6, 'samsung', 'samsung', 5, '32000.00', '750.00', 1000, 'ATA'),
(7, ' Fujitsu', ' Fujitsu', 5, '31000.00', '850.00', 7200, 'SATA'),
(8, 'hitachi', 'ibm', 4, '29000.00', '560.00', 3200, 'IDE');

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `id` int(11) NOT NULL,
  `brand` varchar(15) DEFAULT NULL,
  `manufacturer` varchar(15) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `sizeGB` decimal(10,2) DEFAULT NULL,
  `busSpeedGHZ` int(11) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`id`, `brand`, `manufacturer`, `quality`, `price`, `sizeGB`, `busSpeedGHZ`, `type`) VALUES
(0, 'kingston', 'kingston', 3, '2000.00', '4.00', 166, 'DDR3'),
(1, 'amd', 'amd', 3, '2100.00', '2.00', 150, 'DDR2'),
(2, 'nVidia', 'nVidia', 3, '2300.00', '4.00', 1, 'DDR3'),
(3, 'amd', 'amd', 5, '3000.00', '8.00', 200, 'DDR3'),
(4, 'kingston', 'kingston', 4, '2500.00', '1.00', 1, 'DDR1'),
(5, 'kingston', 'kingston', 1, '2000.00', '3.00', 120, 'DDR2'),
(6, 'amd', 'amd', 2, '2400.00', '3.00', 150, 'DDR2'),
(7, 'kingston', 'kingston', 2, '2450.00', '4.00', 160, 'DDR3');
