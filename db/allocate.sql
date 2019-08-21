-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2017 at 06:41 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allocate`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`) VALUES
(1, 'admin', 'password'),
(2, 'demo', 'password'),
(3, 'stephen', '11tomtom');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `project_case` varchar(255) COLLATE utf8_bin NOT NULL,
  `project_level` varchar(50) COLLATE utf8_bin NOT NULL,
  `allocation` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `project_case`, `project_level`, `allocation`) VALUES
(1, 'Design and Implementation of Loan disbursement system', 'A case study of GT Bank Plc', 'HND', 1),
(5, 'Loan saving system', 'Guiness Nigeria', 'HND', 1),
(7, 'Bank ATM System', 'Diamond Bank', 'HND', 1),
(6, 'Login Registration System', 'Guiness Nigeria', 'ND', 1),
(8, 'Student Project Allocation and Management System', 'A case study of The Polytechnic,Ibadan', 'HND', 1),
(9, 'Inventory System', 'XYZ limited', 'ND', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `department` varchar(50) COLLATE utf8_bin NOT NULL,
  `level` varchar(50) COLLATE utf8_bin NOT NULL,
  `matric` varchar(50) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `department`, `level`, `matric`, `date`, `project_id`) VALUES
(3, 'Omolewa Stephen', 'Computer Studies', 'ND 2', '2014235020038', '2017-09-23', 7),
(2, 'Ayub Lekan', 'Computer Studies', 'HND 2', '2014235020036', '2017-09-21', 5),
(4, 'Ade', 'Mechanical Eng', 'HND 1', '2014235020050', '2017-09-23', 1),
(5, 'Demo', 'Civil Engineering', 'ND', '2014235020039', '2017-09-23', 8),
(6, 'Ayobami', 'Slt', 'ND 3', '2014235020031', '2017-09-23', 6),
(7, 'Omolewa ', 'Slt', 'ND 2', '2014235020033', '2017-09-23', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
