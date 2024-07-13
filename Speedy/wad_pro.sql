-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2024 at 04:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `user_id` int(10) NOT NULL,
  `card_name` varchar(200) NOT NULL,
  `card_no` varchar(50) NOT NULL,
  `exp` date NOT NULL,
  `cash` varchar(500) NOT NULL,
  `paymethod` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`user_id`, `card_name`, `card_no`, `exp`, `cash`, `paymethod`) VALUES
(20, 'K.G. Sachindu', '1234', '2023-10-29', 'Rs. 111050', 'credit-card');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `oname` varchar(100) NOT NULL,
  `sname1` varchar(100) NOT NULL,
  `mid` int(10) NOT NULL,
  `reg_no` int(10) NOT NULL,
  `address` varchar(350) NOT NULL,
  `P_Num` int(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`oname`, `sname1`, `mid`, `reg_no`, `address`, `P_Num`, `email`, `message`) VALUES
('K.G.S.D Abeyrathne', 'Dilshan Tyre House', 28, 22527974, 'Galenbibdunuwewa, Mihintale, Anuradhapura', 778880817, 'sd@gmail.com', 'Good tyre! ANd good service we got from you! Thank you for everything'),
('Linus Shepherd', 'Caleb Valentine', 30, 0, 'Reprehenderit in ma', 1, 'pihylicyjo@mailinator.com', 'Dicta et laborum ver');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(10) NOT NULL,
  `uname` text NOT NULL,
  `sname` text NOT NULL,
  `regno` int(10) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(10) NOT NULL,
  `nid` text NOT NULL,
  `contactno` int(10) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `uname`, `sname`, `regno`, `email`, `password`, `nid`, `contactno`, `Address`) VALUES
(20, 'K.G.S.D Abeyrathne', 'Dilshan Tyre Palace', 22527974, 'sd@gmail.com', '12345', '200101104506', 778880817, 'Galenbindunuwewa, Mihintale, Anuradhapura'),
(21, 'Bruce Spence', 'Marvin Thornton', 0, 'qanewiku@mailinator.com', 'Pa$$w0rd!', 'Quasi assumenda fugi', 1234567890, 'Vitae nostrum in qui');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `pid` int(10) NOT NULL,
  `productname` varchar(500) NOT NULL,
  `productdescription` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop1`
--

CREATE TABLE `shop1` (
  `pid` int(10) NOT NULL,
  `productname` varchar(500) NOT NULL,
  `productdescription` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop1`
--

INSERT INTO `shop1` (`pid`, `productname`, `productdescription`, `image`) VALUES
(2, '[value-2]', '[value-3]', '[value-4]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `shop1`
--
ALTER TABLE `shop1`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `shop1`
--
ALTER TABLE `shop1`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
