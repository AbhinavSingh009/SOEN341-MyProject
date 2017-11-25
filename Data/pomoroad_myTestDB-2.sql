-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2017 at 03:09 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pomoroad_myTestDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Client`
--

CREATE TABLE `Client` (
  `clientId` int(100) NOT NULL,
  `firstName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `physicalAddress` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emailAddress` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `Username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Client`
--

INSERT INTO `Client` (`clientId`, `firstName`, `lastName`, `physicalAddress`, `emailAddress`, `phoneNumber`, `isAdmin`, `Username`, `password`) VALUES
(66666, 'Emmanuel', 'Uhegbu', 'nigeria', 'uhegbuemmanuel@gmail.com', '6738838494', 1, 'lylkyd', 'port'),
(66667, 'Ogogoro', 'Shitor', 'montreal', 'prickyheat@otondo.com', '38893849', 0, 'lucky', 'lucky123');

-- --------------------------------------------------------

--
-- Table structure for table `Desktop`
--

CREATE TABLE `Desktop` (
  `brandname` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modelNumber` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `price` int(20) DEFAULT NULL,
  `weight` int(20) DEFAULT NULL,
  `processorType` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ramSize` int(20) DEFAULT NULL,
  `hdSize` int(20) DEFAULT NULL,
  `noCPU` int(20) DEFAULT NULL,
  `dimensions` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Desktop`
--

INSERT INTO `Desktop` (`brandname`, `modelNumber`, `price`, `weight`, `processorType`, `ramSize`, `hdSize`, `noCPU`, `dimensions`) VALUES
('sony', '84885595958484', 1000, 9, 'interlinks', 6, 40, 4, '10X10X20'),
(NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('HIATA', 'KSDFKJK', 23434, 398459, 'JKDJSKF', 93489, 9834989, 93849939, '348934');

-- --------------------------------------------------------

--
-- Table structure for table `Laptop`
--

CREATE TABLE `Laptop` (
  `brandname` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modelNumber` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `price` int(20) DEFAULT NULL,
  `weight` int(20) DEFAULT NULL,
  `processorType` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ramSize` int(20) DEFAULT NULL,
  `hdSize` int(20) DEFAULT NULL,
  `noCPU` int(20) DEFAULT NULL,
  `displaySize` int(20) DEFAULT NULL,
  `battInfo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `os` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Laptop`
--

INSERT INTO `Laptop` (`brandname`, `modelNumber`, `price`, `weight`, `processorType`, `ramSize`, `hdSize`, `noCPU`, `displaySize`, `battInfo`, `os`) VALUES
('jdsjkfjk', 'skdjfkj', 0, 0, 'kjksdjkf', 6, 0, 0, 0, 'pdfd', 'sdfd'),
('Toshiba', 'jsdkfjijk', 500, 69, 'intel', 70, 700, 5, 70, '678', 'Microsoft');

-- --------------------------------------------------------

--
-- Table structure for table `MonitorDisplay`
--

CREATE TABLE `MonitorDisplay` (
  `m_DisplaySize` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_Weight` int(20) NOT NULL,
  `m_brandName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `m_ModelNumber` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `m_Price` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Tablet`
--

CREATE TABLE `Tablet` (
  `brandname` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modelNumber` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `price` int(20) DEFAULT NULL,
  `weight` int(20) DEFAULT NULL,
  `processorType` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ramSize` int(20) DEFAULT NULL,
  `hdSize` int(20) DEFAULT NULL,
  `noCPU` int(20) DEFAULT NULL,
  `displaySize` int(20) DEFAULT NULL,
  `battInfo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `os` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cameraInfo` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dimensions` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `UserLog`
--

CREATE TABLE `UserLog` (
  `eventNumber` int(11) NOT NULL,
  `clientId` int(100) NOT NULL,
  `isLoggedIn` tinyint(1) NOT NULL,
  `logTimestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `UserLog`
--

INSERT INTO `UserLog` (`eventNumber`, `clientId`, `isLoggedIn`, `logTimestamp`) VALUES
(56, 66666, 1, '2017-10-22 18:57:01'),
(57, 66666, 0, '2017-11-12 02:16:40'),
(58, 66667, 1, '2017-11-12 02:16:40'),
(59, 66667, 0, '2017-11-12 03:08:42'),
(60, 66666, 1, '2017-11-12 03:08:42'),
(61, 66666, 0, '2017-11-12 03:08:54'),
(62, 66667, 1, '2017-11-12 03:08:54'),
(63, 66667, 0, '2017-11-12 03:42:41'),
(64, 66666, 1, '2017-11-12 03:42:41'),
(65, 66666, 0, '2017-11-12 03:42:51'),
(66, 66667, 1, '2017-11-12 03:42:51'),
(67, 66667, 0, '2017-11-19 19:26:28'),
(68, 66666, 1, '2017-11-19 19:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `Wishlist`
--

CREATE TABLE `Wishlist` (
  `ItemID` int(11) NOT NULL,
  `ModelNumber` varchar(255) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`clientId`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `Desktop`
--
ALTER TABLE `Desktop`
  ADD PRIMARY KEY (`modelNumber`);

--
-- Indexes for table `Laptop`
--
ALTER TABLE `Laptop`
  ADD PRIMARY KEY (`modelNumber`);

--
-- Indexes for table `MonitorDisplay`
--
ALTER TABLE `MonitorDisplay`
  ADD PRIMARY KEY (`m_ModelNumber`);

--
-- Indexes for table `Tablet`
--
ALTER TABLE `Tablet`
  ADD PRIMARY KEY (`modelNumber`);

--
-- Indexes for table `UserLog`
--
ALTER TABLE `UserLog`
  ADD PRIMARY KEY (`eventNumber`);

--
-- Indexes for table `Wishlist`
--
ALTER TABLE `Wishlist`
  ADD PRIMARY KEY (`ItemID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Client`
--
ALTER TABLE `Client`
  MODIFY `clientId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66668;

--
-- AUTO_INCREMENT for table `UserLog`
--
ALTER TABLE `UserLog`
  MODIFY `eventNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `Wishlist`
--
ALTER TABLE `Wishlist`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
