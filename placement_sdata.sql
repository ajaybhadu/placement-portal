-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2015 at 04:57 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `placement_sdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE IF NOT EXISTS `student_data` (
  'reg_no' int(100) NOT NULL,
  'name' varchar(100) NOT NULL,
  'pass' varchar(100) NOT NULL,
  'gender' varchar(100) NOT NULL,
  'dob' varchar(100) NOT NULL,
  'f_name' varchar(100) NOT NULL,
  'f_occupation' varchar(100),
  'm_name' varchar(100) NOT NULL,
  'm_occupation' varchar(100),
  'dept' varchar(100) NOT NULL,
  'university' varchar(100) NOT NULL,
  'campus' varchar(100) NOT NULL,
  'yop' int(50) NOT NULL,
  'p_10year' int(50) NOT NULL,
  'p_10board' varchar(100) NOT NULL,
  'p_10marks' DECIMAL(4,2) NOT NULL,
  'p_12year' int(50),
  'p_12board' varchar(100),
  'p_12marks' DECIMAL(4,2),
  'p_dipyear' int(50),
  'p_dipmarks' int(50),
  'p_dipexp' varchar(200),
  'breakyear' int(50),
  'breakreason' varchar(200),
  'cgpa' DECIMAL(4,2) NOT NULL,
  'gpasem1' DECIMAL(4,2) NOT NULL,
  'gpasem2' DECIMAL(4,2) NOT NULL,
  'gpasem3' DECIMAL(4,2) NOT NULL,
  'gpasem4' DECIMAL(4,2) NOT NULL,
  'gpasem5' DECIMAL(4,2) NOT NULL,
  'gpasem6' DECIMAL(4,2),
  'gpasem7' DECIMAL(4,2),
  'gpasem8' DECIMAL(4,2),
  'standing_arrears' int(50),
  'history_arrears' int(50),
  'address_perm' varchar(200) NOT NULL,
  'address_temp' varchar(200) NOT NULL,
  'mobile_no' int(50) NOT NULL,
  'mobile_no_sec' int(50),
  'email_off' varchar(100) NOT NULL,
  'email_sec' varchar(100),
  'parent_mobile' int(50) NOT NULL,
  'parent_email' varchar(100) NOT NULL,
  'payment' varchar(50) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'student_data'
--

INSERT INTO 'student_data' ('reg_no', 'name', 'pass', 'gender', 'dob', 'f_name', 'f_occupation', 'm_name', 'm_occupation', 'dept', 'university', 'campus', 'yop', 'p_10year', 'p_10board', 'p_10marks', 'p_12year','p_12board', 'p_12marks', 'p_dipyear', 'p_dipmarks', 'p_dipexp', 'breakyear', 'breakreason', 'cgpa', 'gpasem1', 'gpasem2', 'gpasem3', 'gpasem4', 'gpasem5', 'gpasem6', 'gpasem7', 'gpasem8', 'standing_arrears', 'history_arrears', 'address_perm', 'address_temp', 'mobile_no', 'mobile_no_sec', 'email_off', 'email_sec', 'parent_mobile', 'parent_email', 'payment') VALUES
('1031310196', 'Kartik Vaishnav', 'password', 'Male', '02-02-1996', 'Mr.Vaishnav', 'Contractor', 'Mrs.Vaishnav', 'Housewife', 'CSE', 'SRM UNIVERSITY', 'KTR', '2017', '2011', 'ICSE', '91.71', '2013', 'SSC', '93.5','', '', '', '', '', '9.3', '9.7', '9.7', '9.3' , '9.3', '8.6', '', '' , '', '0', '0', 'Flat Ff-4,RAJAHMUNDRY', 'A-901,Safaa', '8681943989', '', 'kartikvaishnav@gmail.com', '', '7207220013', 'cvaishnav@gmail.com', 'Paid');

ALTER TABLE `student_data`
 ADD PRIMARY KEY (`reg_no`);

 /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;