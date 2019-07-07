-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 07:48 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_users`
--

CREATE TABLE `ad_users` (
  `id` int(100) UNSIGNED NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ad_users`
--

INSERT INTO `ad_users` (`id`, `first_name`, `email`, `password`, `created_date_time`, `last_updated_date_time`) VALUES
(1, 'Vishal', 'vishaljha511@gmail.com', 'vishal@123', '2019-06-30 20:27:14', '2019-06-30 20:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(100) UNSIGNED NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `first_name`, `email`, `password`, `created_date_time`, `last_updated_date_time`) VALUES
(1, 'Guest', 'guest@gmail.com', 'guest123', '2019-07-06 14:26:20', '2019-07-06 14:26:20'),
(2, 'Guest', 'guest@gmail.com', 'guest123', '2019-07-06 14:26:33', '2019-07-06 14:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) UNSIGNED NOT NULL,
  `q_one` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `q_two` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `q_three` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `q_four` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `q_five` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `a_five` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `q_one`, `q_two`, `q_three`, `q_four`, `q_five`, `a_five`, `created_date_time`) VALUES
(8, '1.All high risk jobs closed. <br>4.Day ahead planning for high risk jobs done. ', '1.All jobs carried out safely. <br>2.One job had few safety lapses. ', '2.One manpower is shortage.<br>3.Two manpower is shortage. <br>4.No manpower is available in the shift. ', 'yes, demo', '1.High risk jobs. ', 'this is for test', '2019-07-06 15:02:16'),
(9, '1.All high risk jobs closed. <br>4.Day ahead planning for high risk jobs done. ', '3.More than one job had safety lapses. ', '2.One manpower is shortage.', 'test', '1.High risk jobs. <br>3.Safety observation uploaded in SAP. <br>4.5S observation made and communicated to Gemba owned. ', 'demo', '2019-07-06 15:02:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_users`
--
ALTER TABLE `ad_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_users`
--
ALTER TABLE `ad_users`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
