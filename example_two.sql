-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 12:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example_two`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `mobile`, `image`) VALUES
(9, 'omonu', 'omonu@gmail.com', '63024232f4d2830e3c53bbc0ab17932c', '01725', '../assets/img/1.jpg'),
(10, 'Hablu', 'hablu@gmail.com', 'd345cd7dbae275f51014a2605fa54d0c', '0179382069', '../assets/img/8.jpg'),
(11, 'MD. ABU MUSHA', 'abumusaa787@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0132546521', '../assets/img/7.jpg'),
(12, ' MUSHA', 'abumusaa787@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '0132546521', '../assets/img/');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `email`, `mobile`) VALUES
(1, 'MD. ABU MUSHA', 'abumusaa787@gmail.com', '021545121'),
(2, 'MD. ABU MUSHA', 'abumusaa787@gmail.com', '546425'),
(3, 'MD. ABU MUSHA', 'abumusaa787@gmail.com', '5324242'),
(4, 'MD. ABU MUSHA', 'abumusaa787@gmail.com', '0173982'),
(5, 'MD. ABU MUSHA', 'abumusaa787@gmail.com', '017932'),
(6, 'hablu', 'hablu@gmail.com', '022615214');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
