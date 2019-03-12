-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 02:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `live_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `previously_watched`
--

CREATE TABLE `previously_watched` (
  `student_id` int(5) NOT NULL,
  `content_id` int(5) NOT NULL,
  `pvsid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `previously_watched`
--

INSERT INTO `previously_watched` (`student_id`, `content_id`, `pvsid`) VALUES
(8, 3, 1),
(8, 4, 2),
(8, 4, 3),
(8, 4, 4),
(8, 4, 5),
(8, 4, 6),
(8, 3, 7),
(8, 3, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `previously_watched`
--
ALTER TABLE `previously_watched`
  ADD PRIMARY KEY (`pvsid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `previously_watched`
--
ALTER TABLE `previously_watched`
  MODIFY `pvsid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
