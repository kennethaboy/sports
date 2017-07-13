-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2016 at 06:31 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `type` varchar(30) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `cust_id`, `amount`, `type`, `date`) VALUES
(7, 7, '15595.00', 'Receivables', '2016-01-12 08:37:11'),
(8, 7, '10000.00', 'Payment', '2016-02-01 08:38:40'),
(9, 7, '2000.00', 'Credit Memo', '2016-03-31 08:39:04'),
(10, 7, '1500.00', 'Payment', '2016-03-31 08:39:20'),
(11, 5, '2500.00', 'Receivables', '2016-03-31 08:39:48'),
(12, 6, '5500.00', 'Receivables', '2016-03-31 08:40:00'),
(13, 4, '1250.00', 'Receivables', '2016-03-31 08:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Paint'),
(2, 'Brush'),
(3, 'Lawn and Garden Tools'),
(4, 'Cleaning Supplies'),
(5, 'Kitchenware'),
(6, 'Household Products'),
(7, 'Measuring and Marking'),
(8, 'Lighting and Ceiling Fans'),
(9, 'Kitchen and Bath'),
(10, 'Plumbing Supplies');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_address` varchar(100) NOT NULL,
  `cust_contact` varchar(30) NOT NULL,
  `balance` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_address`, `cust_contact`, `balance`) VALUES
(4, 'Riza Alita', 'Brgy. Ulang, Bago City, Neg. Occ', '09051914070', '1250.00'),
(5, 'Jonathan Dela China', 'Brgy. Tanza, Silay City, Neg. Occ.', '09124545192', '2500.00'),
(6, 'Reah Yanson', 'Brgy. Saging, EB Magalona', '0916458752', '5500.00'),
(7, 'Jomar Pabiania', 'Brgy. Mandalagan, Bacolod City', '091245450940', '2095.00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `prod_price` decimal(10,2) NOT NULL,
  `prod_qty` varchar(10) NOT NULL,
  `prod_unit` varchar(50) NOT NULL,
  `prod_desc` varchar(50) NOT NULL,
  `reorder` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `cat_name`, `prod_price`, `prod_qty`, `prod_unit`, `prod_desc`, `reorder`) VALUES
(7, 'BULB LIGHT INCANDESCENT', 'Lighting and Ceiling Fans', '150.00', '150', 'pcs', '', 10),
(8, 'CABLE LV LANDSCAPE 16/2 50FT', 'Lighting and Ceiling Fans', '800.00', '20', 'pcs', '', 10),
(9, 'SHELLAC SEALR FNSH CLEAR 1/2PT', 'Paint', '380.00', '5', 'pint', '', 5),
(10, 'WATERPROOFER MASONRY PWDR 35LB', 'Paint', '2000.00', '18', 'gallons', '', 5),
(11, 'PAINT ACRYLIC MP FLAT BLACK QT', 'Paint', '460.00', '10', 'quartz', '', 10),
(12, 'TUBING VINYL SPA FLEX 3/4X100', 'Kitchen and Bath', '3150.00', '49', 'roll', '', 5),
(13, ' PIPE STEEL BLACK 1/4IN X10FT', 'Plumbing Supplies', '520.00', '20', 'pcs', '', 10),
(14, ' FAUCET WASHER FLAT KIT 200PC', 'Plumbing Supplies', '1250.00', '48', 'pcs', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `stockin`
--

CREATE TABLE `stockin` (
  `stockin_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `qty` int(6) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockin`
--

INSERT INTO `stockin` (`stockin_id`, `prod_id`, `qty`, `date`) VALUES
(14, 14, 50, '2016-03-31 08:32:25'),
(15, 13, 25, '2016-03-31 08:32:30'),
(16, 7, 150, '2016-03-31 08:32:36'),
(17, 8, 30, '2016-03-31 08:32:41'),
(18, 11, 30, '2016-03-31 08:32:46'),
(19, 9, 15, '2016-03-31 08:32:51'),
(20, 12, 50, '2016-03-31 08:32:57'),
(21, 10, 20, '2016-03-31 08:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `stockout`
--

CREATE TABLE `stockout` (
  `stockout_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `qty` int(6) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockout`
--

INSERT INTO `stockout` (`stockout_id`, `prod_id`, `qty`, `price`, `date`) VALUES
(9, 14, 2, '1250.00', '2016-03-30 08:33:25'),
(10, 13, 5, '520.00', '2016-03-27 08:33:30'),
(11, 8, 10, '800.00', '2016-03-31 08:33:34'),
(12, 12, 1, '3150.00', '2016-03-31 08:33:40'),
(13, 10, 2, '2000.00', '2016-03-22 08:33:45'),
(14, 9, 10, '380.00', '2016-03-23 08:33:55'),
(15, 11, 20, '460.00', '2016-03-29 08:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit`) VALUES
(1, 'kg'),
(2, 'pcs'),
(3, 'dozen'),
(4, 'liter'),
(5, 'gallons'),
(6, 'mL'),
(7, 'meter'),
(8, 'pint'),
(9, 'quartz'),
(10, 'roll');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'a1Bz20ydqelm8m1wqlc4ca4238a0b923820dcc509a6f75849b', 'Lee Pipez');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `stockin`
--
ALTER TABLE `stockin`
  ADD PRIMARY KEY (`stockin_id`);

--
-- Indexes for table `stockout`
--
ALTER TABLE `stockout`
  ADD PRIMARY KEY (`stockout_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `stockin`
--
ALTER TABLE `stockin`
  MODIFY `stockin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `stockout`
--
ALTER TABLE `stockout`
  MODIFY `stockout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
