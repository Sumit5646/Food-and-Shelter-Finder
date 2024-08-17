-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 05:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `fbname` varchar(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `fdis` text NOT NULL,
  `fprice` varchar(20) NOT NULL,
  `fadd` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `fphone` bigint(12) NOT NULL,
  `fimage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `fbname`, `fname`, `fdis`, `fprice`, `fadd`, `image`, `fphone`, `fimage`) VALUES
(19, 'Shree Parth Mess', 'Rice Plate', 'Its is a Plate with 4 items in total, the menu changes regularly', '40 Rs', 'Mhasrul ', 'https://maps.app.goo.gl/QhbGBeVCDg1fgnD3A', 9356252018, 'https://t4.ftcdn.net/jpg/02/86/25/73/360_F_286257355_PtrKpShbKVUr5sNJQ2stV0tDesaJJgbZ.jpg'),
(20, 'Sai Mess', 'Rice Plate', 'It consists of 3 items ', '50 Rs', 'Mashrul, Nashik', 'https://pvgcer.in/', 646446464646, 'https://imgstaticcontent.lbb.in/lbbnew/wp-content/uploads/2017/07/22003200/20072017_MalwaniThali_01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `id` int(8) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `umobile` varchar(11) NOT NULL,
  `upass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id`, `uname`, `uemail`, `umobile`, `upass`) VALUES
(5, 'ram', 'sm@gmail.com', '9881866135', '5646'),
(7, 'ram', '123@gmail.com', '9881866135', '4762'),
(8, 'ram', '123@gmail.com', '9881866135', '4762'),
(9, 'ram', '123@gmail.com', '9881866135', '4762'),
(10, 'rahul', '5646@gmail.com', '7020789523', '7777'),
(12, 'sumit', 'sumit@gmail.com', '9881866135', '5646'),
(13, 'komal', 'komal@gmail.com', '8329437854', 'komal123'),
(14, 'admin', 'admin@gmail.com', '', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `shelter`
--

CREATE TABLE `shelter` (
  `id` int(11) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `hdis` text NOT NULL,
  `haddress` varchar(500) NOT NULL,
  `hphone` bigint(11) NOT NULL,
  `hlocation` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shelter`
--

INSERT INTO `shelter` (`id`, `hname`, `hdis`, `haddress`, `hphone`, `hlocation`, `image`) VALUES
(7, 'Sai Nivas', 'Row House, 2BHK', 'Ganesh Nagar, Mahsrul.', 9356252018, 'https://maps.app.goo.gl/nMcfJeGW58wDZkuj6', 'https://primaryresidentialsf.com/wp-content/uploads/sites/30/2014/02/simpsons_house.jpg'),
(8, '', 'Bunglow, 7 flats, 3 BHK', 'Uttam Nagar, Nashik', 9356252018, 'https://maps.app.goo.gl/nMcfJeGW58wDZkuj6', 'https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?cs=srgb&dl=pexels-expect-best-323780.jpg&fm=jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shelter`
--
ALTER TABLE `shelter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `shelter`
--
ALTER TABLE `shelter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
