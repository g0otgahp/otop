-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2017 at 10:39 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otop`
--

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `general_id` int(20) NOT NULL,
  `general_name` varchar(50) NOT NULL,
  `general_detail` varchar(100) NOT NULL,
  `general_img` varchar(100) NOT NULL,
  `general_status` int(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`general_id`, `general_name`, `general_detail`, `general_img`, `general_status`) VALUES
(1, 'OTOP ของดีชัยภูมิ', 'OTOP ของดีชัยภูมิ\r\nOTOP ของดีชัยภูมิ', '20170920223253.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(20) NOT NULL,
  `member_email` varchar(50) NOT NULL,
  `member_username` varchar(50) NOT NULL,
  `member_password` varchar(50) NOT NULL,
  `member_status` int(20) NOT NULL DEFAULT '1',
  `member_fname` varchar(50) NOT NULL,
  `member_lname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_email`, `member_username`, `member_password`, `member_status`, `member_fname`, `member_lname`) VALUES
(1, 'admin@admin.com', 'admin', 'admin', 10, 'admin', 'admin'),
(2, '2@2', '2', '2', 0, 'สารา', 'สองสอง');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_detail` varchar(100) NOT NULL,
  `product_price` varchar(20) NOT NULL,
  `product_img` varchar(200) NOT NULL,
  `product_status` int(20) NOT NULL DEFAULT '1',
  `product_group_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_detail`, `product_price`, `product_img`, `product_status`, `product_group_id`) VALUES
(1, 'ผ้าไหมสีแดง', 'ผ้าไหมสีแดง จากอำเภอภูเขียว', '200', '20170920201535.jpg  ', 1, 1),
(2, 'หม่ำ ป้าอ๊อด', '“หม่ำ” โอทอปขึ้นชื่อของเมืองชัยภูมิ', '150', '20170920201719.JPEG', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_group`
--

CREATE TABLE `product_group` (
  `product_group_id` int(20) NOT NULL,
  `product_group_name` varchar(100) NOT NULL,
  `product_group_status` int(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_group`
--

INSERT INTO `product_group` (`product_group_id`, `product_group_name`, `product_group_status`) VALUES
(1, 'ผ้าไหมแท้ 100%', 1),
(2, 'หม่ำ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tambon`
--

CREATE TABLE `tambon` (
  `tambon_id` int(20) NOT NULL,
  `tambon_name` varchar(50) NOT NULL,
  `tambon_img` varchar(100) NOT NULL,
  `tambon_status` int(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tambon`
--

INSERT INTO `tambon` (`tambon_id`, `tambon_name`, `tambon_img`, `tambon_status`) VALUES
(1, 'ในเมือง', '20170920222028.JPEG ', 1),
(2, 'บ้านค่าย', '20170920220739.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`general_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_group`
--
ALTER TABLE `product_group`
  ADD PRIMARY KEY (`product_group_id`);

--
-- Indexes for table `tambon`
--
ALTER TABLE `tambon`
  ADD PRIMARY KEY (`tambon_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `general_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_group`
--
ALTER TABLE `product_group`
  MODIFY `product_group_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tambon`
--
ALTER TABLE `tambon`
  MODIFY `tambon_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
