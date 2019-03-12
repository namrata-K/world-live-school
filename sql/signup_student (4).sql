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
-- Table structure for table `signup_student`
--

CREATE TABLE `signup_student` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uname` varchar(16) NOT NULL,
  `password` varchar(12) NOT NULL,
  `dob` date NOT NULL,
  `house` varchar(10) NOT NULL,
  `score` int(5) NOT NULL,
  `donor` int(1) DEFAULT NULL,
  `oname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_student`
--

INSERT INTO `signup_student` (`id`, `name`, `uname`, `password`, `dob`, `house`, `score`, `donor`, `oname`) VALUES
(1, 'ab', 'c', 'd', '0000-00-00', 'Ganga', 10, NULL, 'Asha orphanage'),
(2, 'priya gupta', 'priyagupta20', 'priya', '1999-06-20', 'Yamuna', 30, NULL, 'Kiran orphanage'),
(3, 'priya', 'priya', 'priya', '1999-06-20', 'Krishna', 40, NULL, 'NA'),
(4, 'priya', 'priya2', 'priya', '1999-02-09', 'Ganga', 80, NULL, 'Raah orphanage'),
(5, 'jahnvi', 'jahnvi13', 'jahnvi', '1998-09-13', 'Ganga', 20, 1, ''),
(6, 'Test', 'test', 'test', '2999-01-01', 'Ganga', 8, NULL, 'Drishti orphanage'),
(7, 'test', 'test2', 'test', '1223-01-01', 'Kaveri', 0, NULL, ''),
(8, 'Priya Gupta', 'priya_gupta', 'priya', '1999-06-20', 'Yamuna', 0, NULL, ''),
(9, 'Priya gupta', 'priyaaaaaaaaaaaa', 'priya', '8777-06-07', '', 100, NULL, 'Kiran orphanage'),
(10, 'gch', 'vn', 'vnh', '1999-09-08', 'Ganga', 0, NULL, 'nhbhn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup_student`
--
ALTER TABLE `signup_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup_student`
--
ALTER TABLE `signup_student`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
