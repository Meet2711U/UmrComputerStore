-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2020 at 08:33 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umrshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `UserName`, `Password`) VALUES
(1, 'admin', 'admin'),
(2, 'ravi', 'ravi123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartId` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `ItemId` varchar(20) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` decimal(30,0) NOT NULL,
  `Total` decimal(30,0) NOT NULL,
  `OrderDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartId`, `CustomerId`, `ItemId`, `Quantity`, `Price`, `Total`, `OrderDate`) VALUES
(1, 7, '21', 1, '43242', '43242', '2020-02-26'),
(2, 7, '2', 5, '95000', '475000', '2020-02-26'),
(6, 2, '23', 1, '31000', '31000', '2020-03-01'),
(7, 2, '1', 1, '109500', '109500', '2020-03-01'),
(10, 16, '2', 1, '95000', '95000', '2020-03-02'),
(22, 1, '23', 1, '31000', '31000', '2020-03-06'),
(23, 17, '16', 1, '7200', '7200', '2020-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(20) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryId`, `CategoryName`, `Image`) VALUES
(1, 'LAPTOPS', 'images/img1.png'),
(2, 'MOTHERBOARDS', 'images/img2.png'),
(3, 'PROCESSORS', 'images/img3.png'),
(4, 'RAM', 'images/img4.png'),
(5, 'GRAPHICS CARD', 'images/img5.png'),
(6, 'MONITORS', 'images/img6.png');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `OrderId` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `ItemId` varchar(20) NOT NULL,
  `Total` decimal(30,0) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` decimal(30,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`OrderId`, `CustomerId`, `ItemId`, `Total`, `Quantity`, `Price`) VALUES
(19, 1, '26', '31200', 1, '31200'),
(20, 1, '43', '40000', 1, '40000'),
(21, 1, '43', '40000', 1, '40000'),
(22, 1, '12', '6500', 1, '6500'),
(23, 1, '12', '6500', 1, '6500'),
(24, 1, '12', '6500', 1, '6500'),
(25, 17, '16', '7200', 1, '7200');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` int(11) NOT NULL,
  `CustomerName` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `CustomerName`, `Address`, `Email`, `Mobile`, `UserName`, `Password`) VALUES
