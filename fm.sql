-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 03:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fm`
--

-- --------------------------------------------------------

--
-- Table structure for table `invest`
--

CREATE TABLE `invest` (
  `userid` varchar(10) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `i_typef` varchar(2) NOT NULL,
  `i_nof` varchar(2) NOT NULL,
  `i_money` int(11) NOT NULL,
  `tenure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invest_type`
--

CREATE TABLE `invest_type` (
  `i_no` varchar(2) NOT NULL,
  `i_type` varchar(2) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `r.o.r` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invest_type`
--

INSERT INTO `invest_type` (`i_no`, `i_type`, `plan`, `r.o.r`) VALUES
('i1', 'MD', 'Axis MD', 15),
('i2', 'MD', 'Uti MD', 16),
('i3', 'MD', 'Sbi MD', 16),
('i4', 'MD', 'Kotak MD', 16),
('I5', 'FD', 'Fincare FD', 7),
('i6', 'FD', 'Shriram FD', 8),
('i7', 'FD', 'Canara FD', 7);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `userid` varchar(10) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `l_typef` varchar(20) NOT NULL,
  `l_nof` varchar(2) NOT NULL,
  `l_money` int(11) NOT NULL,
  `tenure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_type`
--

CREATE TABLE `loan_type` (
  `l_no` varchar(2) NOT NULL,
  `l_type` varchar(20) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `roi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan_type`
--

INSERT INTO `loan_type` (`l_no`, `l_type`, `plan`, `roi`) VALUES
('l1', 'Personal loan', 'Canara bank', 11),
('l2', 'Personal loan', 'SBI ', 10),
('l3', 'Personal loan', 'Indus', 10),
('l4', 'Home loan', 'SBI housing ', 9),
('l5', 'Home loan', 'Kotak housing', 9),
('l6', 'Home loan', 'Axis housing', 9),
('l7', 'Student loan', 'Indus sl', 7),
('l8', 'Student loan', 'HDFC sl ', 6),
('l9', 'Student loan', 'Axis sl', 6);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phno` int(10) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invest_type`
--
ALTER TABLE `invest_type`
  ADD PRIMARY KEY (`i_no`);

--
-- Indexes for table `loan_type`
--
ALTER TABLE `loan_type`
  ADD PRIMARY KEY (`l_no`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`,`pass`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
