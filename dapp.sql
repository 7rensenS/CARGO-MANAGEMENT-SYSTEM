-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 25, 2020 at 07:53 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `num` int(10) NOT NULL,
  `id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Warehouse id` varchar(30) NOT NULL,
  `Warehouse district` varchar(30) NOT NULL,
  `Branch Name` varchar(30) NOT NULL,
  `branch address` text NOT NULL,
  `Place` text NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`num`, `id`, `password`, `Warehouse id`, `Warehouse district`, `Branch Name`, `branch address`, `Place`, `Email`) VALUES
(1, 'B1', '1234567890', 'W1', 'ALAPPUZHA', 'W2B1', 'B1 ALP', 'PUNNAPRA', 'B1@dapp.com'),
(2, 'B2', '1234567890', 'W2', 'ERNAKULAM', 'B2W2', 'B2 ERN', 'EDAPALLI', 'B2@dapp.com'),
(3, 'B3', '1234567890', 'W3', 'IDUKKI', 'B3W3', 'B3 IDK', 'MUNNAR', 'B3@dapp.com'),
(3, 'B3', '1234567890', 'W3', 'IDUKKI', 'B3W3', 'B3 IDK', 'MUNNAR', 'B3@dapp.com'),
(4, 'B4', '1234567890', 'W4', 'KANNUR', 'B4W4', 'B4 KNR', 'KANNUR', 'B4@dapp.com'),
(5, 'B5', '1234567890', 'W5', 'KASARAGOD', 'B5W5', 'B5 KZR', 'KANJANGAD', 'B5@dapp.com'),
(6, 'B6', '1234567890', 'W6', 'KOLLAM', 'B6W6', 'B6 KLM', 'KUNDARA', 'B6@dapp.com'),
(7, 'B7', '1234567890', 'W7', 'KOTTAYAM', 'B7', 'B7 KTY', 'PALA', 'B7@dapp.com'),
(8, 'B8', '1234567890', 'W8', 'KOZHIKODE', 'B8', 'B8W8', 'KOZHIKODE', 'B8@dapp.com'),
(9, 'B9', '1234567890', 'W9', 'MALAPPURAM', 'B9W9', 'B9 MLA', 'MALAPPURAM', 'B9@dapp.com'),
(10, 'B10', '1234567890', 'W10', 'PALAKKAD', 'B10W10', 'B10 PKD', 'PALAKKAD', 'B10@dapp.com'),
(11, 'B11', '1234567890', 'W11', 'PATHANAMTHITTA', 'B11W11', 'B11 PTH', 'AANAPAARA', 'B11@dapp.com'),
(12, 'B12', '1234567890', 'W12', 'THIRUVANANTHAPURAM', 'B12W12', 'B12 TVM', 'PALAYAM', 'B12@dapp.com'),
(13, 'B13', '1234567890', 'W13', 'THRISSUR', 'B13W13', 'B13 THR', 'THRISSUR', 'B13@dapp.com'),
(14, 'B14', '1234567890', 'W14', 'WAYANAD', 'B14W14', 'B14 WYD', 'WAYANAD', 'B14@dapp.com'),
(14, 'B14', '1234567890', 'W14', 'WAYANAD', 'B14W14', 'B14 WYD', 'WAYANAD', 'B14@dapp.com'),
(15, 'B15', '1234567890', 'W1', 'ALAPPUZHA', 'B15W1', 'B15 ALP', 'BEACH ROAD', 'B15@dapp.com'),
(16, 'B16', '1234567890', 'W2', 'ERNAKULAM', 'B16W2', 'B16 ERN', 'KUMBALANGI', 'B16@dapp.com'),
(17, 'B17', '1234567890', 'W3', 'IDUKKI', 'B17W3', 'B17 IDK', 'IDUKKI', 'B17@dapp.com'),
(18, 'B18', '1234567890', 'W4', 'KANNUR', 'B18W4', 'B18 KNR', 'PINARAI', 'B18@dapp.com'),
(19, 'B19', '1234567890', 'W5', 'KASARAGOD', 'B19W5', 'B19 KZR', 'KASARAGOD', 'B19@dapp.com'),
(20, 'B20', '1234567890', 'W6', 'KOLLAM', 'B20W6', 'B20 KLM', 'KADAPAKADA', 'B20@dapp.com'),
(21, 'B21', '1234567890', 'W7', 'KOTTAYAM', 'B21W7', 'B21 KTY', 'KOTTAYAM', 'B21@dapp.com'),
(22, 'B22', '1234567890', 'W8', 'KOZHIKODE', 'B22W8', 'B22 KZH', 'RAILWAY ROAD', 'B22@dapp.com'),
(23, 'B23', '1234567890', 'W9', 'MALAPPURAM', 'B23W9', 'B23 MLP', 'MALAPPURAM', 'B23@dapp.com'),
(24, 'B24', '1234567890', 'W10', 'PALAKKAD', 'B24W10', 'B24 PKD', 'MUKKADA', 'B24@dapp.com'),
(25, 'B25', '1234567890', 'W11', 'PATHANAMTHITTA', 'B25W11', 'B25 PTH', 'PATHANAMTHITTA', 'B25@dapp.com'),
(26, 'B26', '1234567890', 'W12', 'THIRUVANANTHAPURAM', 'B26W12', 'B26 TVM', 'KAZHAKOOTAM', 'B26@dapp.com'),
(27, 'B27', '1234567890', 'W13', 'THRISSUR', 'B27W13', 'B27 THR', 'ROUND', 'B27@dapp.com'),
(28, 'B28', '1234', 'W1', 'ALAPPUZHA', 'B28 BRANCH', 'B28 BRANCH alp', 'ALLAPY', 'B28@dapp'),
(28, 'B28', '1234', 'W1', 'ALAPPUZHA', 'B28 BRANCH', 'B28 BRANCH alp', 'ALLAPY', 'B28@dapp');

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `num` int(30) NOT NULL,
  `CargoID` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Mode` text NOT NULL,
  `SName` text NOT NULL,
  `SAddress` varchar(100) NOT NULL,
  `SDistrict` text NOT NULL,
  `SMobile` int(20) NOT NULL,
  `SEmail` varchar(50) NOT NULL,
  `SExactPlace` varchar(20) NOT NULL,
  `RName` text NOT NULL,
  `RAddress` varchar(100) NOT NULL,
  `RDistrict` text NOT NULL,
  `RMobile` int(20) NOT NULL,
  `REmail` varchar(50) NOT NULL,
  `RExactPlace` varchar(20) NOT NULL,
  `Product` varchar(30) NOT NULL,
  `Weight` int(30) NOT NULL,
  `Cost` int(30) NOT NULL,
  PRIMARY KEY (`CargoID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`num`, `CargoID`, `Date`, `Mode`, `SName`, `SAddress`, `SDistrict`, `SMobile`, `SEmail`, `SExactPlace`, `RName`, `RAddress`, `RDistrict`, `RMobile`, `REmail`, `RExactPlace`, `Product`, `Weight`, `Cost`) VALUES
