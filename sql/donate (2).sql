-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 02:31 PM
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
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `name` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `id` int(4) NOT NULL,
  `child_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`name`, `contact`, `email`, `id`, `child_id`) VALUES
('Priya gupta', 2147483647, 'priyag20061999@gmail', 1, 0),
('Priya gupta', 2147483647, 'priyag20061999@gmail', 2, 0),
('Priya gupta', 2147483647, 'priyag20061999@gmail', 3, 0),
('Priya gupta', 2147483647, 'priyag20061999@gmail', 4, 5),
('Priya gupta', 0, '', 5, 5),
('Priya gupta', 8, 'priyag20061999@gmail', 6, 5),
('Priya gupta', 0, '', 7, 5),
('Priya gupta', 8, 'priyag20061999@gmail', 8, 5),
('', 0, '', 9, 0),
('Priya gupta', 2147483647, 'priyag20061999@gmail', 10, 1),
('', 0, '', 11, 0),
('Priya gupta', -1, 'priyag20061999@gmail', 12, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
