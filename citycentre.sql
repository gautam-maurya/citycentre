-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2018 at 06:20 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citycentre`
--

-- --------------------------------------------------------

--
-- Table structure for table `buys`
--

CREATE TABLE `buys` (
  `Cid` int(5) NOT NULL,
  `Mid` int(5) NOT NULL,
  `Quantity` int(5) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buys`
--

INSERT INTO `buys` (`Cid`, `Mid`, `Quantity`) VALUES
(1, 1, 55),
(1, 2, 102),
(1, 4, 1),
(1, 5, 2),
(1, 6, 1),
(1, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Cid` int(5) NOT NULL,
  `Mid` int(5) NOT NULL,
  `Quantity` int(5) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cid` int(5) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(40) NOT NULL,
  `PhoneNo` varchar(12) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `lin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cid`, `Fname`, `Lname`, `DOB`, `Email`, `PhoneNo`, `Password`, `lin`) VALUES
(1, 'Gautam', 'Maurya', '1999-06-30', 'gautammaurya552@gmail.com', '9004820117', '*9V%U=&%M0#$R,P``\n`\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `ID` int(5) NOT NULL,
  `Model` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `RAM` int(2) NOT NULL,
  `ROM` int(5) NOT NULL,
  `Exmem` int(5) NOT NULL,
  `Display` float NOT NULL,
  `Backcam` varchar(10) NOT NULL,
  `Frontcam` varchar(10) NOT NULL,
  `Battery` int(5) NOT NULL,
  `Processor` varchar(40) NOT NULL,
  `Price` int(10) NOT NULL,
  `Warranty` int(2) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Reorder` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`ID`, `Model`, `Name`, `RAM`, `ROM`, `Exmem`, `Display`, `Backcam`, `Frontcam`, `Battery`, `Processor`, `Price`, `Warranty`, `Quantity`, `Reorder`) VALUES
(1, 'Mi', 'Redmi Note 5 Pro', 4, 64, 128, 5.99, '12MP+5MP', '20MP', 4000, 'Qualcomm Snapdragon 636', 14999, 1, 445, 10),
(2, 'Mi', 'Redmi Note 5', 4, 64, 128, 5.99, '12MP', '5MP', 4000, 'Qualcomm Snapdragon 625', 11999, 1, 398, 10),
(3, 'Mi', 'Redmi 4A', 3, 32, 128, 5, '13MP', '5MP', 3120, 'Qualcomm Snapdragon 425', 6999, 1, 500, 10),
(4, 'Mi', 'Mi A2', 4, 64, 256, 5.99, '12MP+20MP', '20MP', 3010, 'Qualcomm Snapdragon 660 AIE', 16999, 1, 499, 10),
(5, 'Mi', 'Poco F1', 6, 64, 128, 6.18, '12MP+5MP', '20MP', 4000, 'Qualcomm Snapdragon 845', 20999, 1, 498, 10),
(6, 'Mi', 'Redmi 5A', 2, 16, 128, 5, '13MP', '5MP', 3000, 'Qualcomm Snapdragon 425', 5999, 1, 499, 10),
(7, 'OnePlus', 'OnePlus 5', 8, 128, 0, 5.5, '16MP+20MP', '16MP', 3000, 'Qualcomm Snapdragon 835', 32999, 1, 500, 10),
(8, 'OnePlus', 'OnePlus 5t', 6, 64, 0, 6.01, '16MP+20MP', '16MP', 3300, 'Qualcomm MSM8998 Snapdragon 835', 33999, 1, 500, 10),
(9, 'OnePlus', 'OnePlus 6', 8, 128, 0, 6.28, '16MP+20MP', '16MP', 3300, 'Qualcomm MSM8998 Snapdragon 835', 35999, 1, 500, 10),
(10, 'Honor', 'Honor 7A', 3, 32, 256, 5.7, '13MP+2MP', '8MP', 3000, 'Qualcomm Snapdragon Octa Core', 8999, 1, 500, 10),
(11, 'Honor', 'Honor 9 Lite', 3, 32, 256, 5.65, '13MP+2MP', '13MP+2MP', 3000, 'Kirin 659', 10999, 1, 500, 10),
(12, 'Honor', 'Honor 9i', 4, 64, 128, 5.9, '16MP+2MP', '13MP+2MP', 3340, 'Kirin 659 Octa Core', 15999, 1, 499, 10),
(13, 'Honor', 'Honor 10', 6, 128, 0, 5.84, '24MP+16MP', '24MP', 3400, 'Kirin 970', 32999, 1, 500, 10),
(14, 'Honor', 'Honor 9N', 3, 32, 256, 5.84, '13MP+2MP', '16MP', 3000, 'Kirin 659', 8999, 1, 500, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buys`
--
ALTER TABLE `buys`
  ADD PRIMARY KEY (`Cid`,`Mid`),
  ADD KEY `Mid` (`Mid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cid`,`Mid`),
  ADD KEY `Mid` (`Mid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
