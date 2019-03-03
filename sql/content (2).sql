-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2019 at 09:11 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
  `description` varchar(500) NOT NULL,
  `content_type` varchar(10) NOT NULL,
  `tnail` varchar(200) NOT NULL,
  `s_no` int(3) NOT NULL,
  `question` varchar(100) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `correct` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `upload_time`, `topic`, `course_id`, `tag1`, `tag2`, `tag3`, `tag4`, `tag5`, `content_name`, `description`, `content_type`, `tnail`, `s_no`, `question`, `option1`, `option2`, `option3`, `correct`) VALUES
(1, '2019-03-02 08:00:20.956450', 'a', 3, 'b', 'b', 'b', 'b', 'b', 'intro.pdf', 'test', 'Document', 'c.png', 0, 'what is the correct answer?', 'a', 'b', 'c', 'b'),
(2, '2019-02-27 10:59:39.149223', 'ab', 3, '', '', '', '', '', 'intro.pdf', 'b', 'Document', 'a.png', 1, '', '', '', '', ''),
(3, '2019-02-27 07:40:23.412304', '', 15, '', '', '', '', '', '', '', 'Document', '', 0, '', '', '', '', ''),
(4, '2019-02-27 11:52:26.371664', 'introduction', 16, '', '', '', '', '', '', 'introduction to php', 'Image', '', 1, '', '', '', '', ''),
(5, '2019-03-02 12:42:59.401451', 'Algebra', 17, '', '', '', '', '', 'a1.png', 'Introduction to Algebra(Operations and Operators)', 'Image', '', 1, '', '', '', '', ''),
(6, '2019-03-02 12:45:01.610590', 'Algebra', 17, '', '', '', '', '', '', 'This is the image for Linear equations.', 'Image', '', 2, '', '', '', '', ''),
(7, '2019-03-02 12:54:40.848175', 'Chemistry', 18, '', '', '', '', '', 'c1.png', 'This course will be teaching about basics and inve', 'Image', '', 1, '', '', '', '', ''),
(8, '2019-03-02 12:54:52.866138', 'Chemistry', 18, '', '', '', '', '', 'c2.png', 'This course will be teaching about basics and inve', 'Image', '', 2, '', '', '', '', ''),
(9, '0000-00-00 00:00:00.000000', 'Probability', 19, '', '', '', '', '', 'p1.jfif', 'This is the chart showing some probability tables', 'Image', '', 1, 'What is probability', 'maths', 'science', 'history', 'maths'),
(10, '0000-00-00 00:00:00.000000', 'Probability', 19, '', '', '', '', '', 'p2.png', 'This is the second chart', 'Image', '', 2, 'Do you like maths?', 'yes', 'no', 'neutral', 'yes'),
(11, '0000-00-00 00:00:00.000000', 'Physics', 21, '', '', '', '', '', 'ph1.jfif', 'This is the first step to physics', 'Image', '', 1, 'do you like physics?', 'yes', 'no', 'neutral', 'no'),
(12, '2019-03-03 07:44:48.442176', 'Algebra', 17, '', '', '', '', '', 'arjun.mp4', 'This course will be teaching about basics and adva', 'Video', '', 3, '', '', '', '', '');

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
  MODIFY `content_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
