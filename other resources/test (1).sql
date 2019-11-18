-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 06:28 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(200) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `email`, `mobile`, `password`, `type`) VALUES
('Ibene Anas', 'anasyarn', 'anasyarn@gmail.com', '01771385428', '1234', 'admin'),
('Moinuddin Chy', 'moin', 'chymoin@gmail.com', '01521451411', '1234', 'seller'),
('Abdullah Sahms', 'shams', 'shams@gmail.com', '01938443331', '1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users_image`
--

CREATE TABLE `users_image` (
  `id` int(5) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mob_no` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_image`
--

INSERT INTO `users_image` (`id`, `first_name`, `last_name`, `image`, `mob_no`, `user_name`, `password`) VALUES
(1, 'anas', 'shamim', '6.jpg', 5254, 'sghj', '1234'),
(2, 'anas', 'shamim', '1.jpg', 1234, 'anas', '1234'),
(3, 'anas', 'shamim', '3.jpg', 1234, 'anasyarn', '1234'),
(4, 'ba', 'jb', '1.jpg', 51221, '1', '1'),
(5, 'ba', 'jb', '3.jpg', 51221, '2', '2'),
(6, 'ba', 'jb', '3.jpg', 51221, '3', '3'),
(7, 'gjhkjn', 'ctfuvgh', 'anis', 85412, 'anis', '1234'),
(8, 'hbjlkjnlk', 'rdxytcfuvgbh', 'pop', 87854210, 'pop', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users_image`
--
ALTER TABLE `users_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_image`
--
ALTER TABLE `users_image`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
