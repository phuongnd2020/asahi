-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2015 at 01:20 AM
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
  `display` tinyint(1) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `is_deleted` tinyint(2) NOT NULL DEFAULT '0',
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
  `display` tinyint(1) DEFAULT NULL,
  `is_deleted` tinyint(2) NOT NULL DEFAULT '0',
  `order` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `order` int(11) DEFAULT NULL,
  `is_deleted` tinyint(2) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sell_product`
--

CREATE TABLE `sell_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_name_auxiliary` varchar(255) NOT NULL,
  `display_type` tinyint(3) DEFAULT NULL,
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
  `omotekumi` text,
  `url` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `display_top` tinyint(2) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `display` tinyint(2) DEFAULT NULL,
  `open_tab` tinyint(1) DEFAULT NULL,
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
  `rental_product_id` int(11) DEFAULT NULL,
  `sell_product_id` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
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
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category_rental`
--
ALTER TABLE `category_rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rental_product`
--
ALTER TABLE `rental_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sell_product`
--
ALTER TABLE `sell_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `top_page_show`
--
ALTER TABLE `top_page_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
