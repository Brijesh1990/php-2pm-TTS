-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2025 at 09:28 AM
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
-- Database: `crudapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `empid` int(11) NOT NULL,
  `employeename` varchar(255) NOT NULL,
  `employeesalary` varchar(255) NOT NULL,
  `employeeaddress` text NOT NULL,
  `added_date_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`empid`, `employeename`, `employeesalary`, `employeeaddress`, `added_date_time`) VALUES
(1, 'ashif', '45800', '150 feet ring road rajkot', '26/08/2025 09:33:25 am'),
(2, 'khushi', '58500', '150 feet ring road rajkot', '26/08/2025 13:05:00 pm'),
(3, 'ashfaq', '48950', '150 feet ring road surat', '28/08/2025 12:09:31 pm'),
(4, 'sabbir', '250000', 'ahemdabad', '28/08/2025 12:17:30 pm'),
(5, 'faizan', '45000', '150 feet surat', '28/08/2025 12:17:49 pm'),
(6, 'izamul', '48600', 'canada', '28/08/2025 12:18:13 pm'),
(7, 'brijesh', '89500', '150 feet ring road near telephne exchange rajkot', '28/08/2025 12:18:49 pm'),
(8, 'sandip', '4500', '150 feeet', '28/08/2025 12:36:04 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`empid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
