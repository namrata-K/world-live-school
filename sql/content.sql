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
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(10) NOT NULL,
  `upload_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `topic` varchar(20) NOT NULL,
  `course_id` int(5) NOT NULL,
  `tag1` varchar(15) NOT NULL,
  `tag2` varchar(15) NOT NULL,
  `tag3` varchar(15) NOT NULL,
  `tag4` varchar(15) NOT NULL,
  `tag5` varchar(15) NOT NULL,
  `content_name` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `content_type` varchar(10) NOT NULL,
  `s_no` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `upload_time`, `topic`, `course_id`, `tag1`, `tag2`, `tag3`, `tag4`, `tag5`, `content_name`, `description`, `content_type`, `s_no`) VALUES
(1, '2019-02-25 10:35:49.985491', 'a', 0, 'b', 'b', 'b', 'b', 'b', 'a.png', '', '', 0),
(2, '2019-02-27 07:26:14.936806', 'ab', 14, '', '', '', '', '', 'a.png', 'b', 'Document', 1),
(3, '2019-02-27 07:40:23.412304', '', 15, '', '', '', '', '', '', '', 'Document', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
