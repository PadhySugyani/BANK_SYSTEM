-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2021 at 08:15 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `ID` int(40) NOT NULL,
  `CUSTOMER NAME` varchar(40) NOT NULL,
  `EMAIL ID` varchar(40) NOT NULL,
  `BALANCE` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`ID`, `CUSTOMER NAME`, `EMAIL ID`, `BALANCE`) VALUES
(1, 'Ramesh Singh ', 'ramesh@gmail.com ', 1600),
(2, 'Shilpa Priyadarshini ', 'shilpa@gmail.com', 52000),
(3, 'Sikha Mishra', 'sikhamishra@gmail.com', 6700),
(4, 'Manish Paul', 'manishp32@gmail.com', 1500),
(5, 'Mithali Raj', 'mithali345@gmail.com', 1131),
(6, 'Priyanka Mallick', 'priyanka@gmail.com', 29000),
(7, 'Aditya Nath', 'adinatha@gmail.com', 1940),
(8, 'Priyank Sharma', 'priyanksharma@gmail.com', 10280),
(9, 'Rupanjali Pandey', 'rupapandey@gmail.com', 1200),
(10, 'Rubina Verma', 'rubyverma54@gmail.com', 98000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
