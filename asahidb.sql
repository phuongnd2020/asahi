-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2015 at 11:49 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asahidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `order` int(11) DEFAULT NULL,
  `is_deleted` tinyint(2) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category_rental`
--

CREATE TABLE `category_rental` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `display` tinyint(2) DEFAULT NULL,
  `is_deleted` tinyint(2) NOT NULL DEFAULT '0',
  `top` int(11) DEFAULT NULL,
  `up` int(11) DEFAULT NULL,
  `down` int(11) DEFAULT NULL,
  `last` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_rental`
--

INSERT INTO `category_rental` (`id`, `name`, `display`, `is_deleted`, `top`, `up`, `down`, `last`, `created_at`, `updated_at`) VALUES
(1, '配水ポリエチレン管融着工具', 1, 0, 1, 0, 0, 0, '2015-12-09 04:09:10', '2015-12-09 05:34:22'),
(2, '配水ポリエチレン管融着工具', 1, 0, 2, 0, 0, 0, '2015-12-09 00:00:00', '2015-12-09 09:24:30'),
(3, 'パイプ挿入機', 1, 0, 3, 0, 0, 0, '2015-12-16 00:00:00', '2015-12-09 00:00:00'),
(4, '塩ビパイプ挿入機', 1, 0, 4, 0, 0, 0, '2015-12-09 06:16:19', '2015-12-09 09:20:24'),
(5, '漏水探知機', 1, 0, 5, 0, 0, 0, '2015-12-09 05:19:23', '2015-12-09 07:22:18'),
(6, '各種テスト用機器', 0, 1, 6, 0, 0, 0, '2015-12-09 08:00:00', '2015-12-09 09:26:33'),
(7, 'その他', 0, 0, 8, 0, 0, 0, '2015-12-09 07:20:22', '2015-12-09 06:16:20'),
(8, 'fcdsfsdfg', 0, 1, 0, 0, 0, 0, '2015-12-10 06:07:12', '2015-12-10 06:07:12'),
(9, 'CCCCCCCCC', 0, 0, 0, 0, 0, 0, '2015-12-10 06:07:56', '2015-12-10 06:07:56'),
(10, 'SSSSS', 0, 0, 0, 0, 0, 0, '2015-12-10 06:10:19', '2015-12-10 06:10:19'),
(11, 'AABBCC', 0, 0, 0, 0, 0, 0, '2015-12-10 06:11:15', '2015-12-10 06:11:15'),
(12, 'gggg', 0, 1, 0, 0, 0, 0, '2015-12-10 06:32:53', '2015-12-10 06:32:53'),
(13, 'dfghj', 0, 0, 0, 0, 0, 0, '2015-12-10 06:33:59', '2015-12-10 06:33:59'),
(14, 'GGGGFSFSGFSG', 0, 1, 0, 0, 0, 0, '2015-12-10 06:34:29', '2015-12-10 06:34:29'),
(15, 'EEEEEEE', NULL, 1, 0, 0, 0, 0, '2015-12-10 06:35:11', '2015-12-10 06:35:11'),
(16, 'Hello World', 0, 0, 0, 0, 0, 0, '2015-12-10 06:38:46', '2015-12-10 06:38:46'),
(17, 'SAKANA', 1, 0, 0, 0, 0, 0, '2015-12-10 06:39:11', '2015-12-10 06:39:11'),
(18, '7678i67868', 1, 0, 0, 0, 0, 0, '2015-12-10 07:15:44', '2015-12-10 07:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order` int(11) DEFAULT NULL,
  `is_deleted` tinyint(2) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`id`, `category_id`, `product_id`, `order`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 0, '2015-12-10 08:13:33', '2015-12-10 06:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `rental_product`
--

CREATE TABLE `rental_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_name_auxiliary` varchar(255) NOT NULL,
  `cat_rental_id` int(11) NOT NULL,
  `copy` varchar(255) NOT NULL,
  `overview` varchar(255) DEFAULT NULL,
  `set_content` varchar(255) DEFAULT NULL,
  `annotation` varchar(255) DEFAULT NULL,
  `image_first` varchar(200) DEFAULT NULL,
  `image_second` varchar(200) DEFAULT NULL,
  `display` tinyint(2) DEFAULT NULL,
  `show_rate` tinyint(2) DEFAULT NULL,
  `rental_first_price` decimal(10,0) DEFAULT NULL,
  `rental_one_month_price` decimal(10,0) DEFAULT NULL,
  `service_cost` decimal(10,0) DEFAULT NULL,
  `omotekumi` text,
  `display_top` tinyint(1) DEFAULT NULL,
  `top` int(11) DEFAULT NULL,
  `up` int(11) DEFAULT NULL,
  `down` int(11) DEFAULT NULL,
  `last` int(11) DEFAULT NULL,
  `is_deleted` tinyint(2) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rental_product`
--

INSERT INTO `rental_product` (`id`, `product_name`, `product_name_auxiliary`, `cat_rental_id`, `copy`, `overview`, `set_content`, `annotation`, `image_first`, `image_second`, `display`, `show_rate`, `rental_first_price`, `rental_one_month_price`, `service_cost`, `omotekumi`, `display_top`, `top`, `up`, `down`, `last`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'JWEF200-II', 'EFコントローラ', 1, '1', '1', '1', '1', '/uploads/images/rental_product/1017757107.jpg', '/uploads/images/rental_product/1156195922.jpg', 0, 1, '111', '2134', '3466', 'Hello World! 123456', 0, NULL, NULL, NULL, NULL, 0, '2015-12-10 09:00:00', '2015-12-11 10:46:28'),
(2, 'EF2800iSE', 'インバーター発電機', 3, '3', '3', '4', '3', '3', '4', 1, 1, '100', '200', '300', 'Konnichiwa', 1, 1, 1, 1, 1, 0, '2015-12-17 00:00:00', '2015-12-10 00:22:00'),
(3, 'AAAAA', 'bnvbn', 0, 'vmvb', 'mvbmv', 'bmvbm', 'vmvb', '/uploads/images/rental_product/1026306406.jpg', '/uploads/images/rental_product/1284117041.jpg', 1, 0, '4989', '978978', '9789', '9878olhj,j,hj,hjkgktkt', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-12-11 09:00:01'),
(4, 'AAAAA', '46', 1, '645645', '6456', '456456', '456456', '/uploads/images/rental_product/1439707797.jpg', '/uploads/images/rental_product/348993047.jpg', 1, 0, '54645645', '6456', '456', '456456456', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-12-11 10:33:54');

-- --------------------------------------------------------

--
-- Table structure for table `sell_product`
--

CREATE TABLE `sell_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_name_auxiliary` varchar(255) NOT NULL,
  `display_type` varchar(100) DEFAULT NULL,
  `cat_product_id` int(11) NOT NULL,
  `copy` varchar(255) DEFAULT NULL,
  `overview` varchar(200) DEFAULT NULL,
  `set_content` varchar(200) DEFAULT NULL,
  `annotation` varchar(200) DEFAULT NULL,
  `image_first` varchar(255) DEFAULT NULL,
  `image_second` varchar(255) DEFAULT NULL,
  `display_rate` tinyint(2) DEFAULT NULL,
  `sell_price` double DEFAULT NULL,
  `annotation_price` double DEFAULT NULL,
  `ometekumi` text CHARACTER SET big5,
  `url` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `display_top` tinyint(2) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `published` tinyint(2) DEFAULT NULL,
  `is_deleted` tinyint(2) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `top_page_show`
--

CREATE TABLE `top_page_show` (
  `id` int(11) NOT NULL,
  `total_rental_display` int(11) DEFAULT NULL,
  `total_product_display` int(11) DEFAULT NULL,
  `is_deleted` tinyint(2) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_rental`
--
ALTER TABLE `category_rental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental_product`
--
ALTER TABLE `rental_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_product`
--
ALTER TABLE `sell_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_page_show`
--
ALTER TABLE `top_page_show`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_rental`
--
ALTER TABLE `category_rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rental_product`
--
ALTER TABLE `rental_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
