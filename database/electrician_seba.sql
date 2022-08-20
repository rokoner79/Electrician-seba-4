-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 10, 2022 at 07:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electrician_seba`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_information`
--

CREATE TABLE `admin_information` (
  `role` int(90) NOT NULL,
  `login` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `electrician_information`
--

CREATE TABLE `electrician_information` (
  `username` varchar(19) DEFAULT NULL,
  `email` varchar(19) DEFAULT NULL,
  `password` varchar(19) DEFAULT NULL,
  `contact` varchar(23) NOT NULL,
  `thana` varchar(23) NOT NULL,
  `image` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electrician_information`
--

INSERT INTO `electrician_information` (`username`, `email`, `password`, `contact`, `thana`, `image`) VALUES
('zaman', 'zaman89584@gmail.co', '12345', '01796094894', 'Kaunia', ''),
('rik', 'rokoner79@gmail.com', '12345', '01796094800', 'Kaunia', ''),
('rr', 'rr', '', '', '', ''),
('ra', 'ra@gmail.com', '12345', '01796094844', 'Mahigonj', ''),
('a', 'a@gmail.com', '12345', '01796094800', 'Mahigonj', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `role` int(11) NOT NULL,
  `username` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL,
  `contact` varchar(90) NOT NULL,
  `thana` varchar(90) NOT NULL,
  `image` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`role`, `username`, `email`, `password`, `contact`, `thana`, `image`) VALUES
(2, 'admin', 'admin@gmail.com', '12345', '', '', ''),
(3, 'akash', 'akash@gmail.com', '12345', '', '', ''),
(4, 'pappu', 'pappu@gmail.com', '12345', '', '', ''),
(5, 'nandi', 'nandi@gmail.com', '12345', '', '', ''),
(6, 'raju', 'raju@gmail.com', '12345', '', '', ''),
(7, 'b', 'b@gmail.com', '12345', '', '', 'img2.jpg'),
(8, 'c', 'c', '', '', '', ''),
(9, 'c', 'c@gmail.com', '12345', '01796094856', 'savar', 'img3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
