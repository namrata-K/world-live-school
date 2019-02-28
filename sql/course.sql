-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2019 at 08:51 AM
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
(1, 'test', 'a.png', 0, 'NA', 4, 0, '2019-02-27 06:55:28', 'testing...'),
(2, 'Test', 'a.png', 0, 'NA', 4, 0, '2019-02-27 06:57:46', 'testing...'),
(3, 'Test', '', 0, 'NA', 4, 0, '2019-02-27 06:58:51', 'testing...'),
(4, 'Test', '', 0, 'NA', 4, 0, '2019-02-27 06:58:51', 'testing...'),
(5, 'Test', 'b.png', 0, 'NA', 4, 0, '2019-02-27 06:59:29', 'testing...'),
(6, 'Test', 'c.png', 0, 'NA', 4, 0, '2019-02-27 07:00:00', 'testing...'),
(7, 'Test', 'b.png', 0, 'NA', 4, 0, '2019-02-27 07:00:32', 'testing...'),
(8, 't', '', 0, 'NA', 4, 0, '2019-02-27 07:02:21', ''),
(9, 'Test', 'a.png', 0, 'NA', 4, 0, '2019-02-27 07:16:06', 'w'),
(10, 'hey', '', 0, 'NA', 4, 0, '2019-02-27 07:16:53', ''),
(11, 'as', '', 0, 'NA', 4, 0, '2019-02-27 07:18:09', ''),
(12, 'fage', '', 0, 'NA', 4, 0, '2019-02-27 07:18:27', ''),
(13, 'Test', '', 0, 'NA', 4, 0, '2019-02-27 07:21:04', ''),
(14, 'Test', 'a.png', 0, 'NA', 4, 0, '2019-02-27 07:21:49', 'testing...'),
(15, 'hey', '', 0, 'MATHEMATICS', 8, 0, '2019-02-27 07:39:53', 'b');

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
