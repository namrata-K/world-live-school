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
-- Table structure for table `signup_teacher`
--

CREATE TABLE `signup_teacher` (
  `uname` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(11) NOT NULL,
  `qual` varchar(11) NOT NULL,
  `occ` varchar(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_teacher`
--

INSERT INTO `signup_teacher` (`uname`, `password`, `name`, `dob`, `email`, `qual`, `occ`, `id`) VALUES
('priyagupta2', 'priya', 'Priya gupta', '1999-06-20', 'priyag20061', 'UG', 'Occupation', 1),
('priya_gupta', 'priya', 'Priya gupta', '1999-06-20', 'priyag20061', 'B.tech', 'Occupation', 2),
('priyagupta', 'priya', 'Priya gupta', '1999-06-20', 'priyag20061', 'UG', 'Occupation', 3),
('priyaa', 'priya', 'Priya gupta', '1999-06-20', 'priya@gmail', 'ab', 'Occupation', 4),
('bjk', 'jkb', 'Priya gupta', '9999-09-09', 'priya@gmail', 'dj', 'Occupation', 5),
('vsdz', 'hbjb', 'hgfh', '1999-07-09', 'vghv@gmail.', 'hbjh', 'Occupation', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup_teacher`
--
ALTER TABLE `signup_teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup_teacher`
--
ALTER TABLE `signup_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
