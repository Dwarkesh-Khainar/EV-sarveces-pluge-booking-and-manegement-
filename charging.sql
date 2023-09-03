-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 03:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charging`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`) VALUES
(1, 'admin', 'pass@123', 'SSVPS ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `carnum` varchar(15) NOT NULL,
  `plugs` varchar(15) NOT NULL,
  `station` varchar(15) NOT NULL,
  `cdate` datetime NOT NULL,
  `vdate` datetime NOT NULL,
  `verify` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `fname`, `mobile`, `carnum`, `plugs`, `station`, `cdate`, `vdate`, `verify`) VALUES
(16, 'kalpesh shelar', '8010648246', 'mh18 bu 6318', 'DC1', 'station1', '2023-03-31 09:17:00', '2023-03-31 09:16:00', 'yes'),
(17, 'mahesh sonar', '7276188378', 'mh19 bc 9065', 'DC1', 'station1', '2023-03-31 09:55:00', '2023-03-31 09:55:00', 'yes'),
(18, 'mahesh sonar', '7276188378', 'mh19 bu 1234', '', '', '2023-03-31 10:12:00', '2023-03-31 10:12:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `idname` varchar(20) NOT NULL,
  `idcard` varchar(300) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `idname`, `idcard`, `dob`, `gender`, `phno`, `address`, `pass`) VALUES
(12, 'Prashant', 'Patil', 'prashant@gmail.com', 'Aadhar', 'img/client.png', '2003-04-15', 'male', '993737727838', 'Dhule', 'pass'),
(15, 'Gaurav', 'Patil', 'gaurav@gmail.com', 'Aadhar', 'img/20230105_180628.jpg', '2772-06-06', 'male', '7727383872', 'Dhule', 'pass'),
(16, 'Lokesh', 'Patil', 'lokesh@gmail.com', 'Aadhar', 'img/Screenshot (47).png', '2003-03-05', 'male', '63677477332', 'Dhule', 'pass'),
(18, 'mahesh', 'sonar', 'mahesh@gmail.com', 'Aadhar', 'img/client.png', '2003-07-05', 'male', '7276188378', 'Dhule', 'pass'),
(19, 'kalpesh', 'shelar', 'kalpesh@gmail.com', 'Aadhar', 'img/Screenshot 2022-11-06 173215.png', '2003-11-12', 'male', '8010648246', 'dhule', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phno` (`phno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
