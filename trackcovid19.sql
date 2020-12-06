-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 03:52 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trackcovid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `record_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `currentDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`record_id`, `shop_id`, `user_id`, `currentDateTime`) VALUES
(277, 1234, 4, '2020-12-05 16:39:21'),
(278, 9913, 4, '2020-12-05 16:39:59'),
(279, 9913, 3, '2020-12-05 22:38:34'),
(280, 9913, 37, '2020-12-05 22:42:04'),
(281, 6789, 37, '2020-12-05 22:42:14'),
(285, 6789, 89, '2020-12-06 03:54:36'),
(286, 9913, 89, '2020-12-06 04:05:43'),
(287, 9913, 37, '2020-12-06 07:23:54'),
(288, 9913, 37, '2020-12-06 07:25:25'),
(289, 6789, 4, '2020-12-06 07:28:52'),
(290, 9913, 4, '2020-12-06 07:49:56'),
(291, 1234, 4, '2020-12-06 08:01:27'),
(292, 9913, 4, '2020-12-06 08:01:53'),
(293, 6789, 4, '2020-12-06 08:02:09'),
(294, 9913, 4, '2020-12-06 08:02:22'),
(295, 9913, 4, '2020-12-06 08:02:39'),
(296, 6789, 4, '2020-12-06 08:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_id`, `shop_name`, `shop_address`) VALUES
(1234, 'DUDU Chicken', 'Ong Yi How'),
(6789, 'Pentagon 5', 'Bayan Lepas'),
(9913, 'Rainbow cafe', 'GeorgeTown');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` text NOT NULL,
  `user_ic` varchar(255) NOT NULL,
  `user_state` varchar(255) NOT NULL,
  `user_risk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_name`, `user_password`, `user_ic`, `user_state`, `user_risk`) VALUES
(3, 'chen@gmail.com', 'Qian Chen', '$2y$10$hgCBe3O0Rt944nr0cMbo1eQ0gFoyGqdnAnX535M26/YqNhIjrvyn6', '011229090522', 'Perlis', 'Low'),
(4, 'qianxing@gmail.com', 'QianXing', '$2y$10$p3HOSy6JLFxG21J31sm.y.XMJlFSsQYTTvZlzmiISIGTS8ZyFzho.', '000625078888', 'Penang', 'Medium'),
(37, 'koxun2134@gmail.com', 'Koxun', '$2y$10$gvFxKOOuILcsdDiJfohUe.h5LTZnxmOX/AFRKC/VCnFax5JUZSxvu', '980503149987', 'Kuala Lumpur', 'High'),
(47, 'poppy@gmail.com', 'Poppy', '$2y$10$KNH7sqK9/Y/ct8RXq582HOnm/8MHJrWqePiU2Z/se480Z5fbUa7xi', '990702017746', 'Johor', 'High'),
(89, '1dlqxing0200@gmail.com', 'Lim Qian Xing', '$2y$10$NZNSjKHqjIBYpzip8cVip.jDzUwviCdQwb/VJTkWiw83EchfIXA9G', '000625070987', 'Penang', 'Medium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9914;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
