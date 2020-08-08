-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb26.awardspace.net
-- Generation Time: Apr 22, 2020 at 03:39 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3318186_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` varchar(20) NOT NULL,
  `sch_no` varchar(20) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `sem` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `sch_no`, `s_name`, `email_id`, `pwd`, `dept`, `course`, `sem`) VALUES
('11020 ', '18111201', 'raj', 'raj123@gmail.com', '123', 'CSE', 'BTECH', 4),
('11021 ', '18111202', 'seema', 'seema124@gmail.com', '124', 'CSE', 'BTECH', 4),
('11022 ', '18111203', 'ajay', 'ajay125@gmail.com', '125', 'ECE', 'BTECH', 4),
('11010 ', '18111284', 'rohan', 'rohan360@gmail.com', '360', 'MECH', 'MTECH', 4),
('110187 ', '18111290', 'neha', 'neha786@gmail.com', '786', 'CIVIL', 'BTECH', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
