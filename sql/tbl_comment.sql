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
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`, `link`) VALUES
(34, 0, 'priya', 'Priya', '2019-03-03 09:38:40', ''),
(35, 0, 'hey', 'Priya', '2019-03-03 09:39:18', ''),
(36, 0, 'hey', 'Priya', '2019-03-03 09:44:16', ''),
(37, 0, 'hy', 'Priya', '2019-03-03 09:45:17', ''),
(38, 0, 'hy', 'Priya', '2019-03-03 09:45:21', ''),
(39, 0, 'hey', 'Priya', '2019-03-03 09:47:49', ''),
(40, 0, 'hey', 'Priya', '2019-03-03 09:47:49', ''),
(41, 0, 'hey', 'Priya', '2019-03-03 09:47:55', ''),
(42, 0, 'hey', 'Priya', '2019-03-03 09:48:18', ''),
(43, 0, 'hey', 'Priya', '2019-03-03 09:48:20', ''),
(44, 0, 'hey', 'Priya', '2019-03-03 09:48:26', ''),
(45, 0, 'hey', 'Priya', '2019-03-03 09:48:43', ''),
(46, 0, 'hey', 'Priya', '2019-03-03 09:48:44', ''),
(47, 0, 'hey', 'Priya', '2019-03-03 09:48:44', ''),
(48, 0, 'hey', 'Priya', '2019-03-03 09:48:45', ''),
(49, 0, 'pr', 'Priya', '2019-03-03 09:49:27', ''),
(50, 0, 'hey', 'Priya', '2019-03-03 09:50:18', ''),
(51, 0, 'hey', 'Priya', '2019-03-03 09:50:19', ''),
(52, 0, 'hey', 'Priya', '2019-03-03 09:50:20', ''),
(53, 0, 'hey', 'Priya', '2019-03-03 09:50:20', ''),
(54, 0, 'hey', 'Priya', '2019-03-03 09:50:21', ''),
(55, 0, 'hey', 'Priya', '2019-03-03 09:50:21', ''),
(56, 0, 'hey', 'Priya', '2019-03-03 09:50:21', ''),
(57, 0, 'priya', 'Priya', '2019-03-03 09:51:24', ''),
(58, 0, 'priya', 'Priya', '2019-03-03 09:51:26', ''),
(59, 0, 'priya', 'Priya', '2019-03-03 09:51:26', ''),
(60, 0, 'priya', 'Priya', '2019-03-03 09:51:27', ''),
(61, 0, 'priya', 'Priya', '2019-03-03 09:51:50', ''),
(62, 0, 'priya', 'Priya', '2019-03-03 09:51:51', ''),
(63, 0, 'priya', 'Priya', '2019-03-03 09:51:51', ''),
(64, 0, 'priya', 'Priya', '2019-03-03 09:51:51', ''),
(65, 0, 'priya', 'Priya', '2019-03-03 09:51:51', ''),
(66, 0, 'priya', 'Priya', '2019-03-03 09:51:51', ''),
(67, 0, 'priya', 'Priya', '2019-03-03 09:51:55', ''),
(68, 0, 'priya', 'Priya', '2019-03-03 09:51:56', ''),
(69, 0, 'priya', 'Priya', '2019-03-03 09:51:56', ''),
(70, 0, 'priya', 'Priya', '2019-03-03 09:51:56', ''),
(71, 0, 'priya', 'Priya', '2019-03-03 09:51:56', ''),
(72, 0, 'priya', 'Priya', '2019-03-03 09:52:20', ''),
(73, 0, 'hey', 'Priya', '2019-03-03 09:59:22', 'www.google.com'),
(74, 0, 'search google here', 'Priya', '2019-03-03 10:05:00', 'https://www.google.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
