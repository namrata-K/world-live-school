-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 02:30 PM
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `course_id` int(5) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`course_id`, `title`, `description`) VALUES
(0, 'hey', 'hello'),
(0, 'blog', 'jvsgkjehlzkkgl.k'),
(0, ' \"MISSION KISAAN\"', 'testing...'),
(0, ' \"MISSION KISAAN\"', 'w'),
(0, 'ey', 'hey'),
(0, ' \"MISSION KISAAN\"', 'testing...'),
(0, ' \"MISSION KISAAN\"', 'testing...'),
(1, ' \"MISSION KISAAN\"', 'testing...'),
(3, 'title', '2+2=4\r\n'),
(19, 'hey', 'hello how are you probability'),
(17, 'HEY', 'HEYYY\r\n'),
(22, 'Verbs', 'Verbs are one of the most important topics of English and fun too! ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
