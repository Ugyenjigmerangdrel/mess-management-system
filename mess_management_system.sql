-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2021 at 06:53 AM
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
(8, 'Sugar', 'groceries', 'kg', 'Normal', 50),
(9, 'Cauliflower', 'vegetables', 'kg', 'Haba Soenamkhang', 60),
(11, 'Rice', 'cereals', 'kg', 'Rajbhoj', 1300),
(12, 'Oil', 'groceries', 'litre', 'Normal Consumption ', 50),
(13, 'Biscuit', 'groceries', 'pkts', 'Good Day', 80),
(14, 'Brinjal', 'vegetables', 'kg', 'Normal', 60);

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
(15, 'Sugar', 123, 50, 'admin1', '2021-09-01 06:55:45', 'Haba', '122', NULL),
(16, 'Cauliflower', 45, 60, 'admin1', '2021-09-01 06:55:45', 'Poney', '122', NULL),
(17, 'Sugar', 123, 50, 'admin1', '2021-09-01 06:58:31', 'Haba', '122', NULL),
(18, 'Cauliflower', 45, 60, 'admin1', '2021-09-01 06:58:31', 'Poney', '122', NULL),
(19, 'Sugar', 434, 50, 'admin1', '2021-09-01 06:59:56', 'Haba', '122', NULL),
(20, 'Cauliflower', 12, 60, 'admin1', '2021-09-01 06:59:56', 'Poney', '122', NULL),
(21, 'Sugar', 123, 50, 'admin1', '2021-09-01 07:03:49', 'Haba', 'TRA_21|455', NULL),
(22, 'Cauliflower', 89, 60, 'admin1', '2021-09-01 07:03:49', 'Poney', 'TRA_21|455', NULL),
(23, 'Cauliflower', 12, 60, 'admin1', '2021-09-01 07:04:08', 'Poney', 'TRA_21|456', NULL),
(24, 'Cauliflower', 145, 60, 'admin1', '2021-09-01 07:07:34', 'Poney', 'TRA_21|459', NULL),
(25, 'Cauliflower', 145, 60, 'admin1', '2021-09-01 07:07:34', 'Poney', 'TRA_21|459', NULL),
(26, 'Sugar', 12, 50, 'admin1', '2021-09-01 07:08:29', 'Haba', 'TRA_21|453', NULL),
(27, 'Cauliflower', 56, 60, 'admin1', '2021-09-02 04:08:13', 'Poney', 'TRA_21|45', 3360),
(28, 'Sugar', 78, 50, 'admin1', '2021-09-02 04:08:13', 'Haba', 'TRA_21|45', 3900),
(29, 'Sugar', 10, 50, 'admin1', '2021-09-02 04:22:01', 'Haba', 'TRA_21|460', 500),
(30, 'Cauliflower', 34, 60, 'admin1', '2021-09-02 04:22:01', 'Poney', 'TRA_21|460', 2040),
(31, 'Cauliflower', 45, 60, 'admin1', '2021-09-02 04:25:25', 'Poney', 'TRA_21|470', 2700),
(32, 'Sugar', 78, 50, 'admin1', '2021-09-02 04:25:25', 'Haba', 'TRA_21|470', 3900),
(33, 'Cauliflower', 23, 60, 'admin1', '2021-09-02 04:28:26', 'Poney', 'TRA_21|189', 1380),
(34, 'Sugar', 20, 50, 'admin1', '2021-09-02 04:28:26', 'Haba', 'TRA_21|189', 1000),
(35, 'Sugar', 12, 50, 'admin1', '2021-09-06 05:03:32', 'Haba', 'TRA_21|461', 600),
(36, 'Rice', 20, 1300, 'admin1', '2021-09-06 05:03:32', '', 'TRA_21|461', 26000),
(37, 'Cauliflower', 34, 60, 'admin1', '2021-09-06 05:03:32', 'Poney', 'TRA_21|461', 2040),
(38, 'Cauliflower', 23, 60, 'admin1', '2021-09-06 05:08:04', 'Poney', 'TRA_21|454', 1380),
(39, 'Cauliflower', 12, 60, '', '2021-09-20 08:55:33', 'Poney', 'TRA_21|790', 720),
(40, 'Brinjal', 4, 60, '', '2021-09-20 08:55:33', '', 'TRA_21|790', 240),
(41, 'Oil', 5, 50, '', '2021-09-20 08:55:33', '', 'TRA_21|790', 250),
(42, 'Biscuit', 12, 80, '', '2021-10-07 04:15:17', '', 'TRA_21|457', 960),
(43, 'Oil', 123, 50, '', '2021-10-07 04:15:17', '', 'TRA_21|457', 6150),
(44, 'Brinjal', 121, 60, '', '2021-10-07 04:15:17', '', 'TRA_21|457', 7260),
(45, 'Cauliflower', 34, 60, '', '2021-10-07 04:15:17', 'Poney', 'TRA_21|457', 2040);

