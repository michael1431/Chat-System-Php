-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2019 at 10:27 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_table`
--

CREATE TABLE `chat_table` (
  `c_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `date` varchar(255) NOT NULL,
  `c_key` varchar(255) NOT NULL COMMENT 'name+msg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat_table`
--

INSERT INTO `chat_table` (`c_id`, `name`, `msg`, `date`, `c_key`) VALUES
(1, 'emon', 'what.s up..', '06:31:34pm(20-01-19)', 'emon(what.s up..)'),
(2, 'Rahul Joy', 'doing nothing right now,,<br>\r\nwhat about u...', '06:32:24pm(20-01-19)', 'Rahul Joy(doing nothing right now,,<br>\nwhat about u...)'),
(3, 'emon', 'just relaxing for some time', '06:34:27pm(20-01-19)', 'emon(just relaxing for some time)'),
(4, 'Rahul Joy', 'so,have you planned anything<br>\r\nthis weekend..', '06:35:46pm(20-01-19)', 'Rahul Joy(so,have you planned anything<br>\r\nthis weekend..)'),
(5, 'emon', 'nothing,yet...', '06:54:40pm(20-01-19)', 'emon(nothing,yet...)'),
(6, 'Rahul Joy', 'i think we need a trip to refresh our mind,,,', '08:09:28pm(20-01-19)', 'Rahul Joy(i think we need a trip to refresh our mind,,,)'),
(7, 'emon', 'okk,lets do it,,,', '08:11:45pm(20-01-19)', 'emon(okk,lets do it,,,)'),
(8, 'Rahul Joy', 'i will take the responsibilities of this tour,,,<br>\r\ni hope it will be a great tour for us,,', '08:16:38pm(20-01-19)', 'Rahul Joy(i will take the responsibilities of this tour,,,<br>\r\ni hope it will be a great tour for us,,)'),
(9, 'Michael', 'Hi.Emon!', '03:25:33am(05-03-19)', 'Michael(Hi.Emon!)'),
(10, 'Emon', 'Hi,Dost.', '03:25:51am(05-03-19)', 'Emon(Hi,Dost.)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_table`
--
ALTER TABLE `chat_table`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_key` (`c_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_table`
--
ALTER TABLE `chat_table`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
