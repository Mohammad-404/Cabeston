-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 12:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_fullname` varchar(255) NOT NULL,
  `admin_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_fullname`, `admin_image`) VALUES
(52, 'admin@admin.com', '2020', 'Admin', 'logo1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cetegory`
--

CREATE TABLE `cetegory` (
  `cat_id` int(3) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_desc` varchar(50) NOT NULL,
  `cat_image` text NOT NULL,
  `stat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cetegory`
--

INSERT INTO `cetegory` (`cat_id`, `cat_name`, `cat_desc`, `cat_image`, `stat`) VALUES
(26, 'FreeBase', 'Collection 2021', 'freebase.jpg', 'New'),
(27, 'Saltnic', 'Collection 2021', 'saltnic_vgod_applebomb_25mg.png', 'New'),
(28, 'Coils&Pods', 'Collection 2021', 'coilsjpg-1542821694413.jpg', 'New'),
(29, 'Device', 'Collection 2021', '5c61c7429ce5c.jpeg', 'New'),
(30, 'dfgfdfg', '', '1.png', ''),
(31, 'dsfsdf', '', '', ''),
(32, 'ddsfg', '', '', ''),
(33, 'xfxgdf', '', '', ''),
(34, 'dsfsdf', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `phone` int(20) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(3) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_password` varchar(50) NOT NULL,
  `cust_mobile` int(20) NOT NULL,
  `cust_address` varchar(50) NOT NULL,
  `business` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `cust_password`, `cust_mobile`, `cust_address`, `business`) VALUES
(94, 'Osama Almasri', 'osama@gmail.com', '123', 1234654848, 'amman', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `nicotine`
--

CREATE TABLE `nicotine` (
  `id` int(10) NOT NULL,
  `strength` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(3) NOT NULL,
  `order_date` date NOT NULL,
  `cust_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `cust_id`) VALUES
(174, '2021-01-26', 94),
(175, '2021-01-27', 94),
(176, '2021-01-27', 94),
(177, '2021-02-01', 94),
(178, '2021-02-01', 94),
(179, '2021-02-03', 94),
(180, '2021-02-03', 94),
(181, '2021-02-04', 94),
(182, '2021-02-04', 94),
(183, '2021-02-04', 94),
(184, '2021-02-04', 94),
(185, '2021-02-04', 94),
(186, '2021-02-04', 94),
(187, '2021-02-04', 94),
(188, '2021-02-04', 94),
(189, '2021-02-04', 94),
(190, '2021-02-04', 94),
(191, '2021-02-04', 94),
(192, '2021-02-04', 94);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(5) NOT NULL,
  `order_id` int(3) NOT NULL,
  `pro_id` int(3) NOT NULL,
  `qty` int(5) NOT NULL,
  `total` int(5) NOT NULL,
  `nico` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(3) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_desc` varchar(50) NOT NULL,
  `pro_price` varchar(50) NOT NULL,
  `qty` int(50) NOT NULL,
  `pro_image` varchar(255) NOT NULL,
  `pro_image1` text NOT NULL,
  `pro_image2` text NOT NULL,
  `cat_id` int(3) NOT NULL,
  `vendor_id` int(50) NOT NULL,
  `vendor_name` varchar(150) NOT NULL,
  `vendor_email` varchar(150) NOT NULL,
  `Dates` date NOT NULL,
  `nico` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_desc`, `pro_price`, `qty`, `pro_image`, `pro_image1`, `pro_image2`, `cat_id`, `vendor_id`, `vendor_name`, `vendor_email`, `Dates`, `nico`, `size`) VALUES
(120, 'VIP', 'NEW', '55', 4, 'images.jpg', '', '', 26, 4, 'osama', 'm.almasri97.me@gmail.com', '2021-02-04', 'FreeBase: 50 Nico', '48 XL'),
(123, 'Mohammad', 'Good Man', '1000000000', 1, '1.png', '', '', 26, 18, 'soso', 'ss@gmail.com', '2021-02-05', '', '170 ML');

-- --------------------------------------------------------

--
-- Table structure for table `productssave`
--

CREATE TABLE `productssave` (
  `pro_id` int(3) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_desc` varchar(50) NOT NULL,
  `pro_price` varchar(50) NOT NULL,
  `qty` int(50) NOT NULL,
  `pro_image` varchar(255) NOT NULL,
  `pro_image1` text NOT NULL,
  `pro_image2` text NOT NULL,
  `cat_id` int(50) NOT NULL,
  `vendor_id` int(50) NOT NULL,
  `vendor_name` varchar(150) NOT NULL,
  `vendor_email` varchar(150) NOT NULL,
  `Dates` date NOT NULL,
  `nico` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `saveorders`
--

CREATE TABLE `saveorders` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `dateorder` date NOT NULL,
  `custid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `qty` int(50) NOT NULL,
  `total` int(150) NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `saveorders`
--

INSERT INTO `saveorders` (`id`, `order_id`, `dateorder`, `custid`, `proid`, `qty`, `total`, `vendor_id`) VALUES
(19, 179, '2021-02-03', 94, 121, 1, 10, 18);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(5) NOT NULL,
  `textone` varchar(250) NOT NULL,
  `texttow` varchar(250) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `textone`, `texttow`, `image`) VALUES
(10, 'Collection 2020', 'Offer 20%', '555.jpg'),
(11, 'Collection 2021', 'New Offer', 'Voopoo-DRAG-S-60w-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `business` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `name`, `password`, `email`, `address`, `phone`, `business`) VALUES
(4, 'osama', '123', 'm.almasri97.me@gmail.com', 'Zarqa/Street 16', '0795439152', 'Vendor'),
(15, 'Admin2020', '123', 'osama2020@gmail.com', 'Zarqa/Street 16', '0795439152', ''),
(18, 'soso', '123', 'ss@gmail.com', 'sdsdf', '68383', '');

-- --------------------------------------------------------

--
-- Table structure for table `vendoraccept`
--

CREATE TABLE `vendoraccept` (
  `id_vendor` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `business` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cetegory`
--
ALTER TABLE `cetegory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `cust_email` (`cust_email`);

--
-- Indexes for table `nicotine`
--
ALTER TABLE `nicotine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `order_details_ibfk_1` (`order_id`),
  ADD KEY `order_details_ibfk_2` (`pro_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `productssave`
--
ALTER TABLE `productssave`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `saveorders`
--
ALTER TABLE `saveorders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vendoraccept`
--
ALTER TABLE `vendoraccept`
  ADD PRIMARY KEY (`id_vendor`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `cetegory`
--
ALTER TABLE `cetegory`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `nicotine`
--
ALTER TABLE `nicotine`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `productssave`
--
ALTER TABLE `productssave`
  MODIFY `pro_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `saveorders`
--
ALTER TABLE `saveorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id_vendor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vendoraccept`
--
ALTER TABLE `vendoraccept`
  MODIFY `id_vendor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `products` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `cetegory` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id_vendor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `productssave`
--
ALTER TABLE `productssave`
  ADD CONSTRAINT `productssave_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id_vendor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `saveorders`
--
ALTER TABLE `saveorders`
  ADD CONSTRAINT `saveorders_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id_vendor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
