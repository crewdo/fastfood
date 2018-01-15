-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2018 at 03:14 AM
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
-- Database: `ff-db2`
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

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `created`, `modified`) VALUES
(5, 'Dev Jed', 'jedev96@gmail.com', '2018-01-14 21:27:12', '2018-01-14 21:27:12'),
(6, 'Jed', '14520908@gm.uit.edu.vn', '2018-01-14 21:29:17', '2018-01-14 21:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `foot_banners`
--

CREATE TABLE `foot_banners` (
  `id` int(11) NOT NULL,
  `image` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `head_banners`
--

CREATE TABLE `head_banners` (
  `id` int(11) NOT NULL,
  `title_st` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title_nd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `start_special_date` datetime DEFAULT NULL,
  `end__special_date` datetime DEFAULT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `phone` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `status` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `message` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` varchar(100) COLLATE utf8_bin NOT NULL,
  `ship_time` datetime NOT NULL,
  `total` decimal(15,2) NOT NULL DEFAULT '0.00',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `phone`, `status`, `message`, `address`, `ship_time`, `total`, `created`, `modified`) VALUES
(1, 5, '123123123', '1', 'messs', 'sasdasdasd', '2018-01-02 00:00:00', '123.00', NULL, NULL),
(3, 6, '123123123', '1', 'messs', 'sasdasdasd', '2018-01-02 00:00:00', '123.00', NULL, NULL),
(4, 5, '12312123123', '1', 'messs', 'sasdasdasd', '2018-01-02 00:00:00', '123.00', NULL, NULL),
(5, 5, '123123123', '1', 'messs', 'sasdasdasd', '2018-01-02 00:00:00', '123.00', NULL, NULL),
(6, 5, '123123123', '1', 'messs', 'sasdasdasd', '2018-01-02 00:00:00', '123.00', NULL, NULL),
(7, 5, '123123123', '1', 'messs', 'sasdasdasd', '2018-01-02 00:00:00', '123.00', NULL, NULL),
(8, 5, '123123123', '1', 'messs', 'sasdasdasd', '2018-01-02 00:00:00', '123.00', NULL, NULL),
(9, 5, '123123123', '1', 'messs', 'sasdasdasd', '2018-01-02 00:00:00', '123.00', NULL, NULL);

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

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `money`, `created`, `modified`) VALUES
(1, 7, 43, 2, '231231.0000', NULL, NULL),
(2, 9, 48, 11, '0.0000', NULL, NULL),
(3, 7, 43, 2, '231231.0000', NULL, NULL),
(4, 9, 46, 11, '0.0000', NULL, NULL),
(5, 7, 43, 2, '231231.0000', NULL, NULL),
(6, 9, 50, 11, '0.0000', NULL, NULL),
(7, 7, 43, 2, '231231.0000', NULL, NULL),
(8, 9, 50, 11, '0.0000', NULL, NULL),
(9, 7, 49, 2, '231231.0000', NULL, NULL),
(10, 9, 50, 11, '0.0000', NULL, NULL),
(11, 7, 43, 2, '231231.0000', NULL, NULL),
(12, 9, 50, 11, '0.0000', NULL, NULL),
(13, 7, 41, 2, '231231.0000', NULL, NULL),
(14, 9, 50, 11, '0.0000', NULL, NULL),
(15, 7, 38, 5, '231231.0000', NULL, NULL),
(16, 9, 48, 11, '0.0000', NULL, NULL),
(17, 7, 43, 5, '231231.0000', NULL, NULL),
(18, 9, 50, 11, '0.0000', NULL, NULL),
(19, 7, 43, 5, '231231.0000', NULL, NULL),
(20, 9, 41, 11, '0.0000', NULL, NULL),
(21, 7, 43, 5, '231231.0000', NULL, NULL),
(22, 9, 41, 11, '0.0000', NULL, NULL),
(23, 7, 43, 5, '231231.0000', NULL, NULL),
(24, 9, 50, 11, '0.0000', NULL, NULL),
(25, 7, 43, 5, '231231.0000', NULL, NULL),
(26, 9, 50, 11, '0.0000', NULL, NULL),
(27, 7, 43, 5, '231231.0000', NULL, NULL),
(28, 9, 50, 11, '0.0000', NULL, NULL),
(29, 7, 43, 5, '231231.0000', NULL, NULL),
(30, 9, 50, 11, '0.0000', NULL, NULL),
(31, 7, 43, 5, '231231.0000', NULL, NULL),
(32, 9, 50, 11, '0.0000', NULL, NULL),
(33, 7, 43, 5, '231231.0000', NULL, NULL),
(34, 9, 50, 11, '0.0000', NULL, NULL),
(35, 7, 43, 5, '231231.0000', NULL, NULL),
(36, 9, 50, 11, '0.0000', NULL, NULL),
(37, 7, 43, 5, '231231.0000', NULL, NULL),
(38, 9, 50, 11, '0.0000', NULL, NULL),
(39, 7, 43, 5, '231231.0000', NULL, NULL),
(40, 9, 50, 11, '0.0000', NULL, NULL),
(41, 7, 43, 9, '231231.0000', NULL, NULL),
(42, 9, 50, 11, '0.0000', NULL, NULL),
(43, 7, 43, 9, '231231.0000', NULL, NULL),
(44, 9, 50, 11, '0.0000', NULL, NULL),
(45, 7, 43, 9, '231231.0000', NULL, NULL),
(46, 9, 50, 11, '0.0000', NULL, NULL),
(47, 7, 43, 15, '231231.0000', NULL, NULL),
(48, 9, 50, 11, '0.0000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `unit_id` int(11) NOT NULL,
  `price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `content` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount` int(11) NOT NULL,
  `hot` tinyint(4) NOT NULL DEFAULT '0',
  `special` tinyint(4) NOT NULL DEFAULT '0',
  `review_number` int(11) DEFAULT NULL,
  `review` float DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `status`, `name`, `unit_id`, `price`, `content`, `discount`, `hot`, `special`, `review_number`, `review`, `created`, `modified`) VALUES
(38, 24, '1', 'Thit Bo Kwwh2222222', 2, '123123.00', 'Ngon lam22asdasdthtuthu', 1, 1, 1, 2212322, 22, NULL, '2018-01-14 08:50:52'),
(40, 24, '0', 'hahaa', 1, '123.00', 'th', 0, 1, 1, 1, 11, '2017-12-22 15:14:47', '2017-12-22 15:14:47'),
(41, 24, '1', 'heheheaa', 1, '12.00', 'ctq', 0, 0, 0, 12, 12, '2017-12-22 16:02:13', '2017-12-22 16:02:13'),
(42, 24, '1', 'haha2123', 1, '123.00', 'ssssssss', 12, 0, 1, 0, 0, '2017-12-22 16:07:24', '2017-12-22 16:07:24'),
(43, 24, '0', 'bbgbgbgbgbgbgb', 3, '12312.00', 'qeqweqwe', 0, 0, 0, 0, 0, '2017-12-22 16:46:38', '2017-12-22 16:46:38'),
(44, 24, '0', 'hyhyh', 1, '123.00', 'qweqweqwe', 123, 0, 1, 0, 0, '2017-12-22 16:48:34', '2017-12-22 16:48:34'),
(45, 24, '0', 'hyhyh', 1, '123.00', 'qweqweqwe', 123, 0, 1, 0, 0, '2017-12-22 16:49:01', '2017-12-22 16:49:01'),
(46, 24, '1', 'qqqqqqqqqqqqq', 4, '12.00', 'fèwwww', 0, 0, 0, 0, 0, '2017-12-22 16:49:51', '2017-12-22 16:49:51'),
(47, 24, '1', 'hthuhthutthth22', 1, '123.00', '123123123', 12, 0, 0, 0, 0, '2017-12-22 16:51:31', '2017-12-22 16:51:31'),
(48, 24, '1', 'Canh khổ qua nhồi thịt', 1, '123.00', 'aqwe', 0, 0, 1, 0, 0, '2017-12-23 17:08:01', '2017-12-23 17:08:01'),
(49, 24, '1', 'hahah', 1, '123123.00', 'content', 12, 1, 0, 0, 0, '2018-01-14 05:43:16', '2018-01-14 05:43:16'),
(50, 24, '0', 'ga ran hai', 1, '1234.00', 'content', 12313, 0, 1, 0, 0, '2018-01-14 10:05:51', '2018-01-14 10:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `sort_order` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `parent`, `sort_order`, `created`, `modified`) VALUES
(24, 'Đồ ăn', 0, 1, NULL, NULL),
(25, 'Trái cây', 0, 0, NULL, NULL),
(26, 'Trà sữa', 0, 0, NULL, NULL),
(27, 'Soda', 0, 0, NULL, NULL),
(29, 'Xoài', 25, 0, NULL, NULL),
(30, 'Cóc', 25, 0, NULL, NULL),
(31, 'Ổi', 25, 0, NULL, NULL),
(32, 'Mận', 25, 0, NULL, NULL),
(33, 'Bánh tráng', 24, 0, NULL, NULL),
(34, 'Bột chiên', 24, 0, NULL, NULL),
(35, 'Gà rán', 24, 0, NULL, NULL),
(36, 'Trà sữa trân châu', 26, 0, NULL, NULL),
(37, 'Trà sữa thủy tinh', 26, 0, NULL, NULL),
(38, 'Trà Sữa Nho', 26, 0, NULL, NULL),
(39, 'Soda Chanh', 27, 0, NULL, NULL),
(40, 'Soda Blue', 27, 0, NULL, NULL);

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
(3, 50, '2017-12-05_02-54-58-1512417343.png', 1, '2017-12-22 16:51:32', '2017-12-22 16:51:32'),
(4, 48, 'bullet.png', 1, '2017-12-23 17:08:01', '2017-12-23 17:08:01'),
(5, 49, 'cute-cats-wallpaper-22.jpg', 1, '2018-01-14 05:43:16', '2018-01-14 05:43:16');

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
(5, 'Cái');

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
(1, 'meocon', '$2y$10$coAW59goVibOoDttNs/VfOIpjgZ7Z2cFTWXJFu.lbMQnGjUpRMJAW', 'My Thuong', NULL, NULL);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `foot_banners`
--
ALTER TABLE `foot_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `head_banners`
--
ALTER TABLE `head_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product_units`
--
ALTER TABLE `product_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
