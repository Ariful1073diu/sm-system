-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 01:49 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_infos`
--

CREATE TABLE `student_infos` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `class` varchar(300) DEFAULT NULL,
  `roll` varchar(300) DEFAULT NULL,
  `city` varchar(300) DEFAULT NULL,
  `contract` varchar(300) DEFAULT NULL,
  `phone` varchar(300) DEFAULT NULL,
  `photo` varchar(300) DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_infos`
--

INSERT INTO `student_infos` (`id`, `name`, `class`, `roll`, `city`, `contract`, `phone`, `photo`, `datetime`) VALUES
(1, 'Ariful islam', '2th', '101010', 'Shokhipur', '01731763488', NULL, '101010.jpg', '2021-07-15 18:08:58'),
(2, 'Ariful islam', '2th', '101010', 'Shokhipur', '01731763488', NULL, '101010.jpg', '2021-07-15 18:09:21'),
(3, 'shamim', '5th', '554754', 'Dhaka', '01731763488', NULL, '554754.jpg', '2021-07-15 19:33:48'),
(4, 'Ariful islam', '3th', '326352', 'Borga', '01632968574', NULL, '326352.PNG', '2021-07-15 19:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `c_password` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `c_password`, `photo`, `status`) VALUES
(1, 'Ariful', 'ariful3cs@gmail.com', 'ariful3cs', 'bc1eba600ac38e4a7701975c52a7e8b5', '', '', ''),
(2, 'Habiba', 'habiba2020@gmail.com', 'habiba20', '7999796576cc010002932c4c54c47e2b', '7999796576cc010002932c4c54c47e2b', 'habiba20.', 'active'),
(3, 'Runa', 'runa22@gmail.com', 'runa22mz', '721538e80166f984f1dc9549434b3bca', '721538e80166f984f1dc9549434b3bca', 'runa22mz.', 'Inactive'),
(4, 'Shakib', 'shakib22@gmail.com', 'shakib22', 'd262dfd58340d4cff9438abdfbd1b70d', 'd262dfd58340d4cff9438abdfbd1b70d', 'shakib22.', 'Inactive'),
(5, 'MD ARIFUL ISLAM', 'ariful3@gmail.com', 'ariful3cp', 'fcea920f7412b5da7be0cf42b8c93759', 'fcea920f7412b5da7be0cf42b8c93759', 'ariful3cp.', 'Inactive'),
(6, 'Al-amin Khan', 'alamin22@gmail.com', 'alamin22', '3eab9cbc9edda5ba845918529c3c3520', '3eab9cbc9edda5ba845918529c3c3520', 'alamin22.PNG', 'Inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_infos`
--
ALTER TABLE `student_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_infos`
--
ALTER TABLE `student_infos`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
