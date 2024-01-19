-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2024 at 04:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abc_details`
--

CREATE TABLE `abc_details` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `option` varchar(8) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abc_details`
--

INSERT INTO `abc_details` (`id`, `username`, `number`, `option`, `quantity`, `price`) VALUES
(1, 'supunbherath@gmail.c', '0123456789', 'item1', 10, 950),
(2, 'supunbherath@gmail.c', '0123456789', 'item1', 2, 200),
(3, 'supunbherath@gmail.c', '1234567891', 'item2', 3, 600),
(4, 'su', '1234567891', 'item3', 5, 1500),
(5, 'su', '1234567891', 'item3', 5, 1500),
(6, 'su', '1234567891', 'item3', 5, 1500),
(7, 'su', '1234567891', 'item3', 5, 1500),
(8, 'su', '1234567891', 'item3', 5, 1500),
(9, 'avinashdeshan11@gmai', '1234567891', 'item2', 8, 1520),
(10, 'avinashdeshan11@gmai', '1234567891', 'item2', 8, 1520),
(11, 'avinashdeshan11@gmai', '1234567891', 'item2', 8, 1520),
(12, 'supunbherath@gmail.c', '0123456789', 'item1', 100, 9500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abc_details`
--
ALTER TABLE `abc_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abc_details`
--
ALTER TABLE `abc_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
