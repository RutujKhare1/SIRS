-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 20, 2019 at 03:51 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;




--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`s_id`, `c_id`, `date`, `attendance`) VALUES
('C17048', '310244', '2019-09-16', 1),
('C17048', '310243', '2019-09-16', 1),
('C17048', '310245', '2019-09-16', 1),
('C17048', '310242', '2019-09-16', 1),
('C17048', '310246', '2019-09-16', 1),
('CD1802', '310244', '2019-09-16', 1),
('CD1802', '310243', '2019-09-16', 0),
('CD1802', '310245', '2019-09-16', 1),
('CD1802', '310242', '2019-09-16', 1),
('CD1802', '310246', '2019-09-16', 0),
('C17048', '310246', '2019-09-17', 1),
('C17048', '310245', '2019-09-17', 1),
('C17048', '310245', '2019-09-17', 1),
('C17048', '310241', '2019-09-17', 1),
('CD1802', '310247', '2019-09-17', 1),
('CD1802', '310245', '2019-09-17', 1),
('CD1802', '310245', '2019-09-17', 1),
('CD1802', '310241', '2019-09-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `c_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `c_name`) VALUES
('310241', 'TOC'),
('310242', 'DBMS'),
('310243', 'SEPM'),
('310244', 'ISEE'),
('310245', 'CN'),
('310246', 'SDL'),
('310247', 'DBMSL'),
('310248', 'CNL');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` varchar(7) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'C00000',
  `password` varchar(24) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'abc123',
  `type` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `password`, `type`) VALUES
('admin', 'admin', 'admin'),
('C17048', 'sakae', 'user'),
('CD1802', 'satyaki', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `r_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `s_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `s_name` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `branch` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`r_no`, `s_id`, `s_name`, `year`, `branch`, `DOB`, `email`) VALUES
('TC009', 'C17048', 'Anubhav Mattoo', 'TE', 'COMP', '1999-05-11', 'anubhavmattoo@outlook.com'),
('TC025', 'CD1802', 'Garkal Satyaki Shivaji', 'TE', 'COMP', '1999-09-18', 'satyakigarkal@outlook.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `s_id` (`s_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `r_no` (`r_no`),
  ADD KEY `s_id` (`s_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `course` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
