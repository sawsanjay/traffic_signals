-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 12:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signal`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_store`
--

CREATE TABLE `data_store` (
  `light` char(11) NOT NULL,
  `light_no` varchar(100) NOT NULL,
  `y_light` varchar(100) NOT NULL,
  `g_light` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_store`
--

INSERT INTO `data_store` (`light`, `light_no`, `y_light`, `g_light`) VALUES
('a', '3', '5', '10'),
('b', '2', '5', '20'),
('c', '1', '5', '15'),
('d', '4', '5', '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_store`
--
ALTER TABLE `data_store`
  ADD PRIMARY KEY (`light`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