(1, 'Meet', '27,amikunj society ', 'meet2711@gmail.com', 9998865151, 'meet', '123'),
(2, 'harsh', '32 sahjanand society', 'zak@gmail.com', 9996635121, 'harsh1', '12345'),
(15, 'vimesh', '', '', 0, 'vimsesh', '18vim'),
(16, 'yash', '', '', 0, 'yash5', '102'),
(17, 'zayamee', '2 ambika colony', 'meet9559@gmail.com', 9595959595, 'zayamee', '789');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackId` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackId`, `CustomerId`, `Feedback`, `Date`) VALUES
(1, 1, 'hello', '2020-03-06'),
(2, 1, ' i nedd laptop', '2020-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ItemId` int(11) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `ItemName` varchar(25) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Price` decimal(30,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ItemId`, `CategoryId`, `ItemName`, `Description`, `Image`, `Price`) VALUES
(1, 1, 'Msi GE65 Raider', '(9th Gen intel core i7 processor / 8gb ram / 1 Tb / GeForce RTX 20 series)', 'itm1.png', '109500'),
(2, 1, 'Msi GP65 Leopard', '(9th Gen intel core i5 processor / 12gb ram / 1 tb / GeForce RTX 20 series)', 'itm2.png', '95000'),
(3, 1, 'Msi GT75', '(9th Gen intel core i7 processor / 18gb ram / 1 Tb / GeForce gtx 10 series)', 'itm3.png', '98000'),
(4, 1, 'Msi GE67 Stealth', '(9th Gen intel core i3 processor / 8gb ram / 1 Tb / GeForce gtx 10 series)', 'itm4.png', '71000'),
(5, 1, 'Msi GE45 Raider', '(8th Gen intel core i5 processor / 12gb ram / 1 Tb / GeForce gtx 10 series)', 'itm5.png', '76000'),
(6, 1, 'Msi GT85 Titan ', '(9th Gen intel core i7 processor / 18gb ram / 1 Tb / GeForce RTX 2080 series)', 'itm6.png', '110000'),
(7, 1, 'Msi GS60 Hyper', '(9th Gen intel core i3 processor / 8gb ram / 1 Tb / GeForce gtx 10 series)', 'itm7.png', '55000'),
(8, 1, 'MSI GP55 Alpha', '(9th Gen intel core i5 processor / 8gb ram / 500 gb / GeForce gtx 10 series)', 'itm8.png', '68000'),
(9, 1, 'Msi R652 Pro', '(7th Gen intel core i7 processor / 18gb ram / 1 Tb / GeForce gtx 16 series)', 'itm9.png', '66000'),
(10, 1, 'Msi R652', '(7th Gen intel core i5 processor / 8gb ram / 1 Tb / GeForce gtx 10 series)', 'itm10.png', '52000'),
(11, 2, 'Msi B450 Tomahawk', 'Socket AM4 / AMD B450 Chipset / 6 x SATA & 6 x USB Ports / DDR4 (max 64GB, 4 slots) / HDMI and DVI / ATX Form Factor', 'itm11.png', '7000'),
(12, 2, 'Msi X470 Plus', 'Socket AM4 / AMD B450 Chipset / 6 x SATA & 6 x USB Ports / DDR4 (max 64GB, 4 slots) / HDMI and DVI / ATX Form Factor', 'itm12.png', '6500'),
(13, 2, 'Msi H310M', 'Socket 1151 / Intel Z390 Chipset / 6 x SATA & 6 x USB Ports / DDR4 (max 64GB, 4 slots) / HDMI and DVI / ATX Form Factor', 'itm13.png', '5000'),
(14, 2, 'Msi MPG Z390', 'Socket 1151 / Intel Z390 Chipset / 6 x SATA & 6 x USB Ports / DDR4 (max 64GB, 4 slots) / HDMI and DVI / ATX Form Factor', 'itm14.png', '6200'),
(15, 2, 'Msi B450M Max', 'Socket AM4 / AMD B450 Chipset / 4 x SATA & 6 x USB Ports / DDR4 (max 32GB, 2 slots) / HDMI and DVI / mATX Form Factor', 'itm15.png', '4500'),
(16, 2, 'Msi Z390A-Pro', 'Socket 1151 / ntel Z390 Chipset / 4 x SATA & 6 x USB Ports / DDR4 (max 32GB, 2 slots) / HDMI and DVI / mATX Form Factor', 'itm16.png', '7200'),
(17, 2, 'Msi MPG Z390', 'Socket 1151 / Intel Z390 Chipset / 6 x SATA & 6 x USB Ports / DDR4 (max 64GB, 4 slots) / HDMI and DVI / ATX Form Factor', 'itm17.png', '5800'),
(18, 2, 'Msi B365M Pro', 'Socket 1151 / Intel Z390 Chipset / 6 x SATA & 6 x USB Ports / DDR4 (max 64GB, 4 slots) / HDMI and DVI / ATX Form Factor', 'itm18.png', '6700'),
(19, 2, 'Msi B450I', 'Socket AM4 / AMD B450 Chipset /4 x SATA & 6 x USB Ports / DDR4 (max 32GB, 2 slots) / HDMI and DVI / ATX Form Factor', 'itm19.png', '4900'),
(20, 2, 'Msi MPG Z370', 'Socket 1151 / Intel Z390 Chipset /4 x SATA & 6 x USB Ports / DDR4 (max 32GB, 2 slots) / HDMI and DVI / mATX Form Factor', 'itm20.png', '11000'),
(21, 3, 'Intel core i9-9000KS', '16 MB Intel Smart Cache / 8 Cores / 16 Threads / 5.00 GHz Max Frequency / 9th gen', 'itm21.png', '43242'),
(22, 3, 'Intel core i9-9900', '16 MB Intel Smart Cache / 8 Cores / 8 Threads / 4.00 GHz Max Frequency / 9th gen', 'itm21.png', '38000'),
(23, 3, 'Intel core i9-9880H', '12 MB Intel Smart Cache / 8 Cores / 16 Threads / 4.80 GHz Max Frequency / 9th gen', 'itm21.png', '31000'),
(24, 3, 'Intel core i7-10510Y', '8 MB Intel Smart Cache / 4 Cores / 8 Threads / 4.50 GHz Max Frequency / 10th gen', 'itm24.png', '35916'),
(25, 3, 'Intel core i7-10710U', '12 MB Intel Smart Cache / 6 Cores / 12 Threads / 4.70 GHz Max Frequency / 10th gen', 'itm24.png', '39000'),
(26, 3, 'Intel core i7-1065G7', '8 MB Intel Smart Cache / 4 Cores / 8 Threads / 3.70 GHz Max Frequency / 10th gen', 'itm24.png', '31200'),
(27, 3, 'Intel core i5-10210U', '6 MB Intel Smart Cache / 4 Cores / 8 Threads / 4.20 GHz Turbo Frequency / 10th gen', 'itm27.png', '26000'),
(28, 3, 'Intel core i5-1035G4', '6 MB Intel Smart Cache / 4 Cores / 8 Threads / 3.20 GHz Turbo Frequency / 10th gen', 'itm27.png', '24000'),
(29, 3, 'Intel core i3-10110U', '6 MB Intel Smart Cache / 4 Cores / 8 Threads / 4.20 GHz Turbo Frequency / 10th gen', 'itm29.png', '21000'),
(30, 3, 'Intel core i3-1005G1', '6 MB Intel Smart Cache / 2 Cores / 4 Threads / 3.20 GHz Turbo Frequency / 10th gen', 'itm29.png', '18000'),
(31, 4, 'Corsair Vengeance', 'Led / 16Gb / 2X8Gb Ddr4 / 3000 Pc4-24000 C15 For Ddr4 Systems ', 'itm31.png', '12000'),
(32, 4, 'Corsair Vengeance lite', 'Led / 12Gb / 2X6Gb Ddr4 / 2000 Pc4-21000 C15 For Ddr4 Systems ', 'itm32.png', '6000'),
(33, 4, 'G.Skill Trident Z ', 'RGB Series / 16GB (2 x 8GB) / 288-Pin DDR4 / 3000MHz (PC4 24000) ', 'itm33.png', '4600'),
(34, 4, 'G.Skill Trident S', 'RGB Series / 32GB (2 x 16GB) / 288-Pin DDR5 / 3200MHz (PC4 25000) ', 'itm34.png', '8000'),
(35, 4, 'HyperX Fury ', 'Black / 4GB x 1 / 2133MHz / DDR4 Non-ECC CL14 DIMM / Safe Socket', 'itm35.png', '3600'),
(36, 4, 'Kingston Fury', 'Black MP / 12GB / 6GB x 2 / 2800MHz / DDR4 Non-ECC CL14 DIMM / Ultra fast', 'itm36.png', '4100'),
(37, 4, 'Crucial Ballistix', 'Sport SODIMM / 4GB Single DDR3 / 1600 MT/s (PC3-12800) CL9', 'itm37.png', '7200'),
(38, 4, 'Viper 4', 'M Series / 16GB (2 x 8GB) / 288-Pin DDR5 / 3100MHz (PC4 25000) ', 'itm38.png', '5150'),
(39, 4, 'XPG Spectrix D80', '32GB (2 x 16GB) / 288-Pin DDR5 / 3600MHz (PC4 25000) ', 'itm39.png', '4999'),
(40, 4, 'Adamanta', '16GB (2 x 8GB) / DDR3 / 1600MHz (PC4 25000) ', 'itm40.png', '3850'),
(41, 5, 'Msi GeForce RTX 2080ti', 'Boost Clock / Memory Speed 1770 MHz / 11GB DDR6 / DisplayPort x3 / HDMIx1 / USB Typex1', 'itm41.png', '109000'),
(42, 5, 'Msi GeForce RTX 2080', 'Boost Clock / Memory Speed 1670 MHz / 8GB DDR6 / DisplayPort x3 / HDMIx1 / USB Typex1', 'itm42.png', '99000'),
(43, 5, 'Msi GeForce RTX 2070', 'Boost Clock / Memory Speed 1670 MHz / 8GB DDR6 / DisplayPort x2 / HDMIx2', 'itm43.png', '40000'),
(44, 5, 'Msi GeForce RTX 2060', 'Boost Clock / Memory Speed 1700 MHz / 8GB DDR6 / DisplayPort x3 / HDMIx1 / USB Typex1', 'itm44.png', '33500'),
(45, 5, 'Msi GeForce GTX 1660ti', 'Boost Clock / Memory Speed 1660 MHz / 6GB DDR6 / DisplayPort x1 / HDMIx2', 'itm45.png', '31000'),
(46, 5, 'Msi GeForce GTX 1080ti', 'Boost Clock / Memory Speed 1700 MHz / 11GB DDR6 / DisplayPort x3 / HDMIx1 / USB Typex1', 'itm46.png', '88000'),
(47, 5, 'Msi GeForce GTX  1080', 'Boost Clock / Memory Speed 1670 MHz / 8GB DDR6 / DisplayPort x3 / HDMIx1', 'itm47.png', '64000'),
(48, 5, 'Msi GeForce GTX 1060', 'Boost Clock / Memory Speed 1470 MHz / 6GB DDR5 / DisplayPort x2 / HDMIx1 / USB Typex1', 'itm48.png', '26000'),
(49, 5, 'Msi GeForce GTX 1050', 'Boost Clock / Memory Speed 1100 MHz / 4GB DDR5 / DisplayPort x2 / HDMIx2', 'itm49.png', '14500'),
(50, 5, 'Msi GeForce GTX 1030 oc', 'Boost Clock / Memory Speed 920 MHz / 2GB DDR4 / DisplayPort x1 / HDMIx2', 'itm50.png', '7500'),
(51, 6, 'Msi Optix MP3441CQ', '24 /Curved Gaming display (1800R) / UWQHD High Resolution / 120Hz Refresh Rate / 1ms response time', 'itm51.png', '26000'),
(52, 6, 'Msi Optix MP2241CM', ' 22 /Curved Gaming display (1800R) / UWQHD High Resolution / 600Hz Refresh Rate / 1ms response time', 'itm52.png', '21000'),
(53, 6, 'Msi Optix MP1241M', '24 / 1900x1080p / UWQHD High Resolution / 120Hz Refresh Rate / 1ms response time', 'itm53.png', '18000'),
(54, 6, 'Msi MAG251R', '22 / 1920x1080p  / UWQHD High Resolution / 60Hz Refresh Rate / 2ms response time', 'itm54.png', '16000'),
(55, 6, 'Msi G271', '22 / FHD / UWQHD High Resolution / 60Hz Refresh Rate / 3ms response time', 'itm55.png', '14000'),
(56, 6, 'BenQ GW2480', '24 / Eye Care Monitor / IPS Panel (FHD) / VGA / HDMI / in-Built Speaker / True Colour', 'itm56.png', '9500'),
(57, 6, 'Samsung curved S35', 'Curved Gaming display (1800R) / UWQHD High Resolution / 120Hz Refresh Rate / 1ms response time', 'itm57.png', '9500'),
(58, 6, 'Acer Nitro QG221Q', '21.5 / 1920x1080p / UWQHD High Resolution / 75Hz Refresh Rate / 2ms response time', 'itm58.png', '10000'),
(59, 6, ' LG 22-SP18', '22 / HD 1280x720p / True Colours / 60HZ Refresh Rate / 4ms Response time / Vga HDMI ', 'itm59.png', '6000'),
(60, 6, 'Dell DP98', '19 / HD 1280x720p / True Colours / 60HZ Refresh Rate / 5ms Response time / Vga HDMI ', 'itm60.png', '4500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`),
  ADD UNIQUE KEY `password` (`Password`) USING BTREE;

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackId`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ItemId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
