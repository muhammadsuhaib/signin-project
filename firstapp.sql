-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2017 at 05:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firstapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, 'islamabad', 'karachi@gmai11l.com', 'dec4d9f4f627bb960c02c0512a1bff67'),
(2, 'islamabad Karachi', 'karachi@gmai11l.com', 'c25b10bab05adb0fa4f41eb1f3e0e6c8'),
(3, 'karachi', 'karachi@gmail.com', 'MD5(karachi)'),
(4, 'karachi', 'karachi@gmail.com', 'd3a228b06402aa01ee2d0a44ddf8917c'),
(5, 'karachi', 'karachi@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'asas', 'asas@gmail.com', 'e219b56989281a7846dd836161d7a2bd'),
(7, '', 'Karachi@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, '', 'adsfas@gmial.com', '4d293bfabee1a0a1b4f8c99436dce65c'),
(9, '', 'adsfas@gmial.com', '4d293bfabee1a0a1b4f8c99436dce65c'),
(10, 'asdfasdf', 'adsfas@gmial.com', 'a3dcb4d229de6fde0db5686dee47145d'),
(11, '    asdfasdf     ', 'adsfas@gmial.com', 'a3dcb4d229de6fde0db5686dee47145d'),
(12, 'kjkkdkkdkkkkkkkkkkkllllll', 'adsfas@gmial.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, 'kjkkdkkdkkkkkkkkkkkllllll', 'adsfas@gmial.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(14, 'KJKKDKKDKKKKKKKKKKKLLLLLL', 'adsfas@gmial.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(15, 'ABCD', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(16, 'KKK', 'kkk@gmail.com', 'cb42e130d1471239a27fca6228094f0e'),
(17, 'mm', 'mm@gmail.com', 'b3cd915d758008bd19d0f2428fbb354a'),
(18, 'doin', 'doinakhtar@yahoo.com', '6c5078d6782e1941e5be3fecde388c27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
