-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 08:38 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomport2`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `pid` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `bid` int(10) NOT NULL DEFAULT 0,
  `uid` int(10) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `price` int(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pid`, `title`, `description`, `bid`, `uid`, `status`, `price`, `image`) VALUES
(18, 'Cloth', 'mhcgbdvnc', 9, 11, 1, 2500, 'post5fef6cce5aa9d.jpg'),
(21, 'Ladies Watch', 'Watch For Women', 0, 14, 1, 1500, 'post5ff0207d0ac5d.jpg'),
(22, 'Shoe', 'Comfortable Footwear for men', 9, 14, 1, 2500, 'post5ff020a48bbb0.jpg'),
(23, 'Purse', 'Ladies Purse', 0, 11, 1, 3000, 'post5ff02138bc3f9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `utype` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `balance` int(50) NOT NULL DEFAULT 100000,
  `status` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `email`, `address`, `dob`, `gender`, `utype`, `password`, `balance`, `status`) VALUES
(4, 'Mohaiminul', 'mohaiminulrahman2@gmail.com', 'Dhaka', '2020-12-03', 'male', 'seller', '331998t#T', 100000, 1),
(7, 'mrh', 'mrh@gmail.com', 'Dhaka', '03/03/1998', 'male', 'admin', '331998t#T', 100000, 1),
(9, 'Joy', 'joyk@gmail.com', 'Dhaka', '2020-12-15', 'male', 'customer', '331998t#T', 62990, 1),
(11, 'Sumaiya Jahan', 'sm@gmail.com', 'Dhaka', '2021-01-06', 'female', 'seller', '331998t#T', 102500, 1),
(13, 'Shifat Khan', 'sh@gmail.com', 'Dhaka', '2021-01-21', 'male', 'customer', '331998t#T', 100000, 0),
(14, 'Md Ali', 'ali@gmail.com', 'Dhaka', '2021-01-03', 'male', 'seller', '331998t#T', 102500, 1),
(15, 'Luna Khan', 'luna@gmail.com', 'Dhaka', '2021-01-11', 'female', 'customer', '331998t#T', 100000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
