-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2018 at 05:18 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastfood1`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `content` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(255) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foot_banners`
--

CREATE TABLE `foot_banners` (
  `id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `foot_banners`
--

INSERT INTO `foot_banners` (`id`, `image`, `title`, `content`, `created`, `modified`) VALUES
(1, '0', 'rr', 'rrr', '2018-01-14 19:28:42', '2018-01-14 19:28:42'),
(2, '0', 'rr', 'rrr', '2018-01-14 19:29:39', '2018-01-14 19:29:39'),
(3, '0', 'rr', 'rrr', '2018-01-14 19:30:43', '2018-01-14 19:30:43'),
(4, '0', '555', '555', '2018-01-14 19:31:36', '2018-01-14 19:31:36'),
(5, '0', '555', '555', '2018-01-14 19:31:58', '2018-01-14 19:31:58'),
(6, '/img/banners/C:\\xampp\\tmp\\php8B52.tmp', '555', '555', '2018-01-14 19:33:10', '2018-01-14 19:33:10'),
(7, '/img/banners/C:\\xampp\\tmp\\phpFAE3.tmp', 'rr', 'rrr', '2018-01-14 19:34:44', '2018-01-14 19:34:44'),
(8, NULL, 'rr', 'rrr', '2018-01-14 19:35:27', '2018-01-14 19:35:27'),
(9, '/img/banners/asd.jpg', 'ee', 'eee', '2018-01-14 19:36:46', '2018-01-14 19:36:46');

-- --------------------------------------------------------

--
-- Table structure for table `head_banners`
--

CREATE TABLE `head_banners` (
  `id` int(11) NOT NULL,
  `title_st` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title_nd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `start_special_date` date DEFAULT NULL,
  `end_special_date` date DEFAULT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `head_banners`
--

INSERT INTO `head_banners` (`id`, `title_st`, `title_nd`, `start_special_date`, `end_special_date`, `image`, `created`, `modified`) VALUES
(1, 'ee', 'eeee', '2018-01-12', '2018-01-25', 'eee', NULL, '0000-00-00 00:00:00'),
(2, 'rrrrr', 'rrr', '2018-01-17', NULL, '', '2018-01-14 19:02:11', '2018-01-14 19:02:11'),
(3, 'rrr', 'rrrr', '2018-01-11', NULL, '', '2018-01-14 19:03:26', '2018-01-14 19:03:26'),
(4, 'rrr', 'rrrr', '2018-01-11', NULL, '', '2018-01-14 19:03:47', '2018-01-14 19:03:47'),
(5, 'rr', 'rrr', '2018-01-11', '2018-02-01', '', '2018-01-14 19:04:24', '2018-01-14 19:04:24'),
(6, 'rr', 'rrr', '2018-01-11', '2018-02-01', '', '2018-01-14 19:05:30', '2018-01-14 19:05:30'),
(7, 'rr', 'rrr', '2018-01-11', '2018-02-01', '', '2018-01-14 19:05:55', '2018-01-14 19:05:55'),
(8, 'rrr', 'rrrr', '2018-01-09', '2018-02-02', '', '2018-01-14 19:07:13', '2018-01-14 19:07:13'),
(9, 'rrr', 'rrrr', '2018-01-09', '2018-02-02', '', '2018-01-14 19:08:05', '2018-01-14 19:08:05'),
(10, '44', '444', '2018-01-25', '2018-01-27', '', '2018-01-14 19:10:38', '2018-01-14 19:10:38'),
(11, '44', '444', '2018-01-25', '2018-01-27', '', '2018-01-14 19:10:57', '2018-01-14 19:10:57'),
(12, '44', '444', '2018-01-25', '2018-01-27', '', '2018-01-14 19:14:26', '2018-01-14 19:14:26'),
(13, '44', '444', '2018-01-25', '2018-01-27', '', '2018-01-14 19:14:27', '2018-01-14 19:14:27'),
(14, 'rrr', 'rrr', '2018-01-12', '2018-01-24', '', '2018-01-14 19:14:48', '2018-01-14 19:14:48'),
(15, 'rrr', 'rrr', '2018-01-12', '2018-01-24', '', '2018-01-14 19:15:16', '2018-01-14 19:15:16'),
(16, '3456', '34567', '2018-01-11', '2018-02-01', '', '2018-01-14 19:15:40', '2018-01-14 19:15:40'),
(17, '3456', '34567', '2018-01-11', '2018-02-01', '', '2018-01-14 19:17:06', '2018-01-14 19:17:06'),
(18, 'rrr', 'rrr', '2018-02-01', '2018-02-01', '', '2018-01-14 19:18:13', '2018-01-14 19:18:13'),
(19, 'rrr', 'rrr', '2018-02-01', '2018-02-01', '', '2018-01-14 19:19:13', '2018-01-14 19:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `id` int(11) NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `phone_nd` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `status` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `message` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` varchar(100) COLLATE utf8_bin NOT NULL,
  `ship_time` datetime NOT NULL,
  `total` decimal(15,2) NOT NULL DEFAULT '0.00',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `money` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `content` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `hot` tinyint(4) DEFAULT '0',
  `special` tinyint(4) DEFAULT '0',
  `review_number` int(11) DEFAULT NULL,
  `review` float DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `status`, `name`, `unit_id`, `price`, `content`, `discount`, `hot`, `special`, `review_number`, `review`, `created`, `modified`) VALUES
