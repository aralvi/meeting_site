-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 06:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estore`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'name', 'this is idescription', 'active', '2020-12-17 06:48:27', '2020-12-19 03:49:59'),
(5, 'test', 'this is description for test', 'active', '2020-12-23 06:37:40', '2020-12-23 06:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `store_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(5, 7, 'brand 1', 'active', NULL, NULL),
(6, 6, 'brand 2', 'active', NULL, NULL),
(7, 8, 'brand-update', 'active', '2020-12-23 05:53:13', '2020-12-23 06:22:07'),
(10, 6, 'new', 'active', '2020-12-23 06:51:06', '2020-12-23 06:51:18');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `store_id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(5, 6, 'ewd-software-update', 'this is description of software category update', 'active', '2020-12-22 05:17:36', '2020-12-23 00:07:49'),
(6, 6, 'ewd-other categories', 'this is other catgories', 'active', '2020-12-22 05:47:52', '2020-12-22 06:44:40'),
(7, 7, 'the-category', 'this is description', 'active', '2020-12-22 06:36:53', '2020-12-22 06:36:53'),
(8, 7, 'the-category-2', 'this is description', 'active', '2020-12-22 06:39:01', '2020-12-22 06:39:01'),
(9, 8, 'ewd2-category', 'ewd2-category description', 'active', '2020-12-22 06:41:35', '2020-12-22 06:41:35'),
(10, 6, 'ewd-category-2', 'this is description', 'active', '2020-12-22 06:49:30', '2020-12-22 06:49:30'),
(11, 7, 'the-new-update', 'the-new description-udpate', 'active', '2020-12-23 02:08:38', '2020-12-23 02:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `dob` date NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `user_id`, `dob`, `img`, `address1`, `address2`, `subscription`, `created_at`, `updated_at`) VALUES
(5, 12, '2020-12-17', '1608620515.png', '434', 'address 2', '2', '2020-12-22 02:01:55', '2020-12-22 02:01:55'),
(6, 18, '2020-12-23', '1608629816.png', '434 update', NULL, '2', '2020-12-22 04:36:56', '2020-12-22 04:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apartment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `store_id`, `user_id`, `img`, `apartment`, `city`, `country`, `postal_code`, `address`, `created_at`, `updated_at`) VALUES
(3, 6, 19, '1608636538.png', 'this is apartment', 'lahore', 'Pakistan', '38000', '434', '2020-12-22 06:28:58', '2020-12-22 06:28:58'),
(4, 7, 20, '1608637083.png', 'this is apartment', 'Lahore', 'Pakistan', '54000', 'testing address update', '2020-12-22 06:38:03', '2020-12-23 01:51:01'),
(5, 8, 21, '1608637405.png', 'this is apartment', 'lahore', 'Pakistan', '38000', '434', '2020-12-22 06:43:25', '2020-12-22 06:43:25'),
(6, 6, 22, '1608637884.png', 'this is apartment update', 'lahore', 'Pakistan', '38000', 'live test address update', '2020-12-22 06:51:24', '2020-12-22 06:52:14'),
(7, 7, 23, '1608706734.png', 'this is apartment', 'lahore', 'Pakistan', '38000', 'live test address', '2020-12-23 01:58:54', '2020-12-23 01:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `discount_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_usage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `store_id`, `discount_name`, `discount_type`, `discount_code`, `discount_value`, `discount_usage`, `status`, `created_at`, `updated_at`) VALUES
(2, 7, 'last week of december', 'flat', 'VXT8WKWKgv1bCC4', '200', '2020-12-31', 'active', '2020-12-23 05:01:23', '2020-12-23 05:22:54'),
(3, 7, 'new discount', 'percent', 'new-discount-new', '10', '2020-12-31', 'active', '2020-12-23 05:27:51', '2020-12-23 05:30:56'),
(4, 6, 'new-discount-ewd', 'percent', 'new-discount-new-code', '10', '2020-12-27', 'active', '2020-12-23 05:34:33', '2020-12-23 05:35:15'),
(5, 8, 'ewd2-discount', 'percent', 'ewd2-code', '10', '2020-12-30', 'active', '2020-12-23 05:42:42', '2020-12-23 05:42:42'),
(7, 6, 'new-flat-discount', 'flat', '3ImM30atsVQbQYJ', '5', '2020-12-30', 'active', '2020-12-24 01:32:47', '2020-12-24 01:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_15_124327_add_status_column_users', 2),
(5, '2020_12_17_100159_create_announcements_table', 3),
(6, '2020_12_18_050232_create_clients_table', 4),
(7, '2020_12_18_111749_create_packages_table', 5),
(8, '2020_12_19_045052_create_stores_table', 6),
(9, '2020_12_19_060927_add_column_status_stores', 7),
(10, '2020_12_19_062833_add_column_address_stores', 8),
(11, '2020_12_19_074046_create_categories_table', 9),
(12, '2020_12_20_070854_create_brands_table', 10),
(13, '2020_12_21_044913_create_products_table', 10),
(14, '2020_12_21_070108_create_product_variations_table', 10),
(15, '2020_12_21_100833_add_column_all_values_product_variations', 11),
(16, '2020_12_21_050008_add_column_phone_users', 12),
(17, '2020_12_22_044130_create_customers_table', 12),
(18, '2020_12_22_063906_add_user_id_clients', 13),
(19, '2020_12_22_100015_add_store_id_categories', 14),
(20, '2020_12_22_112101_add_store_id_customers', 15),
(21, '2020_12_23_051648_add_column_store_id_products', 16),
(22, '2020_12_23_052628_add_column_store_id_brands', 17),
(23, '2020_12_23_073600_create_discounts_table', 18),
(24, '2020_12_23_093054_add_status_discount', 19),
(25, '2020_12_23_093140_add_status_discount', 20),
(26, '2020_12_24_041911_create_orders_table', 21),
(27, '2020_12_24_113720_create_order_details_table', 21),
(28, '2020_12_24_115046_add_grand_total_orders', 22),
(29, '2020_12_24_115156_add_grand_total_orders', 23),
(30, '2020_12_24_120915_add_order_note_orders', 24),
(31, '2020_12_26_044919_add_some_columns_order_details', 25),
(32, '2020_12_27_051151_add_variables_column_order_details', 26);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `products` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `store_id`, `customer_id`, `products`, `items`, `name`, `company_name`, `email`, `phone`, `postal_code`, `address`, `status`, `grand_total`, `order_note`, `created_at`, `updated_at`) VALUES
(24, 6, 3, '[8,9]', '2', 'testfirst testlast', NULL, 'test@gmail.com', '03013435656', '38000', 'street no 32 house no 543 faisalabad, punjab ,pakistan', 'completed', '445', NULL, '2020-12-26 02:50:57', '2020-12-26 02:50:57'),
(40, 6, 3, '[10,11,12]', '3', 'testfirst testlast', NULL, 'test@gmail.com', '03013435656', '38000', '434', 'failed', '1305', '{\"order_note_times\":[\"1609043624\"],\"order_notes\":[null]}', '2020-12-26 23:34:54', '2020-12-26 23:34:54'),
(41, 6, 3, '[12]', '1', 'testfirst testlast', NULL, 'test@gmail.com', '03013435656', '38000', '434', 'pending', '450', '{\"order_note_times\":[\"1609045725\"],\"order_notes\":[null]}', '2020-12-27 00:14:22', '2020-12-27 00:14:22'),
(42, 6, 3, '[8,10,11,12]', '4', 'testfirst testlast', NULL, 'test@gmail.com', '03013435656', '38000', '434', 'completed', '1345', '{\"order_note_times\":[\"1609046157\"],\"order_notes\":[\"this is order with new method and variation\"]}', '2020-12-27 00:19:01', '2020-12-27 00:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `variables` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `variables`, `original_price`, `unit_price`, `discount`, `qty`, `discount_id`, `sub_total`, `grand_total`, `created_at`, `updated_at`) VALUES
(37, 24, 9, NULL, '450', '405', 'on', '1', '4', '405', '445', '2020-12-26 02:50:57', '2020-12-26 02:50:57'),
(38, 24, 8, NULL, '45', '40', 'on', '1', '7', '40', '445', '2020-12-26 02:50:57', '2020-12-26 02:50:57'),
(53, 40, 10, NULL, '450', '450', 'off', '1', NULL, '450', '1305', '2020-12-26 23:34:54', '2020-12-26 23:34:54'),
(54, 40, 11, NULL, '450', '450', 'off', '1', NULL, '450', '1305', '2020-12-26 23:34:54', '2020-12-26 23:34:54'),
(55, 40, 12, NULL, '450', '405', 'on', '1', '4', '405', '1305', '2020-12-26 23:34:54', '2020-12-26 23:34:54'),
(56, 41, 12, 'black small ', '450', '450', 'off', '1', NULL, '450', '450', '2020-12-27 00:14:23', '2020-12-27 00:14:23'),
(57, 42, 11, '', '450', '450', 'off', '1', NULL, '450', '1345', '2020-12-27 00:19:01', '2020-12-27 00:19:01'),
(58, 42, 10, '', '450', '405', 'on', '1', '4', '405', '1345', '2020-12-27 00:19:01', '2020-12-27 00:19:01'),
(59, 42, 8, '', '45', '40', 'on', '1', '7', '40', '1345', '2020-12-27 00:19:01', '2020-12-27 00:19:01'),
(60, 42, 12, 'white large ', '450', '450', 'off', '1', NULL, '450', '1345', '2020-12-27 00:19:01', '2020-12-27 00:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `amount`, `type`, `status`, `description`, `created_at`, `updated_at`) VALUES
(2, 'new', 120.00, 'yearly', 'active', 'this is description of new', '2020-12-18 07:42:13', '2020-12-18 07:42:13'),
(4, 'all in one', 12.00, 'weekly', 'active', 'this is package with multiple stores', '2020-12-22 04:47:49', '2020-12-22 04:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `range` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upsell` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crosssell` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `variant` tinyint(4) NOT NULL DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `store_id`, `category_id`, `brand_id`, `name`, `price`, `img`, `description`, `sku`, `quantity`, `stock_status`, `range`, `weight`, `code`, `upsell`, `crosssell`, `variant`, `status`, `created_at`, `updated_at`) VALUES
(6, 8, 9, 7, 'first pro update', 230.00, '1608701866.png', 'this is description of first project update', '3', '1', 'stock in', '3', '1kg', '20202', 'pro', NULL, 1, 'active', '2020-12-23 00:37:46', '2020-12-23 06:26:33'),
(7, 7, 7, 5, 'this is first product', 666.00, '1608706618.png', 'this is description', '3', '5', 'stock in', '3', '125', '432', NULL, NULL, 1, 'active', '2020-12-23 01:56:58', '2020-12-23 01:57:29'),
(8, 6, 10, 6, 'ewd-product', 45.00, '1608719586.png', 'this is description', '3', '84', 'stock in', '3', '0.5 kg', '432', NULL, NULL, 0, 'active', '2020-12-23 05:33:06', '2020-12-27 00:32:04'),
(9, 6, 10, 6, 'ewd-product2', 450.00, '1608719586.png', 'this is description', '3', '83', 'stock in', '3', '0.5 kg', '432', NULL, NULL, 1, 'active', '2020-12-23 05:33:06', '2020-12-27 00:48:33'),
(10, 6, 10, 6, 'ewd-product3', 450.00, '1608719586.png', 'this is description', '3', '81', 'stock in', '3', '0.5 kg', '432', NULL, NULL, 0, 'active', '2020-12-23 05:33:06', '2020-12-27 00:32:04'),
(11, 6, 10, 6, 'ewd-product4', 450.00, '1608719586.png', 'this is description', '3', '71', 'stock in', '3', '0.5 kg', '432', NULL, NULL, 0, 'active', '2020-12-23 05:33:06', '2020-12-27 00:30:55'),
(12, 6, 10, 6, 'ewd-product5', 450.00, '1608719586.png', 'this is description', '3', '79', 'stock in', '3', '0.5 kg', '432', NULL, NULL, 1, 'active', '2020-12-23 05:33:06', '2020-12-27 00:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `variant_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `variant_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `all_values` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variations`
--

INSERT INTO `product_variations` (`id`, `product_id`, `variant_name`, `variant_value`, `all_values`, `created_at`, `updated_at`) VALUES
(60, 7, 'color', 'yellow', 'yellow,green,white', '2020-12-23 01:57:29', '2020-12-23 01:57:29'),
(65, 6, 'size', 'small', 'small,large', '2020-12-23 06:26:51', '2020-12-23 06:26:51'),
(69, 12, 'color', 'black,white,blue', 'black,white,blue', '2020-12-26 10:41:52', '2020-12-26 10:41:52'),
(70, 12, 'size', 'small,large', 'small,large', '2020-12-26 10:41:52', '2020-12-26 10:41:52'),
(71, 9, 'color', 'black,pink,red', 'black,pink,red', '2020-12-27 00:48:33', '2020-12-27 00:48:33'),
(72, 9, 'size', '43,44,45', '43,44,45', '2020-12-27 00:48:33', '2020-12-27 00:48:33'),
(73, 9, 'material', '54,43,32', '54,43,32', '2020-12-27 00:48:33', '2020-12-27 00:48:33');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apartment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `user_id`, `name`, `category`, `package`, `first_name`, `last_name`, `country`, `city`, `postal_code`, `apartment`, `phone`, `address`, `website`, `status`, `created_at`, `updated_at`) VALUES
(6, 5, 'ewd', 'software', '2', 'Muhammad', 'Waseem', 'Pakistan', 'lahore', '38000', 'this is apartment', '03013435656', '434', NULL, 'active', '2020-12-22 04:39:02', '2020-12-22 04:39:02'),
(7, 6, 'the', 'other', '2', 'livetest', 'livetestlat', 'Pakistan', 'lahore', '38000', 'this is apartment', '03051449423', 'live test address', NULL, 'active', '2020-12-22 04:40:52', '2020-12-22 04:41:08'),
(8, 5, 'ewd2', 'other', '4', 'Muhammad', 'Waseem', 'Pakistan', 'lahore', '38000', 'this is apartment', '03013435656', '434', NULL, 'active', '2020-12-22 06:40:02', '2020-12-22 06:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `first_name`, `last_name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(3, 'superadmin', 'super', 'admin', 'superadmin@gmail.com', NULL, NULL, '$2y$10$URD/OsMxBVgDxPO9T0ZzbufulKDJIwWTbRpOEH5MGKxs9KHHNSNpm', 'RFYDcwiiblDKGCVhxDZmJZKkyx1MIKCD3t0GiC5fSexFtN11cWwHr2QemnCZ', 'active', '2020-12-15 07:13:13', '2020-12-15 07:13:13'),
(12, 'admin', 'Muhammad', 'Waseem', 'waseem@ewdtech.com', '03013435656', NULL, '$2y$10$9SMmwnd3SNYwlg2fyyb5o.ckN9UWXSEqbEHwz7At6a0.38slD887S', NULL, 'active', '2020-12-22 02:01:55', '2020-12-22 02:07:45'),
(13, 'admin', 'testfirst', 'testlast', 'test@gmail.com', '03013435656', NULL, '$2y$10$pwC/b.Xw1dAw6soxmcAYIumpqbiQZspVHx7lki3xi0tzW8U.2GsiS', NULL, 'active', '2020-12-22 04:35:07', '2020-12-22 04:35:07'),
(16, 'admin', 'testfirst', 'testlast', 'test-first-client@gmail.com', '03013435656', NULL, '$2y$10$lu/xF/3PE9su8ubiMgmpV.7pjhUzHxw5NTYKW7JGKdtVFq7tjX9Ey', NULL, 'active', '2020-12-22 04:35:59', '2020-12-22 04:35:59'),
(18, 'admin', 'testfirst', 'testlast', 'waseem2@ewdtech.com', '03013435656', NULL, '$2y$10$6heRdoM6ZU8TGqa1FY0jgeDU91561XzhWAYpiJTEQaUSp4Hf3nfi2', NULL, 'active', '2020-12-22 04:36:56', '2020-12-22 04:38:04'),
(19, 'customer', 'ewd-test', 'ewd-last', 'customer@gmail.com', '03013435656', NULL, '$2y$10$CX5gL1OLN4YsrNFYcIerCuXKNOoigLzWIZOlzaWurav6kx3huKAJy', NULL, 'active', '2020-12-22 06:28:58', '2020-12-24 06:27:05'),
(20, 'customer', 'the-first', 'the-last', 'the-customer@gmail.com', '03011122334', NULL, '$2y$10$HZzODqwJ1p993951JpqHUe/mFW5N10pHI9FIJb52gCOOGrdP9h5JO', NULL, 'active', '2020-12-22 06:38:03', '2020-12-22 06:38:03'),
(21, 'customer', 'ewd2-first', 'ewd2-last', 'ewd2-customer@gmail.com', '03013435656', NULL, '$2y$10$VVJWc2z2NScjketA1lWi5OyEvTMpW.IesVqI28St4Na88FJ1sCXjG', NULL, 'active', '2020-12-22 06:43:25', '2020-12-22 06:43:25'),
(22, 'customer', 'ewd-customer', 'ewd-customer', 'ewd-customer-5@gmail.com', '03051449423', NULL, '$2y$10$dNpnVu/d5kIGGLQDZxx8zOU3O.Ovzv2hZvj.LBkG3bUoXEG/KladW', NULL, 'active', '2020-12-22 06:51:24', '2020-12-24 06:23:12'),
(23, 'customer', 'the', 'thelast', 'the@gmail.com', '03051449423', NULL, '$2y$10$Hgo5AhNlR./6L9H0RAdeLOGPpGd9tpdYoqSEhHe5f9y9xUiBoNf8K', NULL, 'active', '2020-12-23 01:58:54', '2020-12-23 01:58:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brands_store_id_foreign` (`store_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_store_id_foreign` (`store_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_user_id_foreign` (`user_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_user_id_foreign` (`user_id`),
  ADD KEY `customers_store_id_foreign` (`store_id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discounts_store_id_foreign` (`store_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_store_id_foreign` (`store_id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_store_id_foreign` (`store_id`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variations_product_id_foreign` (`product_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stores_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brands`
--
ALTER TABLE `brands`
  ADD CONSTRAINT `brands_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD CONSTRAINT `product_variations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
