-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 12:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pair-work`
--

-- --------------------------------------------------------

--
-- Table structure for table `peopleinfo`
--

CREATE TABLE `peopleinfo` (
  `No.` int(4) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Risk` smallint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peopleinfo`
--

INSERT INTO `peopleinfo` (`No.`, `Name`, `Risk`) VALUES
(1, 'Bird', 2),
(2, 'Mark', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peopleinfo`
--
ALTER TABLE `peopleinfo`
  ADD PRIMARY KEY (`No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peopleinfo`
--
ALTER TABLE `peopleinfo`
  MODIFY `No.` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