(38, 24, '1', 'Thit Bo Kwwh2222222', 2, '0.00', 'Ngon lam22asdasdthtuthu', 1, 1, 0, 2212322, 22, NULL, '2017-12-23 17:53:39'),
(40, 24, '0', 'hahaa', 1, '123.00', 'th', 11, 1, 1, 1, 11, '2017-12-22 15:14:47', '2017-12-22 15:14:47'),
(41, 24, '1', 'heheheaa', 1, '12.00', 'ctq', 112, 0, 0, 12, 12, '2017-12-22 16:02:13', '2017-12-22 16:02:13'),
(42, 24, '1', 'haha2123', 1, '123.00', 'ssssssss', 12, 0, 1, 0, 0, '2017-12-22 16:07:24', '2017-12-22 16:07:24'),
(43, 24, '0', 'bbgbgbgbgbgbgb', 3, '12312.00', 'qeqweqwe', 1, 0, 0, 0, 0, '2017-12-22 16:46:38', '2017-12-22 16:46:38'),
(44, 24, '0', 'hyhyh', 1, '123.00', 'qweqweqwe', 123, 0, 1, 0, 0, '2017-12-22 16:48:34', '2017-12-22 16:48:34'),
(45, 24, '0', 'hyhyh', 1, '123.00', 'qweqweqwe', 123, 0, 1, 0, 0, '2017-12-22 16:49:01', '2017-12-22 16:49:01'),
(46, 24, '1', 'qqqqqqqqqqqqq', 4, '12.00', 'fèwwww', 12, 0, 0, 0, 0, '2017-12-22 16:49:51', '2017-12-22 16:49:51'),
(47, 24, '1', 'hthuhthutthth22', 1, '123.00', '123123123', 12, 0, 0, 0, 0, '2017-12-22 16:51:31', '2017-12-22 16:51:31'),
(48, 24, '1', 'Canh khổ qua nhồi thịt', 1, '123.00', 'aqwe', 1, 0, 1, 0, 0, '2017-12-23 17:08:01', '2017-12-23 17:08:01'),
(49, 24, '1', 'ff', 1, '3333.00', '3333', 3333, 1, 1, 0, 0, '2018-01-14 12:58:07', '2018-01-14 12:58:07'),
(50, 24, '1', 'ff', 1, '3333.00', '3333', 3333, 1, 1, 0, 0, '2018-01-14 12:59:49', '2018-01-14 12:59:49'),
(51, 24, '1', 'ff', 1, '3333.00', '3333', 3333, 1, 1, 0, 0, '2018-01-14 13:01:56', '2018-01-14 13:01:56'),
(52, 24, '1', 'rrr', 1, '4444.00', '444', 4, 1, 1, 0, 0, '2018-01-14 13:36:54', '2018-01-14 13:36:54'),
(53, 24, '1', 'rrr', 1, '4444.00', '444', 4, 1, 1, 0, 0, '2018-01-14 13:39:51', '2018-01-14 13:39:51'),
(54, 24, '1', 'rrr', 1, '444.00', '444', 4, 1, 1, 0, 0, '2018-01-14 13:48:51', '2018-01-14 13:48:51'),
(55, 24, '1', 'rrr', 1, '34543.00', '3456', 3456, 1, 1, 0, 0, '2018-01-14 13:55:06', '2018-01-14 13:55:06'),
(56, 24, '1', '23456', 1, '3456.00', '456', 34567, 1, 1, 0, 0, '2018-01-14 13:55:41', '2018-01-14 13:55:41'),
(57, 24, '1', 'eee', 1, '234567.00', 'ee', 123456, 1, 1, 0, 0, '2018-01-14 13:57:48', '2018-01-14 13:57:48'),
(58, 24, '1', 'rrr', 1, '44.00', 'rrr', 444, 1, 1, 0, 0, '2018-01-14 14:03:35', '2018-01-14 14:03:35'),
(59, 24, '1', '333', 1, '33.00', '222', 222, 1, 1, 0, 0, '2018-01-14 14:05:15', '2018-01-14 14:05:15'),
(60, 24, '1', '333', 1, '33.00', '222', 222, 1, 1, 0, 0, '2018-01-14 14:06:36', '2018-01-14 14:06:36'),
(61, 24, '1', '444', 1, '44.00', '44', 44, 1, 1, 0, 0, '2018-01-14 14:07:06', '2018-01-14 14:07:06'),
(62, 24, '1', 'rrrr', 1, '444.00', '444', 444, 1, 1, 0, 0, '2018-01-14 14:11:29', '2018-01-14 14:11:29'),
(63, 24, '1', 'eee', 1, '123456.00', 'eeeee', 123456, 1, 1, 0, 0, '2018-01-14 14:12:14', '2018-01-14 14:12:14'),
(64, 24, '1', '234562', 1, '345678.00', '3456', 345678, 1, 1, 0, 0, '2018-01-14 14:13:12', '2018-01-14 14:13:12'),
(65, 24, '1', '23456', 1, '34562.00', '3456', 34562345, 1, 1, 0, 0, '2018-01-14 14:15:00', '2018-01-14 14:15:00'),
(66, 24, '1', '23456', 1, '34562.00', '3456', 34562345, 1, 1, 0, 0, '2018-01-14 14:17:47', '2018-01-14 14:17:47'),
(67, 24, '1', '23456', 1, '34562.00', '3456', 34562345, 1, 1, 0, 0, '2018-01-14 14:18:08', '2018-01-14 14:18:08'),
(68, 24, '1', '23456', 1, '34562.00', '3456', 34562345, 1, 1, 0, 0, '2018-01-14 14:18:40', '2018-01-14 14:18:40'),
(69, 24, '1', '3456', 1, '234565345.00', '234567', 23456, 1, 1, 0, 0, '2018-01-14 14:19:32', '2018-01-14 14:19:32'),
(70, 24, '1', 'ty', 1, '56743.00', 'rrrrrr', 3456, 0, 0, 0, 0, '2018-01-14 15:04:27', '2018-01-14 15:04:27'),
(71, 24, '1', '34567', 1, '345678.00', '234567', 45678, 0, 0, 0, 0, '2018-01-14 15:09:31', '2018-01-14 15:09:31'),
(72, 24, '1', 'eee', 1, '345672.00', 'eee', 234567, 0, 0, 0, 0, '2018-01-14 15:13:41', '2018-01-14 15:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `parent`, `created`, `modified`) VALUES
(24, 'Đồ ăn', 0, NULL, NULL),
(25, 't555', 0, '2018-01-14 17:50:08', '2018-01-14 17:50:08'),
(26, 'rrr', 25, '2018-01-14 17:51:10', '2018-01-14 17:51:10'),
(27, 'rrr', 25, '2018-01-14 17:51:25', '2018-01-14 17:51:25'),
(28, 'hihi', 24, '2018-01-14 17:51:41', '2018-01-14 17:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `feature` int(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `link`, `feature`, `created`, `modified`) VALUES
(26, 70, '/img/products/bg.jpg', 1, '2018-01-14 15:04:27', '2018-01-14 15:04:27'),
(27, 70, '/img/products/Dong-Nhi-1-1514849950.jpg', 0, '2018-01-14 15:04:27', '2018-01-14 15:04:27'),
(28, 71, '/img/products/kieu-toc-dep-2017-blogtamsuvn3.jpg', 1, '2018-01-14 15:09:31', '2018-01-14 15:09:31'),
(30, 72, '/img/products/bg.jpg', 1, '2018-01-14 15:13:42', '2018-01-14 15:13:42'),
(31, 72, '/img/products/kraftig-640x480.jpg', 0, '2018-01-14 15:13:42', '2018-01-14 15:13:42'),
(32, 72, '/img/products/g1-2017-10-23-11-06-23.jpg', 0, '2018-01-14 15:09:32', '2018-01-14 15:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `product_units`
--

CREATE TABLE `product_units` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_units`
--

INSERT INTO `product_units` (`id`, `name`) VALUES
(1, 'Kg'),
(2, 'Trái'),
(3, 'Ly'),
(4, 'Bọc'),
(5, 'Cái'),
(6, 'hih');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `created`, `modified`) VALUES
(1, 'admin', '$2y$10$coAW59goVibOoDttNs/VfOIpjgZ7Z2cFTWXJFu.lbMQnGjUpRMJAW', 'admin', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foot_banners`
--
ALTER TABLE `foot_banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_id` (`image`);

--
-- Indexes for table `head_banners`
--
ALTER TABLE `head_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catalog_id` (`category_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_units`
--
ALTER TABLE `product_units`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foot_banners`
--
ALTER TABLE `foot_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `head_banners`
--
ALTER TABLE `head_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product_units`
--
ALTER TABLE `product_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `product_units` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
