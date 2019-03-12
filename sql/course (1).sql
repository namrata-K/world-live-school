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
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(25) NOT NULL,
  `thumbnail` varchar(20) NOT NULL,
  `level` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `thumbnail`, `level`, `subject`, `teacher_id`, `rating`, `upload_time`, `description`) VALUES
(3, 'Test', 'tnail.png', 0, 'NA', 4, 4, '2019-03-03 10:42:39', 'testing...'),
(16, 'How to Php', '1.png', 7, 'SCIENCE', 4, 0, '2019-02-27 11:49:54', 'This course will be teaching php from scratch'),
(17, 'Algebra', 'algebra.png', 1, 'MATHEMATICS', 4, 0, '2019-03-02 13:12:04', 'This course will tell you about operators and operands'),
(18, 'Chemistry', 'chemistry.png', 1, 'SCIENCE', 4, 0, '2019-03-02 13:11:09', 'This course will be teaching about basics and invention of chemistry'),
(19, 'Probability', 'prob.png', 1, 'MATHEMATICS', 4, 0, '2019-03-03 03:22:19', 'This course provides complete knowledge about probability and its types'),
(21, 'Physics', 'phy.jfif', 2, 'SCIENCE', 4, 0, '2019-03-03 03:25:22', 'This course provides complete knowledge about all major topics in Physics'),
(22, 'Verbs', 'verb.jpg', 2, 'ENGLISH', 4, 0, '2019-03-03 08:39:04', 'Studying about the usage of verbs'),
(23, 'Algebra', 'image1.png', 2, 'MATHEMATICS', 8, 0, '2019-03-03 11:16:40', 'algebra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
