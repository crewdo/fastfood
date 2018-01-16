-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 08:02 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastfood`
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
  `price` int(11) NOT NULL DEFAULT '0',
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
(38, 24, '1', 'Thit Bo Kwwh2222222', 2, 0, 'Ngon lam22asdasdthtuthu', 1, 1, 0, 2212322, 22, NULL, '2017-12-23 17:53:39'),
(73, 24, '1', 'Gà khô', 1, 1, 'hihi', 1, 0, 0, 0, 0, '2018-01-16 05:53:11', '2018-01-16 05:53:11'),
(74, 24, '1', 'Trà sữa', 1, 3, 'te', 1, 0, 0, 0, 0, '2018-01-16 05:54:29', '2018-01-16 05:54:29'),
(75, 24, '1', 'Trà sữa', 1, 3, 'te', 1, 0, 0, 0, 0, '2018-01-16 05:54:30', '2018-01-16 05:54:30'),
(76, 24, '1', 'Trà sữa', 1, 3, 'te', 1, 0, 0, 0, 0, '2018-01-16 05:55:23', '2018-01-16 05:55:23'),
(77, 24, '1', 'Trà sữa trân châu', 1, 30000, 'hhh', 3, 1, 0, 0, 0, '2018-01-16 05:55:46', '2018-01-16 05:55:46'),
(78, 24, '1', 'Trà sữa trà xanh', 1, 15000, 'hihi', 2, 0, 0, 0, 0, '2018-01-16 05:56:42', '2018-01-16 05:56:42'),
(79, 25, '1', 'Trà sữa trà xanh 1', 3, 3, 'hhuh', 3, 0, 0, 0, 0, '2018-01-16 06:03:50', '2018-01-16 06:03:50'),
(80, 25, '1', 'Trà sữa trà xanh 2', 3, 3, 'hhuh', 3, 0, 0, 0, 0, '2018-01-16 06:04:39', '2018-01-16 06:04:39'),
(81, 25, '1', 'Trà sữa trà xanh 3', 3, 3, 'hhuh', 3, 0, 0, 0, 0, '2018-01-16 06:04:50', '2018-01-16 06:04:50'),
(82, 25, '1', 'Trà sữa trà xanh 4', 3, 3, 'hhuh', 3, 0, 0, 0, 0, '2018-01-16 06:04:59', '2018-01-16 06:04:59');

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
(25, 'Nước uống', 0, '2018-01-14 17:50:08', '2018-01-14 17:50:08');

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
(33, 73, '/img/products/1.jpg', 1, '2018-01-16 05:53:11', '2018-01-16 05:53:11'),
(34, 74, '/img/products/g4.jpg', 1, '2018-01-16 05:54:29', '2018-01-16 05:54:29'),
(35, 75, '/img/products/g4.jpg', 1, '2018-01-16 05:54:30', '2018-01-16 05:54:30'),
(36, 76, '/img/products/g4.jpg', 1, '2018-01-16 05:55:23', '2018-01-16 05:55:23'),
(37, 77, '/img/products/s3.jpg', 1, '2018-01-16 05:55:46', '2018-01-16 05:55:46'),
(38, 78, '/img/products/g4.jpg', 1, '2018-01-16 05:56:42', '2018-01-16 05:56:42'),
(39, 78, '/img/products/g4.jpg', 0, '2018-01-16 05:56:42', '2018-01-16 05:56:42'),
(40, 79, '/img/products/g4.jpg', 1, '2018-01-16 06:03:51', '2018-01-16 06:03:51'),
(41, 80, '/img/products/g4.jpg', 1, '2018-01-16 06:04:39', '2018-01-16 06:04:39'),
(42, 81, '/img/products/g4.jpg', 1, '2018-01-16 06:04:50', '2018-01-16 06:04:50'),
(43, 82, '/img/products/g4.jpg', 1, '2018-01-16 06:04:59', '2018-01-16 06:04:59'),
(44, 82, '/img/products/g2.jpg', 0, '2018-01-16 06:10:45', '2018-01-16 06:10:45'),
(45, 82, '/img/products/g1.jpg', 0, '2018-01-16 06:11:33', '2018-01-16 06:11:33');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
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
