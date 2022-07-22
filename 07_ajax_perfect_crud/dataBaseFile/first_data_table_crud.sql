-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 06:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajax_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `first_data_table_crud`
--

CREATE TABLE `first_data_table_crud` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `first_data_table_crud`
--

INSERT INTO `first_data_table_crud` (`id`, `name`, `email`, `details`, `created_time`, `update_time`) VALUES
(1, 'Md Rayhan Hossain', 'rayhan.cse2k17@gmail.com', 'Hello guyz it\'s me.', '2022-07-22 01:38:32', '2022-07-22 01:38:32'),
(2, 'Md Rakib Hossain', 'rakib.2001@gmail.com', 'Hello, My name is Rakib.', '2022-07-22 01:46:09', '2022-07-22 01:46:09'),
(3, 'Abu Sied', 'abusied@gmail.com', 'Hello, It.s me Abu Sied.', '2022-07-22 02:18:57', '2022-07-22 02:18:57'),
(4, 'Md Halim Mia', 'halim@gmail.com', 'Hello, I am Md Halim Mia.', '2022-07-22 02:22:20', '2022-07-22 02:22:20'),
(24, 'Hello Programmer 1', 'hello@gmail.com', 'Hello PHP', '2022-07-22 04:59:00', '2022-07-22 16:10:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `first_data_table_crud`
--
ALTER TABLE `first_data_table_crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `first_data_table_crud`
--
ALTER TABLE `first_data_table_crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
