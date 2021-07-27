-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 09:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_grocery_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `userId`, `productId`, `quantity`) VALUES
(77, 99, 2, 3),
(78, 99, 4, 3),
(79, 0, 2, 3),
(80, 0, 0, 3),
(81, 0, 2, 3),
(82, 0, 0, 3),
(83, 0, 0, 3),
(84, 0, 0, 3),
(85, 0, 0, 3),
(86, 0, 0, 3),
(87, 0, 0, 3),
(88, 0, 0, 3),
(89, 0, 0, 3),
(90, 0, 0, 3),
(91, 0, 0, 3),
(92, 0, 0, 3),
(93, 2, 0, 3),
(94, 1, 0, 3),
(181, 10, 0, 3),
(183, 10, 22, 3),
(185, 10, 0, 3),
(187, 10, 0, 3),
(188, 10, 0, 3),
(189, 10, 0, 3),
(190, 10, 0, 3),
(192, 10, 0, 3),
(193, 10, 27, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Cat_ID` int(155) NOT NULL,
  `Name` varchar(155) NOT NULL,
  `Status` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Cat_ID`, `Name`, `Status`) VALUES
(1, 'Vegetables', 'Available'),
(2, 'Fruits', 'Available'),
(3, 'Dairy', 'Available'),
(4, 'Meat', 'Available'),
(5, 'Pulses', 'Available'),
(6, 'Spices', 'Available'),
(7, 'Vegetable Oils', 'Available'),
(8, 'Breakfast Essentials', 'Available'),
(9, 'Health Drinks and Juices', 'Available'),
(10, 'Soft Drinks', 'Available'),
(11, 'Tea and Coffee', 'Available'),
(1, 'Vegetables', 'Available'),
(2, 'Fruits', 'Available'),
(3, 'Dairy', 'Available'),
(4, 'Meat', 'Available'),
(5, 'Pulses', 'Available'),
(6, 'Spices', 'Available'),
(7, 'Vegetable Oils', 'Available'),
(8, 'Breakfast Essentials', 'Available'),
(9, 'Health Drinks and Juices', 'Available'),
(10, 'Soft Drinks', 'Available'),
(11, 'Tea and Coffee', 'Available'),
(12, 'VEGETABLES', 'Available'),
(13, 'FRUITS', 'Available'),
(14, 'DAIRY PRODUCTS', 'Available'),
(15, 'PULSES', 'Available'),
(16, 'COOKING OILS', 'Available'),
(17, 'RICE AND FLOURS', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone_no` bigint(10) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `Name`, `Email_ID`, `Password`, `Phone_no`, `Image`, `Status`) VALUES
(1, 'wbc', 'wbc@gmail.com', 'wbc123', 1236, 'nil', 'active'),
(4, 'upc', 'upc@gmail.com', 'upc123', 1236, '1236', 'active'),
(5, 'dlc', 'dlc@gmail.com', 'dlc123', 1254, '1254', 'active'),
(6, 'mpc', 'mpc@gmail.com', 'mpc123', 5544, 'nil', 'active'),
(7, 'trc', 'trc@gmail.com', 'trc123', 4455, 'nil', 'active'),
(10, 'ktc', 'ktc@gmail.com', 'ktc123', 6655, 'nil', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Cat_ID` int(50) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` int(20) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Suppliers_ID` int(11) NOT NULL,
  `CreatedAt` date NOT NULL,
  `UpdatedAt` date NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Cat_ID`, `Name`, `Description`, `Price`, `Image`, `Suppliers_ID`, `CreatedAt`, `UpdatedAt`, `Status`) VALUES
(14, 2, 'apple', 'Organic', 200, 'Upload/3.jpg', 19, '2021-07-26', '0000-00-00', 'available'),
(16, 2, 'mango', 'Hand picked', 150, 'Upload/4.jpg', 19, '2021-07-26', '0000-00-00', 'available'),
(17, 2, 'banana', 'Organic', 40, 'Upload/5.jpg', 19, '2021-07-26', '0000-00-00', 'available'),
(18, 4, 'mustard oil', 'organic', 300, 'Upload/mustard-oil.jpg', 18, '2021-07-22', '0000-00-00', 'available'),
(19, 4, 'sunflower oils', 'pure', 250, 'Upload/sunflower-oil.jpg', 18, '2021-06-22', '2021-07-26', 'available'),
(20, 4, 'brown rice', 'organic', 200, 'Upload/brown rice.jpg', 2, '2021-05-20', '0000-00-00', 'available'),
(21, 4, 'wheat flour', 'freshly grinded', 100, 'Upload/wheatflour.jpg', 2, '2021-06-30', '0000-00-00', 'available'),
(22, 1, 'cabbage', 'Farm plucked', 35, 'Upload/1.jpg', 1, '2021-07-26', '2021-07-26', 'available'),
(23, 1, 'cauliflower', 'Hand picked', 85, 'Upload/f1.jpg', 1, '2021-07-26', '2021-07-26', 'available'),
(26, 13, 'cucumber', 'Farm plucked', 45, 'Upload/fruits1.jpg', 18, '2021-06-26', '0000-00-00', 'available'),
(27, 16, 'mustard oil', 'organic', 320, 'Upload/oils1.jpg', 10, '2021-06-26', '0000-00-00', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone_no` bigint(10) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`ID`, `Name`, `Email_ID`, `Password`, `Phone_no`, `Image`, `Status`) VALUES
(1, 'abc', 'abc@gmail.com', 'abc123', 98549989, '11', '1'),
(2, 'def', 'def@gmail.com', 'def123', 9988555, '11', '1'),
(3, 'hjhjc', 'chitta@bvcv.hhg', 'hfg', 54224, '', 'hjhjc'),
(4, 'Rahim', 'rahim@gmail.com', 'ra\\3', 9831931602, '', 'Rahim'),
(5, 'Rahim', 'rahim@gmail.com', 'gfvegfgf', 9831931602, '', 'Rahim'),
(6, 'Rahim', 'rahim@gmail.com', 'fhhfjgj', 9831931602, '', 'Rahim'),
(7, 'Rahim', 'rahim@gmail.com', 'geehhtt', 9831931602, '', '1'),
(8, 'Rahim', 'rahim@gmail.com', 'kjjbkbk', 9831931602, 'rahim@gmail.com', '1'),
(10, 'vvb', 'vvb@dhf.vb', '$2y$10$eA573TWJnkz6SfQvZrL/Ce1lYJM0tdy46FH7CSTy55wGhm6PFMZ9a', 44654564, 'vvb@dhf.vb', '1'),
(11, 'gdgg', 'chitta@fhhfh.bb', '$2y$10$X4qEu115e3Zk34G2MXG89.dQlWsureZsxQEl3FceoDeKCqM//1d1O', 21312211, 'Upload/', '1'),
(12, 'gdgg', 'chitta@fhhfh.bb', '$2y$10$ZD8UZrHbutBFkLKGjHvJ6u8hy0KpwVgef5A68rDT4oepyjPQq.4km', 21312211, 'uimage/', '1'),
(13, 'Chittadip Bag', 'chitta@gmail.com', 'jkbjg', 9831931602, 'nil', '1'),
(15, 'Chittadip Bag', 'chitta@gmail.com', 'cbbx', 9831931602, '0', '1'),
(17, 'kts', 'kts@gmail.com', 'kts321', 9831548822, '0', '1'),
(18, 'rjs', 'rjs@gmail.com', 'rjs123', 5544896, '0', '1'),
(19, 'jks', 'jks@gmail.com', 'jks121', 98654478, '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `userproduct`
--

CREATE TABLE `userproduct` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `purchasedOn` date NOT NULL,
  `status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userproduct`
--

INSERT INTO `userproduct` (`id`, `userId`, `productId`, `purchasedOn`, `status`) VALUES
(23, 99, 2, '2021-07-02', 'active'),
(24, 99, 4, '2021-07-02', 'active'),
(25, 99, 4, '2021-07-21', 'active'),
(26, 99, 0, '2021-07-21', 'active'),
(27, 99, 0, '2021-07-23', 'active'),
(28, 99, 2, '2021-07-23', 'active'),
(29, 99, 2, '2021-07-23', 'active'),
(30, 10, 0, '2021-07-26', 'active'),
(31, 10, 14, '2021-07-26', 'active'),
(32, 10, 0, '2021-07-26', 'active'),
(33, 10, 0, '2021-07-26', 'active'),
(34, 10, 0, '2021-07-26', 'active'),
(35, 10, 0, '2021-07-26', 'active'),
(36, 10, 0, '2021-07-26', 'active'),
(37, 10, 0, '2021-07-26', 'active'),
(38, 10, 0, '2021-07-26', 'active'),
(39, 10, 0, '2021-07-26', 'active'),
(40, 10, 0, '2021-07-26', 'active'),
(41, 10, 0, '2021-07-26', 'active'),
(42, 10, 0, '2021-07-26', 'active'),
(43, 10, 0, '2021-07-26', 'active'),
(44, 10, 0, '2021-07-26', 'active'),
(45, 10, 0, '2021-07-26', 'active'),
(46, 10, 0, '2021-07-26', 'active'),
(47, 10, 0, '2021-07-26', 'active'),
(48, 10, 0, '2021-07-26', 'active'),
(49, 10, 0, '2021-07-26', 'active'),
(50, 10, 0, '2021-07-26', 'active'),
(51, 10, 0, '2021-07-26', 'active'),
(52, 10, 0, '2021-07-26', 'active'),
(53, 10, 0, '2021-07-26', 'active'),
(54, 10, 0, '2021-07-26', 'active'),
(55, 10, 21, '2021-07-26', 'active'),
(56, 10, 0, '2021-07-26', 'active'),
(57, 10, 0, '2021-07-26', 'active'),
(58, 10, 0, '2021-07-26', 'active'),
(59, 10, 0, '2021-07-26', 'active'),
(60, 10, 0, '2021-07-26', 'active'),
(61, 10, 0, '2021-07-26', 'active'),
(62, 10, 20, '2021-07-26', 'active'),
(63, 10, 0, '2021-07-26', 'active'),
(64, 10, 0, '2021-07-26', 'active'),
(65, 10, 21, '2021-07-26', 'active'),
(66, 10, 0, '2021-07-26', 'active'),
(67, 10, 20, '2021-07-26', 'active'),
(68, 10, 16, '2021-07-26', 'active'),
(69, 10, 0, '2021-07-26', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Suppliers_ID` (`Suppliers_ID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userproduct`
--
ALTER TABLE `userproduct`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `userproduct`
--
ALTER TABLE `userproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Suppliers_ID`) REFERENCES `suppliers` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
