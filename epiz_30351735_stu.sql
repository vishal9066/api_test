-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 10:53 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_29548712_stu`
--

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `start_avg` int(5) NOT NULL,
  `end_avg` int(5) NOT NULL,
  `avg` int(50) NOT NULL,
  `grade` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `name`, `start_avg`, `end_avg`, `avg`, `grade`) VALUES
(1, '', 40, 49, 0, 'C'),
(2, 'Vishal Kurmi', 40, 49, 48, 'C'),
(3, 'test', 80, 89, 82, 'A'),
(4, 'test1', 40, 49, 48, 'C'),
(5, 'test2', 70, 79, 76, 'B++');

-- --------------------------------------------------------

--
-- Table structure for table `personality`
--

CREATE TABLE `personality` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `start_g` varchar(5) NOT NULL,
  `end_g` varchar(5) NOT NULL,
  `grade` varchar(11) NOT NULL,
  `per` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personality`
--

INSERT INTO `personality` (`id`, `name`, `start_g`, `end_g`, `grade`, `per`) VALUES
(1, '', 'C', 'C++', 'C', 'Fair'),
(2, 'Vishal Kurmi', 'C', 'C++', 'C', 'Fair'),
(3, 'test', 'A', 'A++', 'A', 'Excellent'),
(4, 'test1', 'C', 'C++', 'C', 'Fair'),
(5, 'test2', 'B', 'B++', 'B++', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `stu_marks`
--

CREATE TABLE `stu_marks` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sub1` int(12) NOT NULL,
  `sub2` int(12) NOT NULL,
  `sub3` int(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_marks`
--

INSERT INTO `stu_marks` (`id`, `name`, `sub1`, `sub2`, `sub3`) VALUES
(1, '', 0, 0, 0),
(2, 'Vishal Kurmi', 35, 65, 45),
(3, 'test', 84, 87, 76),
(4, 'test1', 23, 56, 65),
(5, 'test2', 67, 63, 98);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personality`
--
ALTER TABLE `personality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu_marks`
--
ALTER TABLE `stu_marks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personality`
--
ALTER TABLE `personality`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stu_marks`
--
ALTER TABLE `stu_marks`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
