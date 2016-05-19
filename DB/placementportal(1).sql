-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2016 at 07:30 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placementportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `s_btech`
--

CREATE TABLE `s_btech` (
  `reg_no` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `campus` varchar(100) NOT NULL,
  `yop` int(10) NOT NULL,
  `yop10` int(10) NOT NULL,
  `board10` varchar(100) NOT NULL,
  `percent10` decimal(4,2) NOT NULL,
  `yop12` int(10) DEFAULT NULL,
  `board12` varchar(100) DEFAULT NULL,
  `percent12` decimal(4,2) DEFAULT NULL,
  `yopd` int(10) DEFAULT NULL,
  `boardd` varchar(100) DEFAULT NULL,
  `percentd` decimal(4,2) DEFAULT NULL,
  `workd` varchar(200) DEFAULT NULL,
  `break` int(10) NOT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `cgpa` decimal(4,2) NOT NULL,
  `s1gpa` decimal(4,2) NOT NULL,
  `s2gpa` decimal(4,2) NOT NULL,
  `s3gpa` decimal(4,2) NOT NULL,
  `s4gpa` decimal(4,2) NOT NULL,
  `s5gpa` decimal(4,2) NOT NULL,
  `s6gpa` decimal(4,2) DEFAULT NULL,
  `s7gpa` decimal(4,2) DEFAULT NULL,
  `s8gpa` decimal(4,2) DEFAULT NULL,
  `s_arrears` int(10) NOT NULL,
  `h_arrears` int(10) NOT NULL,
  `workexp` varchar(200) DEFAULT NULL,
  `es1` varchar(100) NOT NULL,
  `es2` varchar(100) DEFAULT NULL,
  `es3` varchar(100) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin` int(10) NOT NULL,
  `padd` varchar(200) NOT NULL,
  `pcity` varchar(100) NOT NULL,
  `pstate` varchar(100) NOT NULL,
  `ppin` int(10) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `mobile_sec` bigint(10) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `email_sec` varchar(100) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  `foccupation` varchar(100) DEFAULT NULL,
  `fcname` varchar(100) DEFAULT NULL,
  `fdes` varchar(100) DEFAULT NULL,
  `fcadd` varchar(200) DEFAULT NULL,
  `fnum` bigint(10) DEFAULT NULL,
  `f_email` varchar(100) DEFAULT NULL,
  `mname` varchar(100) NOT NULL,
  `moccupation` varchar(100) DEFAULT NULL,
  `mcname` varchar(100) DEFAULT NULL,
  `mdes` varchar(100) DEFAULT NULL,
  `mcadd` varchar(200) DEFAULT NULL,
  `mnum` bigint(10) DEFAULT NULL,
  `m_email` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) NOT NULL,
  `passport` varchar(50) DEFAULT NULL,
  `height` int(10) NOT NULL,
  `weight` decimal(4,2) NOT NULL,
  `ls1` varchar(100) NOT NULL,
  `ls2` varchar(100) DEFAULT NULL,
  `ls3` varchar(100) DEFAULT NULL,
  `lw1` varchar(100) NOT NULL,
  `lw2` varchar(100) DEFAULT NULL,
  `lw3` varchar(100) DEFAULT NULL,
  `lr1` varchar(100) NOT NULL,
  `lr2` varchar(100) DEFAULT NULL,
  `lr3` varchar(100) DEFAULT NULL,
  `icname1` varchar(100) NOT NULL,
  `iduration1` int(10) NOT NULL,
  `title1` varchar(200) NOT NULL,
  `icname2` varchar(100) DEFAULT NULL,
  `iduration2` int(10) DEFAULT NULL,
  `title2` varchar(200) DEFAULT NULL,
  `icname3` varchar(100) DEFAULT NULL,
  `iduration3` int(10) DEFAULT NULL,
  `title3` varchar(200) DEFAULT NULL,
  `responsibility` varchar(200) NOT NULL,
  `co_act` varchar(200) NOT NULL,
  `extra_act` varchar(200) NOT NULL,
  `hobbies` varchar(200) NOT NULL,
  `boarding` varchar(50) NOT NULL,
  `info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `s_btech`
--
ALTER TABLE `s_btech`
  ADD PRIMARY KEY (`reg_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
