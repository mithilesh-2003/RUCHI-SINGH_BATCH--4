-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 04:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php1db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'ni@gmail.com', '1010'),
(3, 'ni@gmail.com', '1010'),
(4, 'ni@gmail.com', '1010'),
(5, 'ni@gmail.com', '1010'),
(6, '', ''),
(7, 'ni@gmail.com', '1010'),
(8, '', ''),
(9, '', ''),
(10, '', ''),
(11, '', ''),
(12, '', ''),
(13, '', ''),
(14, '', ''),
(15, '', ''),
(16, '', ''),
(17, '', ''),
(18, '', ''),
(19, '', ''),
(20, '', ''),
(21, '', ''),
(22, '', ''),
(23, '', ''),
(24, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `g`
--

CREATE TABLE `g` (
  `id` int(5) NOT NULL,
  `name` varchar(500) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `g`
--

INSERT INTO `g` (`id`, `name`, `password`, `email`, `date`, `time`) VALUES
(1, 'ruchisingh0000248@gmail.com', '212223', '', '17/09/23', '10:51:48pm'),
(2, 'ruchisingh0000248@gmail.com', '232425', '', '17/09/23', '10:55:36pm'),
(3, 'ruchisingh0000248@gmail.com', '212223', '', '17/09/23', '10:58:09pm'),
(4, 'ruchisingh0000248@gmail.com', '212223', '', '17/09/23', '11:01:38pm'),
(5, '', '', '', '18/09/23', '09:41:48am'),
(6, 'ruchi@gmail.com', '1234', '', '18/09/23', '12:05:03pm'),
(7, '', '', '', '18/09/23', '12:05:39pm'),
(8, '', '', '', '18/09/23', '12:09:42pm');

-- --------------------------------------------------------

--
-- Table structure for table `partylogin`
--

CREATE TABLE `partylogin` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partylogin`
--

INSERT INTO `partylogin` (`id`, `username`, `password`) VALUES
(2, 'ruchi@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `partyregistration`
--

CREATE TABLE `partyregistration` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `presidentname` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `image` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partyregistration1`
--

CREATE TABLE `partyregistration1` (
  `id` int(11) NOT NULL,
  `partyname` varchar(50) NOT NULL,
  `presidentname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL,
  `address` varchar(11) NOT NULL,
  `partysymbol` varchar(11) NOT NULL,
  `role` varchar(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `time` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partyregistration1`
--

INSERT INTO `partyregistration1` (`id`, `partyname`, `presidentname`, `email`, `password`, `address`, `partysymbol`, `role`, `date`, `time`) VALUES
(7, 'BJP', 'Ruchi Singh', 'ruchi@gmail.com', '667798', 'sijhauliya ', 'leadermaker', '2', '17/09/23', '01:05:12pm'),
(8, 'BJP', 'Ruchi Singh', 'ruchi@gmail.com', '666768', 'sijhauliya ', 'candidate.j', '2', '18/09/23', '11:18:54am'),
(9, 'BJP', 'Ruchi Singh', 'ruchi@gmail.com', '666768', 'sijhauliya ', 'candidate.j', '2', '18/09/23', '11:22:18am'),
(10, 'BJP', 'Ruchi Singh', 'ruchi@gmail.com', '', 'sijhauliya ', 'candidate.j', '2', '18/09/23', '11:22:26am'),
(11, 'BJP', 'Ruchi Singh', 'ruchi@gmail.com', '', 'sijhauliya ', 'candidate.j', '2', '18/09/23', '11:24:32am'),
(12, 'ap', 'Ruchi Singh', 'ruchi@gmail.com', '1234', 'sijhauliya ', 'call.png', '1', '18/09/23', '11:41:58am');

-- --------------------------------------------------------

--
-- Table structure for table `sinup`
--

CREATE TABLE `sinup` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sinup`
--

INSERT INTO `sinup` (`id`, `username`, `password`) VALUES
(7, 'ni@gmail.com', '1010'),
(13, '', ''),
(14, '', ''),
(15, '', ''),
(16, '', ''),
(17, '', ''),
(18, '', ''),
(19, '', ''),
(20, '', ''),
(21, '', ''),
(22, '', ''),
(23, '', ''),
(24, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `voat`
--

CREATE TABLE `voat` (
  `id` int(5) NOT NULL,
  `bjp` varchar(100) NOT NULL,
  `inc` varchar(60) NOT NULL,
  `aap` varchar(100) NOT NULL,
  `bsp` varchar(100) NOT NULL,
  `sp` varchar(100) NOT NULL,
  `tmc` varchar(100) NOT NULL,
  `ncp` varchar(100) NOT NULL,
  `rjd` varchar(100) NOT NULL,
  `jdu` varchar(100) NOT NULL,
  `dmk` varchar(100) NOT NULL,
  `cpi` varchar(100) NOT NULL,
  `ss` varchar(100) NOT NULL,
  `nota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voat`
--

INSERT INTO `voat` (`id`, `bjp`, `inc`, `aap`, `bsp`, `sp`, `tmc`, `ncp`, `rjd`, `jdu`, `dmk`, `cpi`, `ss`, `nota`) VALUES
(4, 'yes', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', 'yes', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `voteregistration`
--
-- Error reading structure for table php1db.voteregistration: #1932 - Table &#039;php1db.voteregistration&#039; doesn&#039;t exist in engine
-- Error reading data for table php1db.voteregistration: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `php1db`.`voteregistration`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `voteregistration1`
--

CREATE TABLE `voteregistration1` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `adharnumber` varchar(12) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voteregistration1`
--

INSERT INTO `voteregistration1` (`id`, `name`, `adharnumber`, `mobile`, `address`, `email`, `password`, `age`, `image`, `date`, `time`) VALUES
(6, 'Ruchi Singh', '232425262728', '7379900119', 'sijhauliya   akbarpur ambedkar nagar', 'ruchi@gmail.com', '', '20', 'candidate.jpeg', '18/09/23', '01:01:48pm'),
(7, 'Ruchi Singh', '123456789012', '7379900119', 'sijhauliya   akbarpur ambedkar nagar', 'ruchi@gmail.com', '1254536', '21', 'DMK.jpeg', '18/09/23', '01:09:03pm'),
(8, 'Ruchi Singh', '123456678901', '7379900119', 'sijhauliya   akbarpur ambedkar nagar', 'ruchi@gmail.com', '12245', '12', 'call.png', '18/09/23', '01:16:32pm'),
(9, 'Ruchi Singh', '123456678901', '7379900119', 'sijhauliya   akbarpur ambedkar nagar', 'ruchi@gmail.com', '', '12', 'call.png', '18/09/23', '01:22:18pm'),
(10, 'Ruchi Singh', '123456678901', '7379900119', 'sijhauliya   akbarpur ambedkar nagar', 'ruchi@gmail.com', '', '12', 'call.png', '18/09/23', '01:24:25pm'),
(11, 'Ruchi Singh', '123456678901', '7379900119', 'sijhauliya   akbarpur ambedkar nagar', 'ruchi@gmail.com', '', '12', 'call.png', '18/09/23', '01:28:00pm'),
(12, 'Ruchi Singh', '45678945645', '7379900119', 'sijhauliya   akbarpur ambedkar nagar', 'anandsingh00006@gmail.com', '12345', '18', 'DMK.jpeg', '18/09/23', '01:36:36pm'),
(13, 'Sriram', '45678945645', '7379900119', 'sijhauliya   akbarpur ambedkar nagar', 'anandsingh00006@gmail.com', '', '18', 'DMK.jpeg', '18/09/23', '01:38:44pm'),
(14, 'Sriram', '45678945645', '7379900119', 'sijhauliya   akbarpur ambedkar nagar', 'anandsingh00006@gmail.com', '', '18', 'DMK.jpeg', '18/09/23', '01:39:36pm'),
(15, 'Sriram', '45678945645', '7379900119', 'sijhauliya   akbarpur ambedkar nagar', 'anandsingh00006@gmail.com', '', '18', 'DMK.jpeg', '18/09/23', '01:39:48pm'),
(16, '', '', '', '', '', '', '2', '', '18/09/23', '07:20:50pm'),
(17, '', '', '', '', '', '', '12', '', '18/09/23', '07:43:29pm'),
(18, 'l;kjhg', '09876', '-0987', 'lkljkhg', 'ruchisingh0000248@gmail.com', '-0986', '6', '', '18/09/23', '07:59:29pm'),
(19, 'Ruchi Singh', '123456789998', '7379900119', 'sijhauliya   akbarpur ambedkar nagar', 'anandsingh00006@gmail.com', '55778678', '67', '', '18/09/23', '08:03:20pm');

-- --------------------------------------------------------

--
-- Table structure for table `voterlogin`
--

CREATE TABLE `voterlogin` (
  `id` int(5) NOT NULL,
  `adhar` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voterlogin`
--

INSERT INTO `voterlogin` (`id`, `adhar`) VALUES
(1, '123456678901'),
(2, '123456678901'),
(3, '123456678901'),
(4, '123456678901'),
(5, '45678945645'),
(6, '45678945645'),
(7, '45678945645'),
(8, '45678945645'),
(9, ''),
(10, ''),
(11, '09876'),
(12, '123456789998');

-- --------------------------------------------------------

--
-- Table structure for table `votingtbl`
--

CREATE TABLE `votingtbl` (
  `adharnumber` int(11) NOT NULL,
  `partyname` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g`
--
ALTER TABLE `g`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partylogin`
--
ALTER TABLE `partylogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partyregistration1`
--
ALTER TABLE `partyregistration1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sinup`
--
ALTER TABLE `sinup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voat`
--
ALTER TABLE `voat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voteregistration1`
--
ALTER TABLE `voteregistration1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voterlogin`
--
ALTER TABLE `voterlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `g`
--
ALTER TABLE `g`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `partylogin`
--
ALTER TABLE `partylogin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partyregistration1`
--
ALTER TABLE `partyregistration1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sinup`
--
ALTER TABLE `sinup`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `voat`
--
ALTER TABLE `voat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `voteregistration1`
--
ALTER TABLE `voteregistration1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `voterlogin`
--
ALTER TABLE `voterlogin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