-- --------------------------------------------------------

--
-- Table structure for table `order_update`
--

CREATE TABLE `order_update` (
  `id` int(11) NOT NULL,
  `order_no` varchar(112) NOT NULL,
  `ordered_by` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_update`
--

INSERT INTO `order_update` (`id`, `order_no`, `ordered_by`, `order_date`) VALUES
(1, 'TRA_21|453', 'admin1', '2021-09-01 07:08:29'),
(2, 'TRA_21|45', 'admin1', '2021-09-02 04:07:29'),
(3, 'TRA_21|45', 'admin1', '2021-09-02 04:07:29'),
(4, 'TRA_21|45', 'admin1', '2021-09-02 04:08:13'),
(5, 'TRA_21|45', 'admin1', '2021-09-02 04:08:13'),
(6, 'TRA_21|460', 'admin1', '2021-09-02 04:22:01'),
(7, 'TRA_21|460', 'admin1', '2021-09-02 04:22:01'),
(8, 'TRA_21|470', 'admin1', '2021-09-02 04:25:25'),
(9, 'TRA_21|189', 'admin1', '2021-09-02 04:28:26'),
(10, 'TRA_21|461', 'admin1', '2021-09-06 05:03:32'),
(11, 'TRA_21|454', 'admin1', '2021-09-06 05:08:04'),
(12, 'TRA_21|790', '', '2021-09-20 08:55:33'),
(13, 'TRA_21|457', '', '2021-10-07 04:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `receipt_table`
--

CREATE TABLE `receipt_table` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `ordered_by` varchar(255) NOT NULL,
  `date_of_receive` datetime NOT NULL DEFAULT current_timestamp(),
  `supplier` varchar(255) NOT NULL,
  `order_no` varchar(122) NOT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipt_table`
--

INSERT INTO `receipt_table` (`id`, `item`, `quantity`, `rate`, `ordered_by`, `date_of_receive`, `supplier`, `order_no`, `amount`) VALUES
(1, 'Cauliflower', 56, 60, 'admin1', '2021-11-09 09:02:25', 'Poney', 'TRA_21|45', 3360),
(2, 'Sugar', 78, 50, 'admin1', '2021-11-09 09:02:25', 'Haba', 'TRA_21|45', 3900);

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

--
-- Dumping data for table `supplier_table`
--

INSERT INTO `supplier_table` (`id`, `supplier_name`, `supplier_address`, `supplier_contact`, `item_supplying`) VALUES
(2, 'Haba', '12001', '17453621', 'Sugar'),
(3, 'Poney', 'Bluh', '12324', 'Cauliflower');

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
-- Indexes for table `receipt_table`
--
ALTER TABLE `receipt_table`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `order_update`
--
ALTER TABLE `order_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `receipt_table`
--
ALTER TABLE `receipt_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
