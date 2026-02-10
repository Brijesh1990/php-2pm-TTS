-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2026 at 11:29 AM
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
-- Database: `sharddha-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addcategory`
--

CREATE TABLE `tbl_addcategory` (
  `category_id` int(11) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `addeddate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_addcategory`
--

INSERT INTO `tbl_addcategory` (`category_id`, `categoryname`, `addeddate`) VALUES
(2, 'choli', '2022-10-04'),
(3, 'kurti', '2022-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addproducts`
--

CREATE TABLE `tbl_addproducts` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `oldprice` float NOT NULL,
  `offerprice` float NOT NULL,
  `productimage` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `descriptions` text NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_addproducts`
--

INSERT INTO `tbl_addproducts` (`product_id`, `category_id`, `subcategory_id`, `productname`, `oldprice`, `offerprice`, `productimage`, `qty`, `descriptions`, `added_date`) VALUES
(1, 2, 1, 'Fancy Chaniya Choli', 4500, 3900, 'uploads/products/fancy-chaniya-choli-500x500.png', 1, ' About this Item\r\n\r\n    Material: Banarasi Silk\r\n\r\n    Care Instructions: Hand Wash\r\n\r\n    Color: Pink\r\n\r\n    Sleeve Type: Half Sleeve\r\n', '2022-10-06'),
(3, 2, 1, 'westen choli', 5000, 3999, 'uploads/products/chaniya-choli-1000x1000.webp', 2, ' Product Details\r\nMaterial Composition\r\nBanarasi Silk\r\nCare Instructions\r\nHand Wash Only\r\nNeck Style\r\nU-Neck\r\nOccasion Type\r\nCeremony\r\nCountry of Origin\r\nIndia\r\n', '2222-02-10'),
(4, 2, 5, 'tradditional choli', 3000, 2950, 'uploads/products/embroidered-chaniya-choli-500x500.jpg', 5, ' Product Details\r\nMaterial Composition\r\nBanarasi Silk\r\nCare Instructions\r\nHand Wash Only\r\nNeck Style\r\nU-Neck\r\nOccasion Type\r\nCeremony\r\nCountry of Origin\r\nIndia\r\n', '2022-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addsubcategory`
--

CREATE TABLE `tbl_addsubcategory` (
  `subcategory_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategoryname` varchar(255) NOT NULL,
  `addeddate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_addsubcategory`
--

INSERT INTO `tbl_addsubcategory` (`subcategory_id`, `category_id`, `subcategoryname`, `addeddate`) VALUES
(1, 2, 'design choli', '2022-10-06'),
(3, 3, 'cotton kurti', '2022-10-06'),
(4, 3, 'sarara kurti', '2022-10-06'),
(5, 2, 'Traditional choli', '2022-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'shradha_admin@gmail.com', 'admin123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartid` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `subtotal` float NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartid`, `customer_id`, `product_id`, `pname`, `quantity`, `price`, `subtotal`, `status`) VALUES
(1, 3, 3, 'westen choli', 1, 3999, 3999, 'pending'),
(2, 3, 1, 'Fancy Chaniya Choli', 3, 3900, 11700, 'pending'),
(3, 3, 1, 'Fancy Chaniya Choli', 3, 3900, 11700, 'pending'),
(4, 4, 3, 'westen choli', 2, 3999, 7998, 'pending'),
(5, 5, 3, 'westen choli', 1, 3999, 3999, 'pending'),
(6, 6, 3, 'westen choli', 2, 3999, 7998, 'pending'),
(7, 7, 1, 'Fancy Chaniya Choli', 1, 3900, 3900, 'pending'),
(8, 8, 1, 'Fancy Chaniya Choli', 2, 3900, 7800, 'pending'),
(9, 9, 1, 'Fancy Chaniya Choli', 1, 3900, 3900, 'pending'),
(10, 9, 4, 'tradditional choli', 2, 2950, 5900, 'pending'),
(11, 10, 3, 'westen choli', 2, 3999, 7998, 'pending'),
(12, 11, 4, 'tradditional choli', 1, 2950, 2950, 'pending'),
(13, 12, 1, 'Fancy Chaniya Choli', 2, 3900, 7800, 'pending'),
(14, 12, 4, 'tradditional choli', 1, 2950, 2950, 'pending'),
(15, 14, 1, 'Fancy Chaniya Choli', 1, 3900, 3900, 'pending'),
(16, 16, 1, 'Fancy Chaniya Choli', 2, 3900, 7800, 'pending'),
(17, 17, 1, 'Fancy Chaniya Choli', 1, 3900, 3900, 'pending'),
(18, 18, 3, 'westen choli', 2, 3999, 7998, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `ctid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ctname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`ctid`, `sid`, `ctname`) VALUES
(1, 1, 'Rajkot'),
(2, 1, 'Ahemdabad'),
(3, 1, 'Surat'),
(4, 1, 'Junagad'),
(5, 4, 'Bhopal'),
(6, 4, 'Indore'),
(7, 3, 'Jaipur'),
(8, 3, 'Udaipur'),
(9, 3, 'Kota'),
(10, 3, 'Mount abu'),
(11, 2, 'Varansi'),
(12, 2, 'Mathura'),
(13, 2, 'Agra'),
(14, 2, 'Mirzapur'),
(15, 2, 'Gaziabad'),
(16, 2, 'Pandeypur'),
(17, 2, 'Noida'),
(18, 2, 'Ayodya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `text_firstname` varchar(255) NOT NULL,
  `text_lastname` varchar(255) NOT NULL,
  `text_email` varchar(255) NOT NULL,
  `text_mobile` bigint(20) NOT NULL,
  `text_message` text NOT NULL,
  `text_datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `text_firstname`, `text_lastname`, `text_email`, `text_mobile`, `text_message`, `text_datetime`) VALUES
(1, 'brijesh', 'pandey', 'bkpandey.pandey@gmail.com', 9998003879, 'hi i am not able to find a customer care number please send us number', '20/09/2022 09:15:27 am'),
(2, 'brijesh', 'pandey', 'bkpandey.pandey@gmail.com', 9998003879, 'hi', '20/09/2022 09:20:04 am'),
(3, 'nikesh', 'pandey', 'bkpandey.pandey@gmail.com', 9998003879, 'hi', '20/09/2022 09:23:49 am'),
(4, 'brijesh', 'pandey', 'bkpandey.pandey@gmail.com', 9998003879, 'hi', '20/09/2022 09:25:56 am'),
(5, 'hitesh', 'joshi', 'hitesh@gmail.com', 9998003879, 'hi', '20/09/2022 09:29:29 am'),
(6, '', '', '', 0, '', '14/12/2022 12:37:31 pm'),
(7, 'brijesh', 'pandey', 'bkpandey.pandey@gmail.com', 9998003879, 'hello kindly send a customer care number i want to return products', '06/05/2023 12:14:19 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `text_firstname` varchar(255) NOT NULL,
  `text_lastname` varchar(255) NOT NULL,
  `text_email` varchar(255) NOT NULL,
  `text_password` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `upload_photo` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `text_phone` bigint(20) NOT NULL,
  `text_address` text NOT NULL,
  `sid` int(11) NOT NULL,
  `ctid` int(11) NOT NULL,
  `text_rdatetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `text_firstname`, `text_lastname`, `text_email`, `text_password`, `dob`, `upload_photo`, `gender`, `text_phone`, `text_address`, `sid`, `ctid`, `text_rdatetime`) VALUES
(3, 'darshita', 'patel', 'darshita007@gmail.com', 'MTIzNDU2', '2021-09-19', 'uploads/customers/tradditaon.jpg', 'female', 9173357217, '150 feet ring road rajkot near telephone exchange 360005', 1, 1, '20/10/2022 08:57:36 am'),
(4, 'satish', 'bahda', 'satish@gmail.com', 'MTIzNDU2', '2021-10-04', 'uploads/customers/8.webp', '', 9998003879, '150 feet ring road rajkot', 1, 1, '05/11/2022 09:51:44 am'),
(5, 'nameera', 'pathan', 'nameera@gmail.com', 'MTIzNDU2', '2021-10-14', 'uploads/customers/index.jpg', 'female', 9998003879, 'hi', 1, 1, '15/11/2022 15:09:41 pm'),
(6, 'priynka', 'pandey', 'priynka@gmail.com', 'MTIzNDU=', '2021-10-23', 'uploads/customers/g1.jpg', 'male', 9998003879, 'hi', 1, 1, '24/11/2022 16:50:57 pm'),
(7, 'anand', 'pandya', 'anand@gmail.com', 'MTIzNDU2', '2021-11-13', 'uploads/customers/IMG_20160904_171123.jpg', 'male', 9998003879, 'jamanagar', 1, 1, '14/12/2022 11:24:30 am'),
(8, 'savan', 'pandya', 'savan@gmail.com', 'MTIzNDU2', '2022-12-17', 'uploads/customers/IMG_20160904_231256.jpg', 'male', 9998003879, 'rajkot', 1, 1, '17/12/2022 11:50:31 am'),
(9, 'brijesh', 'pandey', 'bkpandey.pandey@gmail.com', 'MTIzNDU=', '1991-07-04', 'uploads/customers/internet.ico', 'male', 9998003879, 'rajkot', 1, 1, '13/01/2023 09:18:07 am'),
(10, 'ami', 'patel', 'amipatel@gmail.com', 'MTIzNDU=', '2022-12-12', 'uploads/customers/t2.jpg', 'female', 9998003879, 'ahemdabad', 1, 2, '13/01/2023 13:36:53 pm'),
(11, 'prit', 'pandya', 'prit@gmail.com', 'MTIzNDU=', '2022-01-17', 'uploads/customers/loader.gif', 'male', 9998003879, 'rajkot ', 1, 1, '18/02/2023 12:54:58 pm'),
(12, 'jeel', 'pandey', 'jeel@gmail.com', 'MTIzNDU=', '2022-01-21', 'uploads/customers/loader.gif', 'male', 9998003879, 'ji', 1, 1, '22/02/2023 09:42:40 am'),
(13, 'kishan', 'pandya', 'kishan', 'MTIzNDU2', '2022-03-17', 'uploads/customers/ap22312071681283-0d9c328f69a7c7f15320e8750d6ea447532dff66-s1100-c50.jpg', '', 9998003879, 'p', 1, 1, '18/04/2023 18:28:33 pm'),
(14, 'milan', 'pandey', 'milan@gmail.com', 'MTIzNDU2', '2022-03-17', 'uploads/customers/ap22312071681283-0d9c328f69a7c7f15320e8750d6ea447532dff66-s1100-c50.jpg', 'male', 9998003879, 'k', 1, 1, '18/04/2023 18:29:40 pm'),
(15, '', '', '', '', '', 'uploads/customers/', '', 0, '', 0, 0, '06/05/2023 12:01:42 pm'),
(16, 'jigar', 'pandya', 'jigar@gmail.com', 'MTIzNDU2', '2022-04-05', 'uploads/customers/ap22312071681283-0d9c328f69a7c7f15320e8750d6ea447532dff66-s1100-c50.jpg', '', 9998003879, '150 feet ring road', 1, 2, '06/05/2023 12:02:38 pm'),
(17, 'aftab', 'shekh', 'aftab@gmail.com', 'MTIzNDU2', '2022-04-19', 'uploads/customers/client-img.png', 'male', 9998003879, 'rajkot', 1, 1, '20/05/2023 12:16:57 pm'),
(18, 'jay', 'pandya', 'jay@gmail.com', 'MTIzNDU2', '2022-04-18', 'uploads/customers/1.jpg', 'male', 9998003879, 'hi', 1, 1, '20/05/2023 15:37:44 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `sid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`sid`, `sname`) VALUES
(1, 'gujrat'),
(2, 'uttar pradesh'),
(3, 'Rajsthan'),
(4, 'Madhya pradesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addcategory`
--
ALTER TABLE `tbl_addcategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_addproducts`
--
ALTER TABLE `tbl_addproducts`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `subcategory_id` (`subcategory_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_addsubcategory`
--
ALTER TABLE `tbl_addsubcategory`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`ctid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `ctid` (`ctid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_addcategory`
--
ALTER TABLE `tbl_addcategory`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_addproducts`
--
ALTER TABLE `tbl_addproducts`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_addsubcategory`
--
ALTER TABLE `tbl_addsubcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `ctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
