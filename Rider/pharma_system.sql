-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 06:54 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharma system`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ID` int(100) NOT NULL,
  `Order Name` varchar(100) NOT NULL,
  `Order Price` int(100) NOT NULL,
  `Order Amount` int(100) NOT NULL,
  `Order Location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`ID`, `Order Name`, `Order Price`, `Order Amount`, `Order Location`) VALUES
(1, 'Napa', 20, 4, 'Uttara'),
(2, 'Fexo', 30, 2, 'Badda'),
(3, 'Pantonix', 40, 2, 'Malibag'),
(4, 'Floriz', 80, 10, 'Mirpur'),
(5, 'Ace', 15, 5, 'Banani'),
(6, 'Alatrol', 70, 2, 'Bashundhara'),
(7, 'Vergon', 10, 4, 'Rampura'),
(8, 'Rabe', 15, 8, 'Kuril'),
(9, 'Etorix', 60, 6, 'Kuril');

-- --------------------------------------------------------

--
-- Table structure for table `order status`
--

CREATE TABLE `order status` (
  `id` int(50) NOT NULL,
  `Order Location` varchar(100) NOT NULL,
  `Order Status` varchar(100) NOT NULL,
  `Display` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order status`
--

INSERT INTO `order status` (`id`, `Order Location`, `Order Status`, `Display`) VALUES
(1, 'Uttara', 'Delivered', 'YES'),
(2, 'Badda', 'Delivered', 'YES'),
(3, 'Malibag', 'In transit', 'YES'),
(4, 'Mirpur', 'Out for delivery', 'YES'),
(5, 'Banani', 'In transit', 'YES'),
(6, 'Bashundhara', 'Delivered', 'YES'),
(7, 'Rampura', 'Delivered', 'YES'),
(8, '', '', 'NO'),
(9, '', '', 'NO'),
(10, '', '', 'NO'),
(11, '', '', 'NO'),
(12, '', '', 'NO'),
(13, '', '', 'NO'),
(14, '', '', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(50) NOT NULL,
  `Review` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `Review`) VALUES
(1, 'Delivery was quick'),
(2, 'fast delivery. Satisfied with the service'),
(6, 'late delivery.'),
(7, 'wrong medicines were delivered. Dissapointed with the service');

-- --------------------------------------------------------

--
-- Table structure for table `rider`
--

CREATE TABLE `rider` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Date of Birth` varchar(100) NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rider`
--

INSERT INTO `rider` (`ID`, `Name`, `Email`, `Password`, `Gender`, `Date of Birth`, `Image`) VALUES
(1, 'tasnim mim', 'tasnimkhondoker1999@gmail.com', 'tasnim#123', 'female', '1999-07-04', 'anna.jpeg'),
(2, 'tonni khan', 'tonni@gmail.com', 'tonni#123', 'Female', '1994-02-09', ''),
(3, 'tonni khan', 'tonni@gmail.com', 'tonni#123', 'Female', '1994-02-09', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order status`
--
ALTER TABLE `order status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rider`
--
ALTER TABLE `rider`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `order status`
--
ALTER TABLE `order status`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rider`
--
ALTER TABLE `rider`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
