-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 04:18 PM
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
-- Database: `vocal_for_local`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `service` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `exp` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `prof_pic` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `service`, `location`, `exp`, `contact`, `prof_pic`, `email`, `password`) VALUES
(2, 'vishal', 'mechanic', 'malvan', 2, 2147483647, 'upload/pngwing.com (1).png', 'vishal@gmail.com', 'vishal@123'),
(4, 'shubham', 'photographer', 'malvan', 5, 2147483647, 'upload/66486172.jpg', 'abc@gmail.com', 'abc@123'),
(5, 'svgs', 'tuition teacher', 'malvan', 2, 2147483647, 'upload/images.jpeg', 'svgs@gmail.com', 'svgs@123'),
(6, 'svgs programming academy', 'tuition teacher', 'malvan', 5, 2147483647, 'upload/jh.png', 'test@gmail.com', 'test@123'),
(7, 'Seema Photo Studio', 'photographer', 'malvan', 5, 2147483647, 'upload/app.png', 'svgsacademy@gmail.com', 'svgs@1234'),
(8, 'vishal kamble', 'electrician', 'malvan', 0, 888888888, 'upload/1659263388814.jpg', 'vk921114@gmail.com', 'test123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
