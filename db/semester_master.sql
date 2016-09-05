-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2016 at 06:38 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `semester_master`
--

CREATE TABLE IF NOT EXISTS `semester_master` (
  `semester_no` int(11) NOT NULL,
  `semester_name` varchar(50) NOT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester_master`
--

INSERT INTO `semester_master` (`semester_no`, `semester_name`, `status`) VALUES
(1, 'semester I', 'Y'),
(2, 'semester II', 'Y'),
(3, 'semester III', 'Y'),
(4, 'semester IV', 'Y'),
(5, 'semester V', 'Y'),
(6, 'semester VI', 'Y'),
(7, 'semester VII', 'Y'),
(8, 'semester VIII', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `semester_master`
--
ALTER TABLE `semester_master`
  ADD PRIMARY KEY (`semester_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `semester_master`
--
ALTER TABLE `semester_master`
  MODIFY `semester_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
