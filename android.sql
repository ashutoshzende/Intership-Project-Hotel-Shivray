-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 04:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `android`
--

-- --------------------------------------------------------

--
-- Table structure for table `my`
--

CREATE TABLE `my` (
  `invoiceNo` int(255) NOT NULL,
  `cust` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dish` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(50) NOT NULL,
  `price` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my`
--

INSERT INTO `my` (`invoiceNo`, `cust`, `mobileNo`, `dish`, `qty`, `price`, `total`) VALUES
(4, 'ashu', '2147483647', 'pohe', 2, 200, 400),
(12, 'ausfsf', '8757878786', 'Palak Paneer Thali', 3, 200, 600),
(13, 'ashi', '7083688328', 'Matan Kolhapuri Thali', 3, 100, 300),
(14, 'ashu', '8948787048', 'Anda Thali', 2, 400, 800),
(15, 'asggf', '9254555555', 'Shahi Kaju-kurma Thali', 3, 200, 600),
(17, 'ssss', '9874563211', 'Akka Masur Thali', 1, 250, 250),
(18, 'ssss', '9874563211', 'Paneer Thali', 1, 250, 250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my`
--
ALTER TABLE `my`
  ADD PRIMARY KEY (`invoiceNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my`
--
ALTER TABLE `my`
  MODIFY `invoiceNo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