(1, 'CRG1', '2020-08-04', 'train', 'Rensen S', 'zx', 'ALAPPUZHA', 1234567890, 'jhgv@hg.com', 'kollam', 'Nithin', 'mn', 'ERNAKULAM', 2147483647, 'mnbv@g.com', 'Kanjiracode', 'lap', 2, 1000),
(2, 'CRG2', '2020-08-04', 'road', 'sam', 'kajs ', 'ERNAKULAM', 1234567890, 'jhgv@hg.com', 'edapalli', 'thoma', 'hv', 'ALAPPUZHA', 2147483647, '23@g.com', 'klm', 'bike', 100, 100000),
(3, 'CRG3', '2020-08-04', 'train', 'dom', ',kjhb', 'IDUKKI', 2147483647, 'kjnb@h.com', 'kjh', 'john', ',mh', 'KANNUR', 2147483647, 'jhgv@hg.com', 'mukkada', 'watch', 1, 1000),
(4, 'CRG4', '2020-08-04', 'road', 'abin', 'kgjf', 'KANNUR', 2147483647, 'kjnb@h.com', 'bnm', 'shaji', 'kjhg', 'IDUKKI', 2147483647, 'kjmnmnb@h.com', 'munnar', 'phone', 2, 2555),
(5, 'CRG5', '2020-08-15', 'train', 'Rensen S', 'Kodimel puthen veedu, Kankiracode, Kundara PO', 'ALAPPUZHA', 2147483647, 'rensenselven@gmail.c', 'kollam', 'Nithin', 'Kodimel puthen veedu, Kankiracode, Kundara PO', 'KOTTAYAM', 2147483647, 'ni@g.com', 'pala', 'TV', 2, 1000),
(6, 'CRG6', '2020-09-17', 'train', 'Riya', 'kodimel puthen veedu', 'KOLLAM', 2147483647, 'riya@gmail.com', 'klm', 'sredha', 'lkjhgf', 'KOLLAM', 2147483647, 'kjh@kj.jhg', 'Kanjiracode', 'chain', 1, 2000),
(7, 'CRG7', '2020-09-17', 'train', 'Rensen S', 'Kodimel puthen veedu, Kankiracode, Kundara PO', 'ALAPPUZHA', 2147483647, 'rensenselven@gmail.c', 'ALAPPY', 'JOHN', 'JOHN VILLA', 'ERNAKULAM', 2147483647, 'JOHN@gmail.com', 'EDAPALLY', 'COMPUTER', 3, 3000),
(8, 'CRG8', '2020-09-22', 'road', 'SHYAM', 'JHG', 'ALAPPUZHA', 2147483647, 'RE@FG.JH', 'PARAVUR', 'DON', 'JHGFHJG', 'ERNAKULAM', 2147483647, 'RE@FG.JH', 'EDAPALLI', 'TV', 2, 1000),
(9, 'CRG9', '2020-09-22', 'road', 'sajeev', 'sajeev veedu', 'ALAPPUZHA', 2147483647, 'sa@g.com', 'klm', 'sumith', 'sumith villa', 'ERNAKULAM', 2147483647, 'sum@hg.co', 'vippin', 'car', 6000, 100000),
(10, 'CRG10', '2020-09-23', 'train', 'Rensen S', 'Kodimel puthen veedu, Kankiracode, Kundara PO', 'ALAPPUZHA', 2147483647, 'rensenselven@gmail.com', 'Kanjiracode', 'Nithin', 'NITHIN VILLA, Kankiracode, Kundara PO', 'ERNAKULAM', 2147483647, 'NIT@gmail.com', 'KLM', 'LAP', 2, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `cargoprocessing`
--

CREATE TABLE IF NOT EXISTS `cargoprocessing` (
  `num` int(30) NOT NULL,
  `CargoID` varchar(30) NOT NULL,
  `Mode` text NOT NULL,
  `SName` text NOT NULL,
  `SDistrict` text NOT NULL,
  `Rname` text NOT NULL,
  `RDistrict` text NOT NULL,
  `Product` varchar(30) NOT NULL,
  `Cost` int(30) NOT NULL,
  `Approve` varchar(30) NOT NULL,
  `Ship` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cargoprocessing`
--

INSERT INTO `cargoprocessing` (`num`, `CargoID`, `Mode`, `SName`, `SDistrict`, `Rname`, `RDistrict`, `Product`, `Cost`, `Approve`, `Ship`, `status`) VALUES
(1, 'CRG1', 'train', 'Rensen S', 'ALAPPUZHA', 'Nithin', 'ERNAKULAM', 'lap', 1000, 'Approved', 'Shipping', 'Successfully Delivered'),
(2, 'CRG2', 'road', 'sam', 'ERNAKULAM', 'thoma', 'ALAPPUZHA', 'bike', 100000, 'Approved', 'Shipping Pending', 'Not Delivered'),
(3, 'CRG3', 'train', 'dom', 'IDUKKI', 'john', 'KANNUR', 'watch', 1000, 'Approved', 'Shipping', 'Cargo Return'),
(4, 'CRG4', 'road', 'abin', 'KANNUR', 'shaji', 'IDUKKI', 'phone', 2555, 'Not Approved', 'Shipping Pending', 'Not Delivered'),
(5, 'CRG5', 'train', 'Rensen S', 'ALAPPUZHA', 'Nithin', 'KOTTAYAM', 'TV', 1000, 'Approved', 'Shipping', 'Successfully Delivered'),
(6, 'CRG6', 'train', 'Riya', 'KOLLAM', 'sredha', 'KOLLAM', 'chain', 2000, 'Not Approved', 'Shipping Pending', 'Not Delivered'),
(7, 'CRG7', 'train', 'Rensen S', 'ALAPPUZHA', 'JOHN', 'ERNAKULAM', 'COMPUTER', 3000, 'Approved', 'Shipping', 'Successfully Delivered'),
(8, 'CRG8', 'road', 'SHYAM', 'ALAPPUZHA', 'DON', 'ERNAKULAM', 'TV', 1000, 'Approved', 'Shipping', 'Cargo Return'),
(9, 'CRG9', 'road', 'sajeev', 'ALAPPUZHA', 'sumith', 'ERNAKULAM', 'car', 100000, 'Approved', 'Shipping', 'Successfully Delivered'),
(10, 'CRG10', 'train', 'Rensen S', 'ALAPPUZHA', 'Nithin', 'ERNAKULAM', 'LAP', 1000, 'Not Approved', 'Shipping Pending', 'Not Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `cargotodapp`
--

CREATE TABLE IF NOT EXISTS `cargotodapp` (
  `num` int(30) NOT NULL,
  `CargoID` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Mode` text NOT NULL,
  `SName` text NOT NULL,
  `SAddress` varchar(100) NOT NULL,
  `SDistrict` text NOT NULL,
  `SMobile` int(20) NOT NULL,
  `SEmail` varchar(50) NOT NULL,
  `SExactPlace` varchar(20) NOT NULL,
  `RName` text NOT NULL,
  `RAddress` varchar(100) NOT NULL,
  `RDistrict` text NOT NULL,
  `RMobile` int(20) NOT NULL,
  `REmail` varchar(50) NOT NULL,
  `RExactPlace` varchar(20) NOT NULL,
  `Product` varchar(30) NOT NULL,
  `Weight` int(30) NOT NULL,
  `Cost` int(30) NOT NULL,
  `AddToBlockchain` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cargotodapp`
--

INSERT INTO `cargotodapp` (`num`, `CargoID`, `Date`, `Mode`, `SName`, `SAddress`, `SDistrict`, `SMobile`, `SEmail`, `SExactPlace`, `RName`, `RAddress`, `RDistrict`, `RMobile`, `REmail`, `RExactPlace`, `Product`, `Weight`, `Cost`, `AddToBlockchain`) VALUES
(1, 'CRG1', '2020-08-04', 'train', 'Rensen S', 'zx', 'ALAPPUZHA', 1234567890, 'jhgv@hg.com', 'kollam', 'Nithin', 'mn', 'ERNAKULAM', 2147483647, 'mnbv@g.com', 'Kanjiracode', 'lap', 2, 1000, 'Added'),
(2, 'CRG2', '2020-08-04', 'road', 'sam', 'kajs ', 'ERNAKULAM', 1234567890, 'jhgv@hg.com', 'edapalli', 'thoma', 'hv', 'ALAPPUZHA', 2147483647, '23@g.com', 'klm', 'bike', 100, 100000, 'NotAdded'),
(3, 'CRG3', '2020-08-04', 'train', 'dom', ',kjhb', 'IDUKKI', 2147483647, 'kjnb@h.com', 'kjh', 'john', ',mh', 'KANNUR', 2147483647, 'jhgv@hg.com', 'mukkada', 'watch', 1, 1000, 'NotAdded'),
(4, 'CRG4', '2020-08-04', 'road', 'abin', 'kgjf', 'KANNUR', 2147483647, 'kjnb@h.com', 'bnm', 'shaji', 'kjhg', 'IDUKKI', 2147483647, 'kjmnmnb@h.com', 'munnar', 'phone', 2, 2555, 'NotAdded'),
(5, 'CRG5', '2020-08-15', 'train', 'Rensen S', 'Kodimel puthen veedu, Kankiracode, Kundara PO', 'ALAPPUZHA', 2147483647, 'rensenselven@gmail.c', 'kollam', 'Nithin', 'Kodimel puthen veedu, Kankiracode, Kundara PO', 'KOTTAYAM', 2147483647, 'ni@g.com', 'pala', 'TV', 2, 1000, 'NotAdded'),
(6, 'CRG6', '2020-09-17', 'train', 'Riya', 'kodimel puthen veedu', 'KOLLAM', 2147483647, 'riya@gmail.com', 'klm', 'sredha', 'lkjhgf', 'KOLLAM', 2147483647, 'kjh@kj.jhg', 'Kanjiracode', 'chain', 1, 2000, 'NotAdded'),
(7, 'CRG7', '2020-09-17', 'train', 'Rensen S', 'Kodimel puthen veedu, Kankiracode, Kundara PO', 'ALAPPUZHA', 2147483647, 'rensenselven@gmail.c', 'ALAPPY', 'JOHN', 'JOHN VILLA', 'ERNAKULAM', 2147483647, 'JOHN@gmail.com', 'EDAPALLY', 'COMPUTER', 3, 3000, 'NotAdded'),
(8, 'CRG8', '2020-09-22', 'road', 'SHYAM', 'JHG', 'ALAPPUZHA', 2147483647, 'RE@FG.JH', 'PARAVUR', 'DON', 'JHGFHJG', 'ERNAKULAM', 2147483647, 'RE@FG.JH', 'EDAPALLI', 'TV', 2, 1000, 'NotAdded'),
(9, 'CRG9', '2020-09-22', 'road', 'sajeev', 'sajeev veedu', 'ALAPPUZHA', 2147483647, 'sa@g.com', 'klm', 'sumith', 'sumith villa', 'ERNAKULAM', 2147483647, 'sum@hg.co', 'vippin', 'car', 6000, 100000, 'Added'),
(10, 'CRG10', '2020-09-23', 'train', 'Rensen S', 'Kodimel puthen veedu, Kankiracode, Kundara PO', 'ALAPPUZHA', 2147483647, 'rensenselven@gmail.com', 'Kanjiracode', 'Nithin', 'NITHIN VILLA, Kankiracode, Kundara PO', 'ERNAKULAM', 2147483647, 'NIT@gmail.com', 'KLM', 'LAP', 2, 1000, 'NotAdded');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `place` varchar(20) NOT NULL,
  `domain` text NOT NULL,
  `flag` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `place`, `domain`, `flag`) VALUES
('W1', '1234', 'ALAPPUZHA', 'warehouse', 1),
('W2', '1234', 'ERNAKULAM', 'warehouse', 1),
('W3', '1234', 'IDUKKI', 'warehouse', 1),
('W4', '1234', 'KANNUR', 'warehouse', 1),
('W5', '1234', 'KASARAGOD', 'warehouse', 1),
('W6', '1234', 'KOLLAM', 'warehouse', 1),
('W7', '1234', 'KOTTAYAM', 'warehouse', 1),
('W8', '1234', 'KOZHIKODE', 'warehouse', 1),
('W9', '1234', 'MALAPPURAM', 'warehouse', 1),
('W10', '1234', 'PALAKKAD', 'warehouse', 1),
('W11', '1234', 'PATHANAMTHITTA', 'warehouse', 1),
('W12', '1234', 'THIRUVANANTHAPURAM', 'warehouse', 1),
('W13', '1234', 'THRISSUR', 'warehouse', 1),
('W14', '1234', 'WAYANAD', 'warehouse', 0),
('B1', '1234567890', 'ALAPPUZHA', 'branch', 1),
('B2', '1234567890', 'ERNAKULAM', 'branch', 1),
('B3', '1234567890', 'IDUKKI', 'branch', 1),
('B3', '1234567890', 'IDUKKI', 'branch', 1),
('B4', '1234567890', 'KANNUR', 'branch', 1),
('B5', '1234567890', 'KASARAGOD', 'branch', 1),
('B6', '1234567890', 'KOLLAM', 'branch', 1),
('B7', '1234567890', 'KOTTAYAM', 'branch', 1),
('B8', '1234567890', 'KOZHIKODE', 'branch', 1),
('B9', '1234567890', 'MALAPPURAM', 'branch', 1),
('B10', '1234567890', 'PALAKKAD', 'branch', 1),
('B11', '1234567890', 'PATHANAMTHITTA', 'branch', 1),
('B12', '1234567890', 'THIRUVANANTHAPURAM', 'branch', 1),
('B13', '1234567890', 'THRISSUR', 'branch', 1),
('B14', '1234567890', 'WAYANAD', 'branch', 1),
('B14', '1234567890', 'WAYANAD', 'branch', 1),
('B15', '1234567890', 'ALAPPUZHA', 'branch', 1),
('B16', '1234567890', 'ERNAKULAM', 'branch', 1),
('B17', '1234567890', 'IDUKKI', 'branch', 1),
('B18', '1234567890', 'KANNUR', 'branch', 1),
('B19', '1234567890', 'KASARAGOD', 'branch', 1),
('B20', '1234567890', 'KOLLAM', 'branch', 1),
('B21', '1234567890', 'KOTTAYAM', 'branch', 1),
('B22', '1234567890', 'KOZHIKODE', 'branch', 1),
('B23', '1234567890', 'MALAPPURAM', 'branch', 0),
('B24', '1234567890', 'PALAKKAD', 'branch', 0),
('B25', '1234567890', 'PATHANAMTHITTA', 'branch', 0),
('B26', '1234567890', 'THIRUVANANTHAPURAM', 'branch', 0),
('B27', '1234567890', 'THRISSUR', 'branch', 0),
('B28', '1234567890', 'WAYANAD', 'branch', 1),
('B28', '1234567890', 'WAYANAD', 'branch', 1),
('STAFF1', '0987654321', 'ALAPPUZHA', 'staff', 1),
('STAFF2', '0987654321', 'ALAPPUZHA', 'staff', 1),
('STAFF3', '0987654321', 'ALAPPUZHA', 'staff', 1),
('STAFF4', '0987654321', 'ALAPPUZHA', 'staff', 1),
('STAFF5', '0987654321', 'ALAPPUZHA', 'staff', 1),
('STAFF6', '0987654321', 'ERNAKULAM', 'staff', 1),
('STAFF7', '0987654321', 'ERNAKULAM', 'staff', 1),
('STAFF7', '0987654321', 'ERNAKULAM', 'staff', 1),
('STAFF8', '0987654321', 'ERNAKULAM', 'staff', 0),
('STAFF9', '0987654321', 'ERNAKULAM', 'staff', 0),
('STAFF10', '0987654321', 'ERNAKULAM', 'staff', 1),
('STAFF10', '0987654321', 'ERNAKULAM', 'staff', 1),
('STAFF11', '0987654321', 'IDUKKI', 'staff', 1),
('STAFF12', '0987654321', 'IDUKKI', 'staff', 1),
('STAFF13', '0987654321', 'IDUKKI', 'staff', 0),
('STAFF14', '0987654321', 'IDUKKI', 'staff', 0),
('STAFF15', '0987654321', 'IDUKKI', 'staff', 1),
('STAFF16', '0987654321', 'IDUKKI', 'staff', 0),
('STAFF17', '0987654321', 'IDUKKI', 'staff', 0),
('STAFF17', '0987654321', 'IDUKKI', 'staff', 0),
('STAFF17', '0987654321', 'IDUKKI', 'staff', 0),
('STAFF17', '0987654321', 'IDUKKI', 'staff', 0),
('STAFF17', '0987654321', 'IDUKKI', 'staff', 0),
('STAFF17', '0987654321', 'IDUKKI', 'staff', 0),
('STAFF18', '0987654321', 'IDUKKI', 'staff', 0),
('STAFF19', '0987654321', 'IDUKKI', 'staff', 0),
('STAFF18', '0987654321', 'IDUKKI', 'staff', 0),
('STAFF19', '0987654321', 'IDUKKI', 'staff', 0),
('STAFF20', '0987654321', 'IDUKKI', 'staff', 1),
('STAFF21', '0987654321', 'KANNUR', 'staff', 0),
('STAFF22', '0987654321', 'KANNUR', 'staff', 1),
('STAFF23', '0987654321', 'KANNUR', 'staff', 0),
('STAFF24', '0987654321', 'KANNUR', 'staff', 0),
('STAFF25', '0987654321', 'KANNUR', 'staff', 0),
('STAFF25', '0987654321', 'KANNUR', 'staff', 0),
('STAFF26', '0987654321', 'KASARAGOD', 'staff', 0),
('STAFF27', '0987654321', 'KASARAGOD', 'staff', 0),
('STAFF28', '0987654321', 'KASARAGOD', 'staff', 0),
('STAFF29', '0987654321', 'KASARAGOD', 'staff', 0),
('STAFF30', '0987654321', 'KASARAGOD', 'staff', 0),
('STAFF31', '0987654321', 'KOLLAM', 'staff', 0),
('STAFF32', '0987654321', 'KOLLAM', 'staff', 0),
('STAFF33', '0987654321', 'KOLLAM', 'staff', 0),
('STAFF34', '0987654321', 'KOLLAM', 'staff', 0),
('STAFF35', '0987654321', 'KOLLAM', 'staff', 0),
('STAFF36', '0987654321', 'KOTTAYAM', 'staff', 0),
('STAFF37', '0987654321', 'KOTTAYAM', 'staff', 0),
('STAFF38', '0987654321', 'KOTTAYAM', 'staff', 0),
('STAFF39', '0987654321', 'KOTTAYAM', 'staff', 0),
('STAFF40', '0987654321', 'KOTTAYAM', 'staff', 0),
('STAFF41', '0987654321', 'KOZHIKODE', 'staff', 0),
('STAFF42', '0987654321', 'KOZHIKODE', 'staff', 0),
('STAFF43', '0987654321', 'KOZHIKODE', 'staff', 0),
('STAFF44', '0987654321', 'KOZHIKODE', 'staff', 0),
('STAFF45', '0987654321', 'KOZHIKODE', 'staff', 0),
('STAFF45', '0987654321', 'MALAPPURAM', 'staff', 0),
('STAFF46', '0987654321', 'MALAPPURAM', 'staff', 0),
('STAFF47', '0987654321', 'MALAPPURAM', 'staff', 0),
('STAFF48', '0987654321', 'MALAPPURAM', 'staff', 0),
('STAFF49', '0987654321', 'MALAPPURAM', 'staff', 0),
('STAFF50', '0987654321', 'MALAPPURAM', 'staff', 0),
('STAFF51', '0987654321', 'PALAKKAD', 'staff', 0),
('STAFF52', '0987654321', 'PALAKKAD', 'staff', 0),
('STAFF53', '0987654321', 'PALAKKAD', 'staff', 0),
('STAFF54', '0987654321', 'PALAKKAD', 'staff', 0),
('STAFF55', '0987654321', 'PALAKKAD', 'staff', 0),
('STAFF56', '0987654321', 'PATHANAMTHITTA', 'staff', 0),
('STAFF57', '0987654321', 'PATHANAMTHITTA', 'staff', 0),
('STAFF58', '0987654321', 'PATHANAMTHITTA', 'staff', 0),
('STAFF59', '0987654321', 'PATHANAMTHITTA', 'staff', 0),
('STAFF60', '0987654321', 'PATHANAMTHITTA', 'staff', 0),
('STAFF61', '0987654321', 'THIRUVANANTHAPURAM', 'staff', 0),
('STAFF62', '0987654321', 'THIRUVANANTHAPURAM', 'staff', 0),
('STAFF63', '0987654321', 'THIRUVANANTHAPURAM', 'staff', 0),
('STAFF64', '0987654321', 'THIRUVANANTHAPURAM', 'staff', 0),
('STAFF65', '0987654321', 'THIRUVANANTHAPURAM', 'staff', 0),
('STAFF66', '0987654321', 'THRISSUR', 'staff', 0),
('STAFF67', '0987654321', 'THRISSUR', 'staff', 0),
('STAFF68', '0987654321', 'THRISSUR', 'staff', 0),
('STAFF69', '0987654321', 'THRISSUR', 'staff', 0),
('STAFF70', '0987654321', 'THRISSUR', 'staff', 0),
('STAFF71', '0987654321', 'WAYANAD', 'staff', 0),
('STAFF72', '0987654321', 'WAYANAD', 'staff', 0),
('STAFF73', '0987654321', 'WAYANAD', 'staff', 0),
('STAFF74', '0987654321', 'WAYANAD', 'staff', 0),
('STAFF75', '0987654321', 'WAYANAD', 'staff', 0),
('B29', '1234567890', 'ALAPPUZHA', 'branch', 0),
('B30', '1234567890', 'ALAPPUZHA', 'branch', 0),
('W15', '1234', 'THIRUVANANTHAPURAM', 'warehouse', 0),
('B31', '1234567890', 'ALAPPUZHA', 'branch', 0),
('B28', '1234', 'ALAPPUZHA', 'branch', 1),
('W16', '1234', 'KOLLAM', 'warehouse', 1),
('B28', '1234', 'ALAPPUZHA', 'branch', 1),
('B28', '1234', 'ALAPPUZHA', 'branch', 1),
('W17', '1234', 'ALAPPUZHA', 'warehouse', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `num` int(10) NOT NULL,
  `id` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(30) NOT NULL,
  `Warehouse District` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`num`, `id`, `name`, `password`, `Warehouse District`, `Email`) VALUES
(1, 'STAFF1', 'AKASH', '0987654321', 'ALAPPUZHA', 'STAFF1@dapp.com'),
(2, 'STAFF2', 'AKSHAY', '0987654321', 'ALAPPUZHA', 'STAFF2@dapp.com'),
(3, 'STAFF3', 'NITHIN', '0987654321', 'ALAPPUZHA', 'STAFF3@dapp.com'),
(4, 'STAFF4', 'SYAM', '0987654321', 'ALAPPUZHA', 'STAFF4@dapp.com'),
(5, 'STAFF5', 'NIDHEESH', '0987654321', 'ALAPPUZHA', 'STAFF5@dapp.com'),
(6, 'STAFF6', 'MAHARAJA', '0987654321', 'ERNAKULAM', 'STAFF6@dapp.com'),
(12, 'STAFF12', 'HARI', '0987654321', 'IDUKKI', 'STAFF12@dapp.com'),
(7, 'STAFF7', 'RENSEN', '0987654321', 'ERNAKULAM', 'STAFF7@dapp.com'),
(8, 'STAFF8', 'SHAFI', '0987654321', 'ERNAKULAM', 'STAFF8@dapp.com'),
(9, 'STAFF9', 'SHANU', '0987654321', 'ERNAKULAM', 'STAFF9@dapp.com'),
(11, 'STAFF11', 'ABILAL', '0987654321', 'IDUKKI', 'STAFF11@dapp.com'),
(10, 'STAFF10', 'JOSHIN', '0987654321', 'ERNAKULAM', 'STAFF10@dapp.com'),
(13, 'STAFF13', 'ANANDHU', '0987654321', 'IDUKKI', 'STAFF13@dapp.com'),
(14, 'STAFF14', 'SARATH', '0987654321', 'IDUKKI', 'STAFF14@dapp.com'),
(15, 'STAFF15', 'ABIJITH', '0987654321', 'IDUKKI', 'STAFF15@dapp.com'),
(16, 'STAFF16', 'SANKAR', '0987654321', 'IDUKKI', 'STAFF16@dapp.com'),
(22, 'STAFF22', 'KRIPA', '0987654321', 'KANNUR', 'STAFF22@dapp.com'),
(18, 'STAFF18', 'SREERAM', '0987654321', 'IDUKKI', 'STAFF18@dapp.com'),
(19, 'STAFF19', 'MANU', '0987654321', 'IDUKKI', 'STAFF19@dapp.com'),
(20, 'STAFF20', 'MARKWAUGH', '0987654321', 'IDUKKI', 'STAFF20@dapp.com'),
(21, 'STAFF21', 'ARCHANA', '0987654321', 'KANNUR', 'STAFF21@dapp.com'),
(17, 'STAFF17', 'SEBASTIAN', '0987654321', 'IDUKKI', 'STAFF17@dapp.com'),
(23, 'STAFF23', 'BENCY', '0987654321', 'KANNUR', 'STAFF23@dapp.com'),
(24, 'STAFF24', 'LIMI', '0987654321', 'KANNUR', 'STAFF24@dapp.com'),
(25, 'STAFF25', 'SWATHY', '0987654321', 'KANNUR', 'STAFF25@dapp.com'),
(26, 'STAFF26', 'PANJAMI', '0987654321', 'KASARAGOD', 'STAFF26@dapp.com'),
(27, 'STAFF27', 'MAHIMA', '0987654321', 'KASARAGOD', 'STAFF27@dapp.com'),
(28, 'STAFF28', 'RADHIKA', '0987654321', 'KASARAGOD', 'STAFF28@dapp.com'),
(29, 'STAFF29', 'LEENA', '0987654321', 'KASARAGOD', 'STAFF29@dapp.com'),
(30, 'STAFF30', 'EVLIN', '0987654321', 'KASARAGOD', 'STAFF30@dapp.com'),
(31, 'STAFF31', 'SRUTHI', '0987654321', 'KOLLAM', 'STAFF31@dapp.com'),
(32, 'STAFF32', 'PRAVEEN', '0987654321', 'KOLLAM', 'STAFF32@dapp.com'),
(33, 'STAFF33', 'ALEN', '0987654321', 'KOLLAM', 'STAFF33@dapp.com'),
(34, 'STAFF34', 'ANU', '0987654321', 'KOLLAM', 'STAFF34@dapp.com'),
(35, 'STAFF35', 'JOHN', '0987654321', 'KOLLAM', 'STAFF35@dapp.com'),
(36, 'STAFF36', 'LEKSHMI', '0987654321', 'KOTTAYAM', 'STAFF36@dapp.com'),
(37, 'STAFF37', 'DEENA', '0987654321', 'KOTTAYAM', 'STAFF37@dapp.com'),
(38, 'STAFF38', 'SAM', '0987654321', 'KOTTAYAM', 'STAFF38@dapp.com'),
(39, 'STAFF39', 'ABHIRAMI', '0987654321', 'KOTTAYAM', 'STAFF39@dapp.com'),
(40, 'STAFF40', 'HARITHA', '0987654321', 'KOTTAYAM', 'STAFF40@dapp.com'),
(41, 'STAFF41', 'GREESHMA', '0987654321', 'KOZHIKODE', 'STAFF41@dapp.com'),
(42, 'STAFF42', 'ANVAR', '0987654321', 'KOZHIKODE', 'STAFF42@dapp.com'),
(43, 'STAFF43', 'AYANA', '0987654321', 'KOZHIKODE', 'STAFF43@dapp.com'),
(44, 'STAFF44', 'SREENATH', '0987654321', 'KOZHIKODE', 'STAFF44@dapp.com'),
(45, 'STAFF45', 'AISWARIYA', '0987654321', 'MALAPPURAM', 'STAFF45@dapp.com'),
(46, 'STAFF46', 'NAYAN', '0987654321', 'MALAPPURAM', 'STAFF46@dapp.com'),
(47, 'STAFF47', 'MERLIN', '0987654321', 'MALAPPURAM', 'STAFF47@dapp.com'),
(48, 'STAFF48', 'NUHIM', '0987654321', 'MALAPPURAM', 'STAFF48@dapp.com'),
(49, 'STAFF49', 'SIBI', '0987654321', 'MALAPPURAM', 'STAFF49@dapp.com'),
(50, 'STAFF50', 'RENI', '0987654321', 'MALAPPURAM', 'STAFF50@dapp.com'),
(51, 'STAFF51', 'RAHUL', '0987654321', 'PALAKKAD', 'STAFF51@dapp.com'),
(52, 'STAFF52', 'SANDEEP', '0987654321', 'PALAKKAD', 'STAFF52@dapp.com'),
(53, 'STAFF53', 'SARIG', '0987654321', 'PALAKKAD', 'STAFF53@dapp.com'),
(54, 'STAFF54', 'THANUJA', '0987654321', 'PALAKKAD', 'STAFF54@dapp.com'),
(55, 'STAFF55', 'TEJO', '0987654321', 'PALAKKAD', 'STAFF55@dapp.com'),
(56, 'STAFF56', 'ANAZ', '0987654321', 'PATHANAMTHITTA', 'STAFF56@dapp.com'),
(57, 'STAFF57', 'RAGAV', '0987654321', 'PATHANAMTHITTA', 'STAFF57@dapp.com'),
(58, 'STAFF58', 'SHIJINA', '0987654321', 'PATHANAMTHITTA', 'STAFF58@dapp.com'),
(59, 'STAFF59', 'SURABY', '0987654321', 'PATHANAMTHITTA', 'STAFF59@dapp.com'),
(60, 'STAFF60', 'TONY', '0987654321', 'PATHANAMTHITTA', 'STAFF60@dapp.com'),
(61, 'STAFF61', 'BENSON', '0987654321', 'THIRUVANANTHAPURAM', 'STAFF61@dapp.com'),
(62, 'STAFF62', 'DENNY MON', '0987654321', 'THIRUVANANTHAPURAM', 'STAFF62@dapp.com'),
(63, 'STAFF63', 'AKHIL', '0987654321', 'THIRUVANANTHAPURAM', 'STAFF63@dapp.com'),
(64, 'STAFF64', 'BIVIM', '0987654321', 'THIRUVANANTHAPURAM', 'STAFF64@dapp.com'),
(65, 'STAFF65', 'SIBI', '0987654321', 'THIRUVANANTHAPURAM', 'STAFF65@dapp.com'),
(66, 'STAFF66', 'CHRISTY', '0987654321', 'THRISSUR', 'STAFF66@dapp.com'),
(67, 'STAFF67', 'TOM', '0987654321', 'THRISSUR', 'STAFF67@dapp.com'),
(68, 'STAFF68', 'SUNNY', '0987654321', 'THRISSUR', 'STAFF68@dapp.com'),
(69, 'STAFF69', 'SNEHA', '0987654321', 'THRISSUR', 'STAFF69@dapp.com'),
(70, 'STAFF70', 'SOJAN', '0987654321', 'THRISSUR', 'STAFF70@dapp.com'),
(71, 'STAFF71', 'CHAKKI', '0987654321', 'WAYANAD', 'STAFF71@dapp.com'),
(72, 'STAFF72', 'BHEEM', '0987654321', 'WAYANAD', 'STAFF72@dapp.com'),
(73, 'STAFF73', 'SUNNY', '0987654321', 'WAYANAD', 'STAFF73@dapp.com'),
(74, 'STAFF74', 'SUBBER', '0987654321', 'WAYANAD', 'STAFF74@dapp.com'),
(75, 'STAFF75', 'AZADH', '0987654321', 'WAYANAD', 'STAFF75@dapp.com');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE IF NOT EXISTS `warehouse` (
  `num` int(10) NOT NULL,
  `id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Warehouse District` text NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`num`, `id`, `password`, `Warehouse District`, `Email`) VALUES
(1, 'W1', '1234', 'ALAPPUZHA', 'W1@dapp.com'),
(2, 'W2', '1234', 'ERNAKULAM', 'W2@dapp.com'),
(3, 'W3', '1234', 'IDUKKI', 'W3@dapp.com'),
(4, 'W4', '1234', 'KANNUR', 'W4@dapp.com'),
(5, 'W5', '1234', 'KASARAGOD', 'W5@dapp.com'),
(6, 'W6', '1234', 'KOLLAM', 'W6@dapp.com'),
(7, 'W7', '1234', 'KOTTAYAM', 'W7@dapp.com'),
(8, 'W8', '1234', 'KOZHIKODE', 'W8@dapp.com'),
(9, 'W9', '1234', 'MALAPPURAM', 'W9@dapp.com'),
(10, 'W10', '1234', 'PALAKKAD', 'W10@dapp.com'),
(11, 'W11', '1234', 'PATHANAMTHITTA', 'W11@dapp.com'),
(12, 'W12', '1234', 'THIRUVANANTHAPURAM', 'W12@dapp.com'),
(13, 'W13', '1234', 'THRISSUR', 'W13@dapp.com'),
(14, 'W14', '1234', 'WAYANAD', 'W14@dapp.com'),
(15, 'W15', '1234', 'THIRUVANANTHAPURAM', 'W15@DAPP.COM'),
(16, 'W16', '1234', 'KOLLAM', 'W16@Dapp.com'),
(17, 'W17', '1234', 'ALAPPUZHA', 'w17@d.com');
