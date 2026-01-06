-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2025 at 09:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskmanager_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addemployee`
--

CREATE TABLE `tbl_addemployee` (
  `employee_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_addemployee`
--

INSERT INTO `tbl_addemployee` (`employee_id`, `photo`, `name`, `email`, `password`, `phone`, `state_id`, `city_id`, `address`) VALUES
(1, 'uploads/employees/khushi.jpg', 'kshushi', 'kp699736@gmail.com', 'a3AxMjM0NTY=', 9998003879, 1, 1, '150 feet ring road rajkot'),
(2, 'uploads/employees/injmam.webp', 'inzamul', 'mathkiyainzamul3@gmail.com', 'aW4xMjM0NTY=', 9521212121, 1, 2, 'ahemdabad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `aid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `email`, `password`) VALUES
(1, 'superadmin@gmail.com', 'admin$$12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `cityname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `state_id`, `cityname`) VALUES
(1, 1, 'Rajkot'),
(2, 1, 'Ahemdabad'),
(3, 1, 'Vadodara'),
(4, 1, 'Surat'),
(5, 3, 'Mumbai'),
(6, 3, 'Nagpur'),
(7, 3, 'Pune'),
(8, 3, 'Aurangabad'),
(9, 4, 'Jaipur'),
(10, 4, 'Kota'),
(11, 4, 'Udaipur'),
(12, 4, 'Ajmer'),
(13, 2, 'Varansi'),
(14, 2, 'Agra'),
(15, 2, 'Lucknow'),
(16, 2, 'Mirzapur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(11) NOT NULL,
  `statename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `statename`) VALUES
(1, 'Gujrat'),
(2, 'Uttar pradesh'),
(3, 'Mahrastra'),
(4, 'Rajasthan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `task_id` int(11) NOT NULL,
  `typeoftask` varchar(255) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `taskname` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `added_date_time` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`task_id`, `typeoftask`, `employee_id`, `taskname`, `priority`, `added_date_time`) VALUES
(1, 'Projects', 1, 'Laravel sanctup api crud operation', 'Higher', '2025-09-09T13:14'),
(2, 'Personaltask', 2, 'Hello inzu please go sabji mandi and take one kg bateta', 'Lower', '2025-09-09T13:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addemployee`
--
ALTER TABLE `tbl_addemployee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_addemployee`
--
ALTER TABLE `tbl_addemployee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
