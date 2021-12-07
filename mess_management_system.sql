-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2021 at 02:27 PM
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
-- Database: `mess_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_table`
--

CREATE TABLE `item_table` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_type` varchar(255) DEFAULT NULL,
  `quantity_unit` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `item_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_table`
--

INSERT INTO `item_table` (`id`, `item_name`, `item_type`, `quantity_unit`, `description`, `item_rate`) VALUES
(11, 'Rice', 'cereals', 'kg', 'Rajbhoj', 1300),
(12, 'Oil', 'groceries', 'litre', 'Normal Consumption ', 50),
(13, 'Biscuit', 'groceries', 'pkts', 'Good Day', 80),
(15, 'Makhu', 'groceries', 'kg', 'Normal Consumption ', 1200),
(19, 'Brinjal', 'vegetables', 'kg', 'Normal Consumption ', 40),
(20, 'Sugar', 'groceries', 'kg', 'Normal Consumption ', 50);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `id` int(11) NOT NULL,
  `item_supplying` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `ordered_by` varchar(255) NOT NULL,
  `date_of_order` datetime NOT NULL DEFAULT current_timestamp(),
  `supplier` varchar(255) NOT NULL,
  `order_no` varchar(122) NOT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`id`, `item_supplying`, `quantity`, `rate`, `ordered_by`, `date_of_order`, `supplier`, `order_no`, `amount`) VALUES
(49, 'Rice', 10, 1300, 'admin1', '2021-12-03 09:39:50', '', 'TRA_01|2021', 13000),
(50, 'Sugar', 20, 50, 'admin1', '2021-12-03 09:39:50', '', 'TRA_01|2021', 1000),
(51, 'Brinjal', 12, 40, 'admin1', '2021-12-03 09:39:50', '', 'TRA_01|2021', 480),
(52, 'Biscuit', 40, 80, 'admin1', '2021-12-03 09:39:50', '', 'TRA_01|2021', 3200),
(53, 'Oil', 12, 50, 'admin1', '2021-12-03 10:09:05', '', 'TRA_21|02', 600);

-- --------------------------------------------------------

--
-- Table structure for table `order_update`
--

CREATE TABLE `order_update` (
  `id` int(11) NOT NULL,
  `order_no` varchar(112) NOT NULL,
  `ordered_by` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `approv_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_update`
--

INSERT INTO `order_update` (`id`, `order_no`, `ordered_by`, `order_date`, `approv_status`) VALUES
(16, 'TRA_01|2021', 'admin1', '2021-12-03 09:39:50', NULL),
(17, 'TRA_21|02', 'admin1', '2021-12-03 10:09:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `receipt_history`
--

CREATE TABLE `receipt_history` (
  `id` int(11) NOT NULL,
  `order_no` varchar(255) NOT NULL,
  `receipt_submitted` datetime NOT NULL DEFAULT current_timestamp(),
  `receipt_check` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipt_history`
--

INSERT INTO `receipt_history` (`id`, `order_no`, `receipt_submitted`, `receipt_check`) VALUES
(3, 'TRA_01|2021', '2021-12-03 09:42:26', 1),
(4, 'TRA_01|2021', '2021-12-03 09:42:26', 1),
(5, 'TRA_21|02', '2021-12-03 10:14:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `receipt_table`
--

CREATE TABLE `receipt_table` (
  `id` int(11) UNSIGNED NOT NULL,
  `item` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `ordered_by` varchar(255) NOT NULL,
  `date_of_receive` datetime NOT NULL DEFAULT current_timestamp(),
  `supplier` varchar(255) NOT NULL,
  `order_no` varchar(122) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipt_table`
--

INSERT INTO `receipt_table` (`id`, `item`, `quantity`, `rate`, `ordered_by`, `date_of_receive`, `supplier`, `order_no`, `amount`, `comments`) VALUES
(52, 'Rice', 10, 1300, 'admin1', '2021-12-03 09:40:27', '', 'TRA_01|2021', 1, 'Changes in sugar quantity'),
(53, 'Rice', 10, 1300, 'admin1', '2021-12-03 09:41:57', '', 'TRA_01|2021', 1, 'sada'),
(54, 'Rice', 10, 1300, 'admin1', '2021-12-03 09:42:26', '', 'TRA_01|2021', 1, 'sada'),
(55, 'Sugar', 20, 50, 'admin1', '2021-12-03 09:42:26', '', 'TRA_01|2021', 0, 'sada'),
(56, 'Oil', 12, 50, 'admin1', '2021-12-03 10:14:44', '', 'TRA_21|02', 5, 'received');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `item_name`, `quantity`) VALUES
(17, 'Rice', 10),
(18, 'Sugar', 20),
(19, 'Oil', 12);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_table`
--

CREATE TABLE `supplier_table` (
  `id` int(11) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_address` text NOT NULL,
  `supplier_contact` varchar(255) NOT NULL,
  `item_supplying` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `user_role` tinyint(4) NOT NULL,
  `user_created` datetime NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone_number`, `user_role`, `user_created`, `password`) VALUES
(1, 'admin1', 'mess@academy.bt', '17680947', 1, '2021-08-13 07:09:35', '$2y$12$1Yp3tJCa8PjC2Po0YcWiremJDb3ioVvx6whnkWS5uPLyAJF/84By2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_table`
--
ALTER TABLE `item_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_supplying`);

--
-- Indexes for table `order_update`
--
ALTER TABLE `order_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt_history`
--
ALTER TABLE `receipt_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt_table`
--
ALTER TABLE `receipt_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_table`
--
ALTER TABLE `supplier_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_table`
--
ALTER TABLE `item_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `order_update`
--
ALTER TABLE `order_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `receipt_history`
--
ALTER TABLE `receipt_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `receipt_table`
--
ALTER TABLE `receipt_table`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `supplier_table`
--
ALTER TABLE `supplier_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
