-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 01:05 PM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'dummy.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_id`, `img`, `created_at`, `updated_at`) VALUES
(1, 3, '1609329438.png', NULL, '2020-12-30 06:57:18'),
(3, 25, 'dummy.jpg', NULL, NULL);

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
(1, 'name', 'this is idescription', 'active', '2020-12-17 06:48:27', '2020-12-19 03:49:59');

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
(5, 12, '1997-12-18', '1609329569.png', 'this is address one for client who is owner of mutliple stores', 'this is address two which optional for owner of store', '2', '2020-12-22 02:01:55', '2020-12-30 06:59:29'),
(6, 18, '2020-12-23', '1609305440.png', '434 update', NULL, '2', '2020-12-22 04:36:56', '2020-12-30 00:17:20');

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
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `store_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `user_id`, `store_id`, `template_name`, `subject`, `body`, `created_at`, `updated_at`) VALUES
(1, 12, '6', 'register', 'testUP', '<!DOCTYPE html>\n<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">\n<head>\n    <meta charset=\"utf-8\"> <!-- utf-8 works for most cases -->\n    <meta name=\"viewport\" content=\"width=device-width\"> <!-- Forcing initial-scale shouldn\'t be necessary -->\n    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> <!-- Use the latest (edge) version of IE rendering engine -->\n    <meta name=\"x-apple-disable-message-reformatting\">  <!-- Disable auto-scale in iOS 10 Mail entirely -->\n    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->\n\n    <link href=\"https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700\" rel=\"stylesheet\">\n\n    <!-- CSS Reset : BEGIN -->\n    <style>\n\n        /* What it does: Remove spaces around the email design added by some email clients. */\n        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */\n        html,\nbody {\n    margin: 0 auto !important;\n    padding: 0 !important;\n    height: 100% !important;\n    width: 100% !important;\n    background: #f1f1f1;\n}\n\n/* What it does: Stops email clients resizing small text. */\n* {\n    -ms-text-size-adjust: 100%;\n    -webkit-text-size-adjust: 100%;\n}\n\n/* What it does: Centers email on Android 4.4 */\ndiv[style*=\"margin: 16px 0\"] {\n    margin: 0 !important;\n}\n\n/* What it does: Stops Outlook from adding extra spacing to tables. */\ntable,\ntd {\n    mso-table-lspace: 0pt !important;\n    mso-table-rspace: 0pt !important;\n}\n\n/* What it does: Fixes webkit padding issue. */\ntable {\n    border-spacing: 0 !important;\n    border-collapse: collapse !important;\n    table-layout: fixed !important;\n    margin: 0 auto !important;\n}\n\n/* What it does: Uses a better rendering method when resizing images in IE. */\nimg {\n    -ms-interpolation-mode:bicubic;\n}\n\n/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */\na {\n    text-decoration: none;\n}\n\n/* What it does: A work-around for email clients meddling in triggered links. */\n*[x-apple-data-detectors],  /* iOS */\n.unstyle-auto-detected-links *,\n.aBn {\n    border-bottom: 0 !important;\n    cursor: default !important;\n    color: inherit !important;\n    text-decoration: none !important;\n    font-size: inherit !important;\n    font-family: inherit !important;\n    font-weight: inherit !important;\n    line-height: inherit !important;\n}\n\n/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */\n.a6S {\n    display: none !important;\n    opacity: 0.01 !important;\n}\n\n/* What it does: Prevents Gmail from changing the text color in conversation threads. */\n.im {\n    color: inherit !important;\n}\n\n/* If the above doesn\'t work, add a .g-img class to any image in question. */\nimg.g-img + div {\n    display: none !important;\n}\n\n/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */\n/* Create one of these media queries for each additional viewport size you\'d like to fix */\n\n/* iPhone 4, 4S, 5, 5S, 5C, and 5SE */\n@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {\n    u ~ div .email-container {\n        min-width: 320px !important;\n    }\n}\n/* iPhone 6, 6S, 7, 8, and X */\n@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {\n    u ~ div .email-container {\n        min-width: 375px !important;\n    }\n}\n/* iPhone 6+, 7+, and 8+ */\n@media only screen and (min-device-width: 414px) {\n    u ~ div .email-container {\n        min-width: 414px !important;\n    }\n}\n\n    </style>\n\n    <!-- CSS Reset : END -->\n\n    <!-- Progressive Enhancements : BEGIN -->\n    <style>\n\n	    .primary{\n	background: #ff8b00;\n}\n.bg_white{\n	background: #ffffff;\n}\n.bg_light{\n	background: #fafafa;\n}\n.bg_black{\n	background: #000000;\n}\n.bg_dark{\n	background: rgba(0,0,0,.8);\n}\n.email-section{\n	padding:2.5em;\n}\n\n/*BUTTON*/\n.btn{\n	padding: 5px 20px;\n	display: inline-block;\n}\n.btn.btn-primary{\n	border-radius: 5px;\n	background: #ff8b00;\n	color: #ffffff;\n}\n.btn.btn-white{\n	border-radius: 5px;\n	background: #ffffff;\n	color: #000000;\n}\n.btn.btn-white-outline{\n	border-radius: 5px;\n	background: transparent;\n	border: 1px solid #fff;\n	color: #fff;\n}\n.btn.btn-black{\n	border-radius: 0px;\n	background: #000;\n	color: #fff;\n}\n.btn.btn-black-outline{\n	border-radius: 0px;\n	background: transparent;\n	border: 2px solid #000;\n	color: #000;\n	font-weight: 700;\n}\n.btn.btn-custom{\n	text-transform: uppercase;\n	font-weight: 600;\n	font-size: 12px;\n}\n\nh1,h2,h3,h4,h5,h6{\n	font-family: \'Work Sans\', sans-serif;\n	color: #000000;\n	margin-top: 0;\n	font-weight: 400;\n}\n\nbody{\n	font-family: \'Work Sans\', sans-serif;\n	font-weight: 400;\n	font-size: 15px;\n	line-height: 1.8;\n	color: rgba(0,0,0,.5);\n}\n\na{\n	color: #ff8b00;\n}\n\np{\n	margin-top: 0;\n}\n\ntable{\n}\n/*LOGO*/\n\n.logo h1{\n	margin: 0;\n}\n.logo h1 a{\n	color: #000000;\n	font-size: 20px;\n	font-weight: 700;\n	/*text-transform: uppercase;*/\n	font-family: \'Work Sans\', sans-serif;\n}\n\n.navigation{\n	padding: 0;\n	padding: 1em 0;\n	/*background: rgba(0,0,0,1);*/\n	border-top: 1px solid rgba(0,0,0,.05);\n	border-bottom: 1px solid rgba(0,0,0,.05);\n	margin-bottom: 0;\n}\n.navigation li{\n	list-style: none;\n	display: inline-block;;\n	margin-left: 5px;\n	margin-right: 5px;\n	font-size: 14px;\n	font-weight: 500;\n}\n.navigation li a{\n	color: rgba(0,0,0,1);\n}\n\n/*HERO*/\n.hero{\n	position: relative;\n	z-index: 0;\n}\n.hero .overlay{\n	position: absolute;\n	top: 0;\n	left: 0;\n	right: 0;\n	bottom: 0;\n	content: \'\';\n	width: 100%;\n	background: #000000;\n	z-index: -1;\n	opacity: .2;\n}\n.hero .text{\n	color: rgba(255,255,255,.9);\n	max-width: 50%;\n	margin: 0 auto 0;\n}\n.hero .text h2{\n	color: #fff;\n	font-size: 34px;\n	margin-bottom: 0;\n	font-weight: 400;\n	line-height: 1.4;\n}\n.hero .text h2 span{\n	font-weight: 600;\n	color: #ff8b00;\n}\n\n/*INTRO*/\n.intro{\n	position: relative;\n	z-index: 0;\n}\n\n.intro .text{\n	color: rgba(0,0,0,.3);\n}\n.intro .text h2{\n	color: #000;\n	font-size: 34px;\n	margin-bottom: 0;\n	font-weight: 300;\n}\n.intro .text h2 span{\n	font-weight: 600;\n	color: #ff8b00;\n}\n\n/*SERVICES*/\n.services{\n}\n.text-services{\n	padding: 10px 10px 0; \n	text-align: center;\n}\n.text-services h3{\n	font-size: 18px;\n	font-weight: 400;\n}\n\n.services-list{\n	margin: 0 0 20px 0;\n	width: 100%;\n}\n\n.services-list img{\n	float: left;\n}\n.services-list h3{\n	margin-top: 0;\n	margin-bottom: 0;\n}\n.services-list p{\n	margin: 0;\n}\n\n\n\n/*COUNTER*/\n.counter{\n	width: 100%;\n	position: relative;\n	z-index: 0;\n}\n.counter .overlay{\n	position: absolute;\n	top: 0;\n	left: 0;\n	right: 0;\n	bottom: 0;\n	content: \'\';\n	width: 100%;\n	background: #000000;\n	z-index: -1;\n	opacity: .3;\n}\n.counter-text{\n	text-align: center;\n}\n.counter-text .num{\n	display: block;\n	color: #ffffff;\n	font-size: 34px;\n	font-weight: 700;\n}\n.counter-text .name{\n	display: block;\n	color: rgba(255,255,255,.9);\n	font-size: 13px;\n}\n\n/*TOPIC*/\n.topic{\n	width: 100%;\n	display: block;\n	float: left;\n	border-bottom: 1px solid rgba(0,0,0,.1);\n	padding: 1.5em 0;\n}\n.topic .img{\n	width: 120px;\n	float: left;\n}\n.topic .text{\n	width: calc(100% - 150px);\n	padding-left: 20px;\n	float: left;\n}\n.topic .text h3{\n	font-size: 20px;\n	margin-bottom: 15px;\n	line-height: 1.2;\n}\n.topic .text .meta{\n	margin-bottom: 10px;\n}\n\n/*HEADING SECTION*/\n.heading-section{\n}\n.heading-section h2{\n	color: #000000;\n	font-size: 28px;\n	margin-top: 0;\n	line-height: 1.4;\n	font-weight: 400;\n}\n.heading-section .subheading{\n	margin-bottom: 20px !important;\n	display: inline-block;\n	font-size: 13px;\n	text-transform: uppercase;\n	letter-spacing: 2px;\n	color: rgba(0,0,0,.4);\n	position: relative;\n}\n.heading-section .subheading::after{\n	position: absolute;\n	left: 0;\n	right: 0;\n	bottom: -10px;\n	content: \'\';\n	width: 100%;\n	height: 2px;\n	background: #ff8b00;\n	margin: 0 auto;\n}\n\n.heading-section-white{\n	color: rgba(255,255,255,.8);\n}\n.heading-section-white h2{\n	font-family: \n	line-height: 1;\n	padding-bottom: 0;\n}\n.heading-section-white h2{\n	color: #ffffff;\n}\n.heading-section-white .subheading{\n	margin-bottom: 0;\n	display: inline-block;\n	font-size: 13px;\n	text-transform: uppercase;\n	letter-spacing: 2px;\n	color: rgba(255,255,255,.4);\n}\n\n\nul.social{\n	padding: 0;\n}\nul.social li{\n	display: inline-block;\n	margin-right: 10px;\n	/*border: 1px solid #ff8b00;*/\n	padding: 10px;\n	border-radius: 50%;\n	background: rgba(0,0,0,.05);\n}\n\n/*FOOTER*/\n\n.footer{\n	border-top: 1px solid rgba(0,0,0,.05);\n	color: rgba(0,0,0,.5);\n}\n.footer .heading{\n	color: #000;\n	font-size: 20px;\n}\n.footer ul{\n	margin: 0;\n	padding: 0;\n}\n.footer ul li{\n	list-style: none;\n	margin-bottom: 10px;\n}\n.footer ul li a{\n	color: rgba(0,0,0,1);\n}\n\n\n@media screen and (max-width: 500px) {\n\n\n}\n\n\n    </style>\n\n\n</head>\n\n<body width=\"100%\" style=\"margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #fafafa;\">\n<center style=\"width: 100%; background-color: #f1f1f1;\">\n<div style=\"display: none; font-size: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;\">&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;</div>\n<div class=\"email-container\" style=\"max-width: 600px; margin: 0 auto;\"><!-- BEGIN BODY -->\n<table style=\"margin: auto;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\n<tbody>\n<tr>\n<td class=\"bg_light\" style=\"padding: .5em 2.5em 1em 2.5em;\" valign=\"top\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"logo\" style=\"text-align: center;\">\n<h1>Register</h1>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<!-- end tr -->\n<tr>\n<td class=\"hero bg_white\" style=\"background-image: url(\'/estore/store/emails/images/bg_1.jpg\'); background-size: cover; height: 400px;\" valign=\"middle\">\n<div class=\"overlay\">&nbsp;</div>\n<table>\n<tbody>\n<tr>\n<td>\n<div class=\"text\" style=\"padding: 0 4em; text-align: center;\">\n<h2>Developer Conference 2019</h2>\n<p>December 15 to 20 2018</p>\n<p><a class=\"btn btn-primary\" href=\"#\">Join Conference</a></p>\n</div>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<!-- end tr -->\n<tr>\n<td class=\"bg_dark email-section\" style=\"text-align: center;\">\n<div class=\"heading-section heading-section-white\"><span class=\"subheading\">Welcome</span>\n<h2>About Eventos</h2>\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\n</div>\n</td>\n</tr>\n<!-- end: tr -->\n<tr>\n<td class=\"bg_light email-section\">\n<div class=\"heading-section\" style=\"text-align: center; padding: 0 30px;\">\n<h2>Our Services</h2>\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n</div>\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"services\" style=\"padding-top: 20px;\" valign=\"top\" width=\"50%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"icon\"><img style=\"width: 50px; max-width: 600px; height: auto; margin: auto; display: block;\" src=\"/estore/store/emails/images/megaphone.png\" alt=\"\" /></td>\n</tr>\n<tr>\n<td class=\"text-services\">\n<h3>Speakers</h3>\n<p>Far far away, behind the word mountains, far from the countries</p>\n<p><a class=\"btn btn-custom\" href=\"#\">Read more</a></p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td class=\"services\" style=\"padding-top: 20px;\" valign=\"top\" width=\"50%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"icon\"><img style=\"width: 50px; max-width: 600px; height: auto; margin: auto; display: block;\" src=\"/estore/store/emails/images/work.png\" alt=\"\" /></td>\n</tr>\n<tr>\n<td class=\"text-services\">\n<h3>Session</h3>\n<p>Far far away, behind the word mountains, far from the countries</p>\n<p><a class=\"btn btn-custom\" href=\"#\">Read more</a></p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<tr>\n<td class=\"services\" style=\"padding-top: 20px;\" valign=\"top\" width=\"50%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"icon\"><img style=\"width: 50px; max-width: 600px; height: auto; margin: auto; display: block;\" src=\"/estore/store/emails/images/network.png\" alt=\"\" /></td>\n</tr>\n<tr>\n<td class=\"text-services\">\n<h3>Workshops</h3>\n<p>Far far away, behind the word mountains, far from the countries</p>\n<p><a class=\"btn btn-custom\" href=\"#\">Read more</a></p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td class=\"services\" style=\"padding-top: 20px;\" valign=\"top\" width=\"50%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"icon\"><img style=\"width: 50px; max-width: 600px; height: auto; margin: auto; display: block;\" src=\"/estore/store/emails/images/ticket.png\" alt=\"\" /></td>\n</tr>\n<tr>\n<td class=\"text-services\">\n<h3>Tickets</h3>\n<p>Far far away, behind the word mountains, far from the countries</p>\n<p><a class=\"btn btn-custom\" href=\"#\">Read more</a></p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<!-- end: tr -->\n<tr>\n<td class=\"counter\" style=\"background-image: url(\'/estore/store/emails/images/bg_1.jpg\'); background-size: cover; background-position: center center; padding: 4em 0;\" valign=\"middle\">\n<div class=\"overlay\">&nbsp;</div>\n<table>\n<tbody>\n<tr>\n<td valign=\"middle\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"counter-text\"><span class=\"num\">1000</span> <span class=\"name\">Speakers</span></td>\n</tr>\n</tbody>\n</table>\n</td>\n<td valign=\"middle\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"counter-text\"><span class=\"num\">5200</span> <span class=\"name\">Workshops</span></td>\n</tr>\n</tbody>\n</table>\n</td>\n<td valign=\"middle\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"counter-text\"><span class=\"num\">4000</span> <span class=\"name\">Tickets</span></td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<!-- end tr -->\n<tr>\n<td class=\"bg_white email-section\">\n<div class=\"heading-section\" style=\"text-align: center; padding: 0 30px;\">\n<h2>Schedules</h2>\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n</div>\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"10\">\n<tbody>\n<tr>\n<td style=\"width: 100%;\" valign=\"top\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td valign=\"top\" width=\"100%\">\n<div class=\"topic\">\n<div class=\"img\"><img style=\"width: 100%; max-width: 600px; height: auto; margin: auto; margin-bottom: 20px; display: block;\" src=\"/estore/store/emails/images/person_1.jpg\" alt=\"\" /></div>\n<div class=\"text\">\n<p class=\"meta\">09:00 am - 12:00 am</p>\n<h3>Best Practices For Programming WordPress</h3>\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n</div>\n</div>\n<div class=\"topic\">\n<div class=\"img\"><img style=\"width: 100%; max-width: 600px; height: auto; margin: auto; margin-bottom: 20px; display: block;\" src=\"/estore/store/emails/images/person_2.jpg\" alt=\"\" /></div>\n<div class=\"text\">\n<p class=\"meta\">09:00 am - 12:00 am</p>\n<h3>Best Practices For Programming WordPress</h3>\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n</div>\n</div>\n<div class=\"topic\">\n<div class=\"img\"><img style=\"width: 100%; max-width: 600px; height: auto; margin: auto; margin-bottom: 20px; display: block;\" src=\"/estore/store/emails/images/person_3.jpg\" alt=\"\" /></div>\n<div class=\"text\">\n<p class=\"meta\">09:00 am - 12:00 am</p>\n<h3>Best Practices For Programming WordPress</h3>\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n</div>\n</div>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<!-- end: tr --></tbody>\n</table>\n</td>\n</tr>\n<!-- end: tr -->\n<tr>\n<td class=\"bg_light email-section\">\n<div class=\"heading-section\" style=\"text-align: center; padding: 0 30px;\">\n<h2>Speakers</h2>\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n</div>\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"10\">\n<tbody>\n<tr>\n<td style=\"padding-top: 20px;\" valign=\"top\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td><img style=\"width: 80px; max-width: 600px; height: auto; margin: auto; margin-bottom: 20px; display: block; border-radius: 50%;\" src=\"/estore/store/emails/images/person_1.jpg\" alt=\"\" /></td>\n</tr>\n<tr>\n<td class=\"text-testimony\" style=\"text-align: center;\"><span class=\"position\">Pastor</span>\n<h3 class=\"name\">Ronald Tuff</h3>\n<p>Far far away, behind the word mountains</p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td style=\"padding-top: 20px;\" valign=\"top\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td><img style=\"width: 80px; max-width: 600px; height: auto; margin: auto; margin-bottom: 20px; display: block; border-radius: 50%;\" src=\"/estore/store/emails/images/person_2.jpg\" alt=\"\" /></td>\n</tr>\n<tr>\n<td class=\"text-testimony\" style=\"text-align: center;\"><span class=\"position\">Pastor</span>\n<h3 class=\"name\">Willam Clarson</h3>\n<p>Far far away, behind the word mountains</p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td style=\"padding-top: 20px;\" valign=\"top\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td><img style=\"width: 80px; max-width: 600px; height: auto; margin: auto; margin-bottom: 20px; display: block; border-radius: 50%;\" src=\"/estore/store/emails/images/person_3.jpg\" alt=\"\" /></td>\n</tr>\n<tr>\n<td class=\"text-testimony\" style=\"text-align: center;\"><span class=\"position\">Pastor</span>\n<h3 class=\"name\">Willam Clarson</h3>\n<p>Far far away, behind the word mountains</p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<!-- end: tr -->\n<tr>\n<td class=\"bg_white email-section\" style=\"width: 100%;\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td valign=\"middle\" width=\"50%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"text-services\" style=\"text-align: left; padding-right: 25px;\">\n<div class=\"services-list\">\n<div class=\"text\">\n<h3>Orchard Hotel</h3>\n<p>123, Green Garden Street, Texas, USA</p>\n</div>\n</div>\n<div class=\"services-list\">\n<div class=\"text\">\n<h3>Orchard Gymnasium</h3>\n<p>123, Green Garden Street, Texas, USA</p>\n</div>\n</div>\n<div class=\"services-list\">\n<div class=\"text\">\n<h3>Garden Hotel</h3>\n<p>123, Green Garden Street, Texas, USA</p>\n</div>\n</div>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td valign=\"middle\" width=\"50%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td><img style=\"width: 100%; max-width: 600px; height: auto; margin: auto; display: block;\" src=\"/estore/store/emails/images/about.jpg\" alt=\"\" /></td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<!-- end: tr --> <!-- 1 Column Text + Button : END --></tbody>\n</table>\n<table style=\"margin: auto;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\n<tbody>\n<tr>\n<td class=\"bg_light footer email-section\" valign=\"middle\">\n<table>\n<tbody>\n<tr>\n<td style=\"padding-top: 20px;\" valign=\"top\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"text-align: left; padding-right: 10px;\">\n<h3 class=\"heading\">About</h3>\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td style=\"padding-top: 20px;\" valign=\"top\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"text-align: left; padding-left: 5px; padding-right: 5px;\">\n<h3 class=\"heading\">Contact Info</h3>\n<ul>\n<li><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>\n<li><span class=\"text\">+2 392 3929 210</span></li>\n</ul>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td style=\"padding-top: 20px;\" valign=\"top\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"text-align: left; padding-left: 10px;\">\n<h3 class=\"heading\">Useful Links</h3>\n<ul>\n<li><a href=\"#\">Home</a></li>\n<li><a href=\"#\">Conference</a></li>\n<li><a href=\"#\">Events</a></li>\n<li><a href=\"#\">Blog</a></li>\n</ul>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<!-- end: tr -->\n<tr>\n<td class=\"bg_white\" style=\"text-align: center; padding-top: 20px;\">\n<p>No longer want to receive these email? You can <a style=\"color: rgba(0,0,0,.8);\" href=\"#\">Unsubscribe here</a></p>\n</td>\n</tr>\n</tbody>\n</table>\n</div>\n</center>\n</body>\n</html>', '2021-01-05 05:52:36', '2021-01-05 06:14:35'),
(2, 12, '6', 'forgot', 'forgot password subject', '<!DOCTYPE html>\n<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">\n<head>\n    <meta charset=\"utf-8\"> <!-- utf-8 works for most cases -->\n    <meta name=\"viewport\" content=\"width=device-width\"> <!-- Forcing initial-scale shouldn\'t be necessary -->\n    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> <!-- Use the latest (edge) version of IE rendering engine -->\n    <meta name=\"x-apple-disable-message-reformatting\">  <!-- Disable auto-scale in iOS 10 Mail entirely -->\n    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->\n\n    <link href=\"https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700\" rel=\"stylesheet\">\n\n    <!-- CSS Reset : BEGIN -->\n    <style>\n\n        /* What it does: Remove spaces around the email design added by some email clients. */\n        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */\n        html,\nbody {\n    margin: 0 auto !important;\n    padding: 0 !important;\n    height: 100% !important;\n    width: 100% !important;\n    background: #f1f1f1;\n}\n\n/* What it does: Stops email clients resizing small text. */\n* {\n    -ms-text-size-adjust: 100%;\n    -webkit-text-size-adjust: 100%;\n}\n\n/* What it does: Centers email on Android 4.4 */\ndiv[style*=\"margin: 16px 0\"] {\n    margin: 0 !important;\n}\n\n/* What it does: Stops Outlook from adding extra spacing to tables. */\ntable,\ntd {\n    mso-table-lspace: 0pt !important;\n    mso-table-rspace: 0pt !important;\n}\n\n/* What it does: Fixes webkit padding issue. */\ntable {\n    border-spacing: 0 !important;\n    border-collapse: collapse !important;\n    table-layout: fixed !important;\n    margin: 0 auto !important;\n}\n\n/* What it does: Uses a better rendering method when resizing images in IE. */\nimg {\n    -ms-interpolation-mode:bicubic;\n}\n\n/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */\na {\n    text-decoration: none;\n}\n\n/* What it does: A work-around for email clients meddling in triggered links. */\n*[x-apple-data-detectors],  /* iOS */\n.unstyle-auto-detected-links *,\n.aBn {\n    border-bottom: 0 !important;\n    cursor: default !important;\n    color: inherit !important;\n    text-decoration: none !important;\n    font-size: inherit !important;\n    font-family: inherit !important;\n    font-weight: inherit !important;\n    line-height: inherit !important;\n}\n\n/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */\n.a6S {\n    display: none !important;\n    opacity: 0.01 !important;\n}\n\n/* What it does: Prevents Gmail from changing the text color in conversation threads. */\n.im {\n    color: inherit !important;\n}\n\n/* If the above doesn\'t work, add a .g-img class to any image in question. */\nimg.g-img + div {\n    display: none !important;\n}\n\n/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */\n/* Create one of these media queries for each additional viewport size you\'d like to fix */\n\n/* iPhone 4, 4S, 5, 5S, 5C, and 5SE */\n@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {\n    u ~ div .email-container {\n        min-width: 320px !important;\n    }\n}\n/* iPhone 6, 6S, 7, 8, and X */\n@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {\n    u ~ div .email-container {\n        min-width: 375px !important;\n    }\n}\n/* iPhone 6+, 7+, and 8+ */\n@media only screen and (min-device-width: 414px) {\n    u ~ div .email-container {\n        min-width: 414px !important;\n    }\n}\n\n    </style>\n\n    <!-- CSS Reset : END -->\n\n    <!-- Progressive Enhancements : BEGIN -->\n    <style>\n\n	    .primary{\n	background: #ff8b00;\n}\n.bg_white{\n	background: #ffffff;\n}\n.bg_light{\n	background: #fafafa;\n}\n.bg_black{\n	background: #000000;\n}\n.bg_dark{\n	background: rgba(0,0,0,.8);\n}\n.email-section{\n	padding:2.5em;\n}\n\n/*BUTTON*/\n.btn{\n	padding: 5px 20px;\n	display: inline-block;\n}\n.btn.btn-primary{\n	border-radius: 5px;\n	background: #ff8b00;\n	color: #ffffff;\n}\n.btn.btn-white{\n	border-radius: 5px;\n	background: #ffffff;\n	color: #000000;\n}\n.btn.btn-white-outline{\n	border-radius: 5px;\n	background: transparent;\n	border: 1px solid #fff;\n	color: #fff;\n}\n.btn.btn-black{\n	border-radius: 0px;\n	background: #000;\n	color: #fff;\n}\n.btn.btn-black-outline{\n	border-radius: 0px;\n	background: transparent;\n	border: 2px solid #000;\n	color: #000;\n	font-weight: 700;\n}\n.btn.btn-custom{\n	text-transform: uppercase;\n	font-weight: 600;\n	font-size: 12px;\n}\n\nh1,h2,h3,h4,h5,h6{\n	font-family: \'Work Sans\', sans-serif;\n	color: #000000;\n	margin-top: 0;\n	font-weight: 400;\n}\n\nbody{\n	font-family: \'Work Sans\', sans-serif;\n	font-weight: 400;\n	font-size: 15px;\n	line-height: 1.8;\n	color: rgba(0,0,0,.5);\n}\n\na{\n	color: #ff8b00;\n}\n\np{\n	margin-top: 0;\n}\n\ntable{\n}\n/*LOGO*/\n\n.logo h1{\n	margin: 0;\n}\n.logo h1 a{\n	color: #000000;\n	font-size: 20px;\n	font-weight: 700;\n	/*text-transform: uppercase;*/\n	font-family: \'Work Sans\', sans-serif;\n}\n\n.navigation{\n	padding: 0;\n	padding: 1em 0;\n	/*background: rgba(0,0,0,1);*/\n	border-top: 1px solid rgba(0,0,0,.05);\n	border-bottom: 1px solid rgba(0,0,0,.05);\n	margin-bottom: 0;\n}\n.navigation li{\n	list-style: none;\n	display: inline-block;;\n	margin-left: 5px;\n	margin-right: 5px;\n	font-size: 14px;\n	font-weight: 500;\n}\n.navigation li a{\n	color: rgba(0,0,0,1);\n}\n\n/*HERO*/\n.hero{\n	position: relative;\n	z-index: 0;\n}\n.hero .overlay{\n	position: absolute;\n	top: 0;\n	left: 0;\n	right: 0;\n	bottom: 0;\n	content: \'\';\n	width: 100%;\n	background: #000000;\n	z-index: -1;\n	opacity: .2;\n}\n.hero .text{\n	color: rgba(255,255,255,.9);\n	max-width: 50%;\n	margin: 0 auto 0;\n}\n.hero .text h2{\n	color: #fff;\n	font-size: 34px;\n	margin-bottom: 0;\n	font-weight: 400;\n	line-height: 1.4;\n}\n.hero .text h2 span{\n	font-weight: 600;\n	color: #ff8b00;\n}\n\n/*INTRO*/\n.intro{\n	position: relative;\n	z-index: 0;\n}\n\n.intro .text{\n	color: rgba(0,0,0,.3);\n}\n.intro .text h2{\n	color: #000;\n	font-size: 34px;\n	margin-bottom: 0;\n	font-weight: 300;\n}\n.intro .text h2 span{\n	font-weight: 600;\n	color: #ff8b00;\n}\n\n/*SERVICES*/\n.services{\n}\n.text-services{\n	padding: 10px 10px 0; \n	text-align: center;\n}\n.text-services h3{\n	font-size: 18px;\n	font-weight: 400;\n}\n\n.services-list{\n	margin: 0 0 20px 0;\n	width: 100%;\n}\n\n.services-list img{\n	float: left;\n}\n.services-list h3{\n	margin-top: 0;\n	margin-bottom: 0;\n}\n.services-list p{\n	margin: 0;\n}\n\n\n\n/*COUNTER*/\n.counter{\n	width: 100%;\n	position: relative;\n	z-index: 0;\n}\n.counter .overlay{\n	position: absolute;\n	top: 0;\n	left: 0;\n	right: 0;\n	bottom: 0;\n	content: \'\';\n	width: 100%;\n	background: #000000;\n	z-index: -1;\n	opacity: .3;\n}\n.counter-text{\n	text-align: center;\n}\n.counter-text .num{\n	display: block;\n	color: #ffffff;\n	font-size: 34px;\n	font-weight: 700;\n}\n.counter-text .name{\n	display: block;\n	color: rgba(255,255,255,.9);\n	font-size: 13px;\n}\n\n/*TOPIC*/\n.topic{\n	width: 100%;\n	display: block;\n	float: left;\n	border-bottom: 1px solid rgba(0,0,0,.1);\n	padding: 1.5em 0;\n}\n.topic .img{\n	width: 120px;\n	float: left;\n}\n.topic .text{\n	width: calc(100% - 150px);\n	padding-left: 20px;\n	float: left;\n}\n.topic .text h3{\n	font-size: 20px;\n	margin-bottom: 15px;\n	line-height: 1.2;\n}\n.topic .text .meta{\n	margin-bottom: 10px;\n}\n\n/*HEADING SECTION*/\n.heading-section{\n}\n.heading-section h2{\n	color: #000000;\n	font-size: 28px;\n	margin-top: 0;\n	line-height: 1.4;\n	font-weight: 400;\n}\n.heading-section .subheading{\n	margin-bottom: 20px !important;\n	display: inline-block;\n	font-size: 13px;\n	text-transform: uppercase;\n	letter-spacing: 2px;\n	color: rgba(0,0,0,.4);\n	position: relative;\n}\n.heading-section .subheading::after{\n	position: absolute;\n	left: 0;\n	right: 0;\n	bottom: -10px;\n	content: \'\';\n	width: 100%;\n	height: 2px;\n	background: #ff8b00;\n	margin: 0 auto;\n}\n\n.heading-section-white{\n	color: rgba(255,255,255,.8);\n}\n.heading-section-white h2{\n	font-family: \n	line-height: 1;\n	padding-bottom: 0;\n}\n.heading-section-white h2{\n	color: #ffffff;\n}\n.heading-section-white .subheading{\n	margin-bottom: 0;\n	display: inline-block;\n	font-size: 13px;\n	text-transform: uppercase;\n	letter-spacing: 2px;\n	color: rgba(255,255,255,.4);\n}\n\n\nul.social{\n	padding: 0;\n}\nul.social li{\n	display: inline-block;\n	margin-right: 10px;\n	/*border: 1px solid #ff8b00;*/\n	padding: 10px;\n	border-radius: 50%;\n	background: rgba(0,0,0,.05);\n}\n\n/*FOOTER*/\n\n.footer{\n	border-top: 1px solid rgba(0,0,0,.05);\n	color: rgba(0,0,0,.5);\n}\n.footer .heading{\n	color: #000;\n	font-size: 20px;\n}\n.footer ul{\n	margin: 0;\n	padding: 0;\n}\n.footer ul li{\n	list-style: none;\n	margin-bottom: 10px;\n}\n.footer ul li a{\n	color: rgba(0,0,0,1);\n}\n\n\n@media screen and (max-width: 500px) {\n\n\n}\n\n\n    </style>\n\n\n</head>\n\n<body width=\"100%\" style=\"margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #fafafa;\">\n<center style=\"width: 100%; background-color: #f1f1f1;\">\n<div style=\"display: none; font-size: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;\">&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;</div>\n<div class=\"email-container\" style=\"max-width: 600px; margin: 0 auto;\"><!-- BEGIN BODY -->\n<table style=\"margin: auto;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\n<tbody>\n<tr>\n<td class=\"bg_light\" style=\"padding: .5em 2.5em 1em 2.5em;\" valign=\"top\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"logo\" style=\"text-align: center;\">\n<h1>Forgot Password</h1>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<!-- end tr -->\n<tr>\n<td class=\"hero bg_white\" style=\"background-image: url(\'/estore/store/emails/images/bg_1.jpg\'); background-size: cover; height: 400px;\" valign=\"middle\">\n<div class=\"overlay\">&nbsp;</div>\n<table>\n<tbody>\n<tr>\n<td>\n<div class=\"text\" style=\"padding: 0 4em; text-align: center;\">\n<h2>Developer Conference 2019</h2>\n<p>December 15 to 20 2018</p>\n<p><a class=\"btn btn-primary\" href=\"#\">Join Conference</a></p>\n</div>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<!-- end tr -->\n<tr>\n<td class=\"bg_dark email-section\" style=\"text-align: center;\">\n<div class=\"heading-section heading-section-white\"><span class=\"subheading\">Welcome</span>\n<h2>About Eventos</h2>\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\n</div>\n</td>\n</tr>\n<!-- end: tr -->\n<tr>\n<td class=\"bg_light email-section\">\n<div class=\"heading-section\" style=\"text-align: center; padding: 0 30px;\">\n<h2>Our Services</h2>\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n</div>\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"services\" style=\"padding-top: 20px;\" valign=\"top\" width=\"50%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"icon\"><img style=\"width: 50px; max-width: 600px; height: auto; margin: auto; display: block;\" src=\"/estore/store/emails/images/megaphone.png\" alt=\"\" /></td>\n</tr>\n<tr>\n<td class=\"text-services\">\n<h3>Speakers</h3>\n<p>Far far away, behind the word mountains, far from the countries</p>\n<p><a class=\"btn btn-custom\" href=\"#\">Read more</a></p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td class=\"services\" style=\"padding-top: 20px;\" valign=\"top\" width=\"50%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"icon\"><img style=\"width: 50px; max-width: 600px; height: auto; margin: auto; display: block;\" src=\"/estore/store/emails/images/work.png\" alt=\"\" /></td>\n</tr>\n<tr>\n<td class=\"text-services\">\n<h3>Session</h3>\n<p>Far far away, behind the word mountains, far from the countries</p>\n<p><a class=\"btn btn-custom\" href=\"#\">Read more</a></p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<tr>\n<td class=\"services\" style=\"padding-top: 20px;\" valign=\"top\" width=\"50%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"icon\"><img style=\"width: 50px; max-width: 600px; height: auto; margin: auto; display: block;\" src=\"/estore/store/emails/images/network.png\" alt=\"\" /></td>\n</tr>\n<tr>\n<td class=\"text-services\">\n<h3>Workshops</h3>\n<p>Far far away, behind the word mountains, far from the countries</p>\n<p><a class=\"btn btn-custom\" href=\"#\">Read more</a></p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td class=\"services\" style=\"padding-top: 20px;\" valign=\"top\" width=\"50%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"icon\"><img style=\"width: 50px; max-width: 600px; height: auto; margin: auto; display: block;\" src=\"/estore/store/emails/images/ticket.png\" alt=\"\" /></td>\n</tr>\n<tr>\n<td class=\"text-services\">\n<h3>Tickets</h3>\n<p>Far far away, behind the word mountains, far from the countries</p>\n<p><a class=\"btn btn-custom\" href=\"#\">Read more</a></p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<!-- end: tr -->\n<tr>\n<td class=\"counter\" style=\"background-image: url(\'/estore/store/emails/images/bg_1.jpg\'); background-size: cover; background-position: center center; padding: 4em 0;\" valign=\"middle\">\n<div class=\"overlay\">&nbsp;</div>\n<table>\n<tbody>\n<tr>\n<td valign=\"middle\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"counter-text\"><span class=\"num\">1000</span> <span class=\"name\">Speakers</span></td>\n</tr>\n</tbody>\n</table>\n</td>\n<td valign=\"middle\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"counter-text\"><span class=\"num\">5200</span> <span class=\"name\">Workshops</span></td>\n</tr>\n</tbody>\n</table>\n</td>\n<td valign=\"middle\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"counter-text\"><span class=\"num\">4000</span> <span class=\"name\">Tickets</span></td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<!-- end tr -->\n<tr>\n<td class=\"bg_white email-section\">\n<div class=\"heading-section\" style=\"text-align: center; padding: 0 30px;\">\n<h2>Schedules</h2>\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n</div>\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"10\">\n<tbody>\n<tr>\n<td style=\"width: 100%;\" valign=\"top\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td valign=\"top\" width=\"100%\">\n<div class=\"topic\">\n<div class=\"img\"><img style=\"width: 100%; max-width: 600px; height: auto; margin: auto; margin-bottom: 20px; display: block;\" src=\"/estore/store/emails/images/person_1.jpg\" alt=\"\" /></div>\n<div class=\"text\">\n<p class=\"meta\">09:00 am - 12:00 am</p>\n<h3>Best Practices For Programming WordPress</h3>\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n</div>\n</div>\n<div class=\"topic\">\n<div class=\"img\"><img style=\"width: 100%; max-width: 600px; height: auto; margin: auto; margin-bottom: 20px; display: block;\" src=\"/estore/store/emails/images/person_2.jpg\" alt=\"\" /></div>\n<div class=\"text\">\n<p class=\"meta\">09:00 am - 12:00 am</p>\n<h3>Best Practices For Programming WordPress</h3>\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n</div>\n</div>\n<div class=\"topic\">\n<div class=\"img\"><img style=\"width: 100%; max-width: 600px; height: auto; margin: auto; margin-bottom: 20px; display: block;\" src=\"/estore/store/emails/images/person_3.jpg\" alt=\"\" /></div>\n<div class=\"text\">\n<p class=\"meta\">09:00 am - 12:00 am</p>\n<h3>Best Practices For Programming WordPress</h3>\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n</div>\n</div>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<!-- end: tr --></tbody>\n</table>\n</td>\n</tr>\n<!-- end: tr -->\n<tr>\n<td class=\"bg_light email-section\">\n<div class=\"heading-section\" style=\"text-align: center; padding: 0 30px;\">\n<h2>Speakers</h2>\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n</div>\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"10\">\n<tbody>\n<tr>\n<td style=\"padding-top: 20px;\" valign=\"top\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td><img style=\"width: 80px; max-width: 600px; height: auto; margin: auto; margin-bottom: 20px; display: block; border-radius: 50%;\" src=\"/estore/store/emails/images/person_1.jpg\" alt=\"\" /></td>\n</tr>\n<tr>\n<td class=\"text-testimony\" style=\"text-align: center;\"><span class=\"position\">Pastor</span>\n<h3 class=\"name\">Ronald Tuff</h3>\n<p>Far far away, behind the word mountains</p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td style=\"padding-top: 20px;\" valign=\"top\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td><img style=\"width: 80px; max-width: 600px; height: auto; margin: auto; margin-bottom: 20px; display: block; border-radius: 50%;\" src=\"/estore/store/emails/images/person_2.jpg\" alt=\"\" /></td>\n</tr>\n<tr>\n<td class=\"text-testimony\" style=\"text-align: center;\"><span class=\"position\">Pastor</span>\n<h3 class=\"name\">Willam Clarson</h3>\n<p>Far far away, behind the word mountains</p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td style=\"padding-top: 20px;\" valign=\"top\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td><img style=\"width: 80px; max-width: 600px; height: auto; margin: auto; margin-bottom: 20px; display: block; border-radius: 50%;\" src=\"/estore/store/emails/images/person_3.jpg\" alt=\"\" /></td>\n</tr>\n<tr>\n<td class=\"text-testimony\" style=\"text-align: center;\"><span class=\"position\">Pastor</span>\n<h3 class=\"name\">Willam Clarson</h3>\n<p>Far far away, behind the word mountains</p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<!-- end: tr -->\n<tr>\n<td class=\"bg_white email-section\" style=\"width: 100%;\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td valign=\"middle\" width=\"50%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"text-services\" style=\"text-align: left; padding-right: 25px;\">\n<div class=\"services-list\">\n<div class=\"text\">\n<h3>Orchard Hotel</h3>\n<p>123, Green Garden Street, Texas, USA</p>\n</div>\n</div>\n<div class=\"services-list\">\n<div class=\"text\">\n<h3>Orchard Gymnasium</h3>\n<p>123, Green Garden Street, Texas, USA</p>\n</div>\n</div>\n<div class=\"services-list\">\n<div class=\"text\">\n<h3>Garden Hotel</h3>\n<p>123, Green Garden Street, Texas, USA</p>\n</div>\n</div>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td valign=\"middle\" width=\"50%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td><img style=\"width: 100%; max-width: 600px; height: auto; margin: auto; display: block;\" src=\"/estore/store/emails/images/about.jpg\" alt=\"\" /></td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<!-- end: tr --> <!-- 1 Column Text + Button : END --></tbody>\n</table>\n<table style=\"margin: auto;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\n<tbody>\n<tr>\n<td class=\"bg_light footer email-section\" valign=\"middle\">\n<table>\n<tbody>\n<tr>\n<td style=\"padding-top: 20px;\" valign=\"top\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"text-align: left; padding-right: 10px;\">\n<h3 class=\"heading\">About</h3>\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td style=\"padding-top: 20px;\" valign=\"top\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"text-align: left; padding-left: 5px; padding-right: 5px;\">\n<h3 class=\"heading\">Contact Info</h3>\n<ul>\n<li><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>\n<li><span class=\"text\">+2 392 3929 210</span></li>\n</ul>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n<td style=\"padding-top: 20px;\" valign=\"top\" width=\"33.333%\">\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td style=\"text-align: left; padding-left: 10px;\">\n<h3 class=\"heading\">Useful Links</h3>\n<ul>\n<li><a href=\"#\">Home</a></li>\n<li><a href=\"#\">Conference</a></li>\n<li><a href=\"#\">Events</a></li>\n<li><a href=\"#\">Blog</a></li>\n</ul>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n<!-- end: tr -->\n<tr>\n<td class=\"bg_white\" style=\"text-align: center; padding-top: 20px;\">\n<p>No longer want to receive these email? You can <a style=\"color: rgba(0,0,0,.8);\" href=\"#\">Unsubscribe here</a></p>\n</td>\n</tr>\n</tbody>\n</table>\n</div>\n</center>\n</body>\n</html>', '2021-01-05 06:22:36', '2021-01-05 06:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `facebooks`
--

CREATE TABLE `facebooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facebooks`
--

INSERT INTO `facebooks` (`id`, `store_id`, `client_id`, `secret`, `created_at`, `updated_at`) VALUES
(1, 6, 'test@77dfffgupyoolhlh', 'sdffdfupklhl', '2021-01-04 05:05:00', '2021-01-04 08:10:37');

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
(32, '2020_12_27_051151_add_variables_column_order_details', 26),
(33, '2020_12_28_072017_create_suppliers_table', 27),
(34, '2020_12_29_045844_create_payment_gateways_table', 28),
(35, '2020_12_30_043634_create_admins_table', 29),
(36, '2020_12_28_072020_create_suppliers_table', 30),
(37, '2020_12_30_062056_create_roles_table', 30),
(38, '2020_12_30_062111_create_permissions_table', 30),
(39, '2021_01_01_061916_create_subscriptions_table', 31),
(44, '2021_01_04_060156_add_columns_subscriptions', 33),
(45, '2021_01_04_060527_add_columns_subscriptions', 34),
(46, '2021_01_04_074240_create_facebooks_table', 35),
(47, '2021_01_04_103148_add_column_store_id', 36),
(48, '2021_01_05_050044_create_register_templates_table', 37),
(49, '2021_01_05_050321_create_forgot_password_templates_table', 37),
(50, '2021_01_05_101042_create_email_templates_table', 38),
(53, '2021_01_02_104338_create_roles_table', 39),
(54, '2021_01_02_104404_create_permissions_table', 39),
(55, '2021_01_02_104708_create_users_roles_table', 39),
(56, '2021_01_02_104733_create_roles_permissions_table', 39);

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
(42, 6, 3, '[8,9,10,11,12]', '5', 'testfirst testlast update', 'company name update', 'testupdate@gmail.com', '03013435655', '38001', 'this is address for order number 42', 'pending', '3195', '{\"order_note_times\":[\"1609046157\",\"1609148874\"],\"order_notes\":[\"this is order with new method and variation\",\"this is another note for order\"]}', '2020-12-27 00:19:01', '2020-12-28 06:17:52'),
(43, 6, 3, '[10,11,12]', '3', 'testfirst testlast', NULL, 'test78ds6@gmail.com', '03013435656', '38000', '434 is not a valid error', 'pending', '3045', '{\"order_note_times\":[\"1609151656\",\"1609152072\"],\"order_notes\":[\"this is order for testing purpose\",\"order update or another product addition\"]}', '2020-12-28 05:35:17', '2020-12-28 06:20:35');

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
(57, 42, 11, '', '450', '450', 'off', '1', NULL, '450', '3195', '2020-12-27 00:19:01', '2020-12-28 06:19:17'),
(58, 42, 10, '', '450', '450', 'off', '1', NULL, '450', '3195', '2020-12-27 00:19:01', '2020-12-28 06:19:18'),
(59, 42, 8, '', '45', '45', 'on', '1', '7', '45', '3195', '2020-12-27 00:19:01', '2020-12-28 06:19:18'),
(60, 42, 12, 'blue small ', '450', '450', 'on', '4', '4', '1800', '3195', '2020-12-27 00:19:01', '2020-12-28 06:19:18'),
(61, 42, 9, 'red 45 ', '450', '450', 'off', '1', NULL, '450', '3195', '2020-12-28 04:20:41', '2020-12-28 06:19:18'),
(62, 43, 12, 'white small ', '450', '449', 'on', '5', '7', '2245', '3045', '2020-12-28 05:35:17', '2020-12-28 06:20:35'),
(63, 43, 11, '', '450', '450', 'off', '1', NULL, '450', '3045', '2020-12-28 05:42:14', '2020-12-28 06:20:35'),
(64, 43, 10, '', '350', '350', 'off', '1', NULL, '350', '3045', '2020-12-28 05:45:22', '2020-12-28 06:20:35');

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
(2, 'new', 120.00, 'monthly', 'active', 'this is description of new', '2020-12-18 07:42:13', '2021-01-01 00:56:09'),
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
-- Table structure for table `payment_gateways`
--

CREATE TABLE `payment_gateways` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `publish_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_gateways`
--

INSERT INTO `payment_gateways` (`id`, `publish_key`, `secret_key`, `payment_mode`, `created_at`, `updated_at`) VALUES
(2, 'pk_test_Twn1cxgodcysquauLFCp1lK200khN14Y66', 'sk_test_pLaFT1NXQcjF7dlac6r5OhuX00HC2qOui3', 'sandbox', NULL, '2021-01-01 02:19:33'),
(4, 'pk_sCTJQIpTMVyCuiaADdMH', 'sk_hsNceuv2mWI5kQt2E97f', 'sandbox', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `permission_name`, `permission_for`, `created_at`, `updated_at`) VALUES
(1, 'Add-User', 'UserController', NULL, NULL),
(2, 'Edit-User', 'UserController', NULL, NULL),
(3, 'Update-User', 'UserController', NULL, NULL),
(4, 'Delete-User', 'UserController', NULL, NULL),
(5, 'Add-Client', 'ClientController', NULL, NULL),
(6, 'Edit-Client', 'ClientController', NULL, NULL),
(7, 'Update-Client', 'ClientController', NULL, NULL),
(8, 'Delete-Client', 'ClientController', NULL, NULL),
(9, 'Add-Payment', 'PaymentController', NULL, NULL),
(10, 'Edit-Payment', 'PaymentController', NULL, NULL),
(11, 'Update-Payment', 'PaymentController', NULL, NULL),
(12, 'Delete-Payment', 'PaymentController', NULL, NULL),
(13, 'Add-Package', 'PackageController', NULL, NULL),
(14, 'Edit-Package', 'PackageController', NULL, NULL),
(15, 'Update-Package', 'PackageController', NULL, NULL),
(16, 'Delete-Package', 'PackageController', NULL, NULL),
(17, 'Add-User', 'UserController', NULL, NULL),
(18, 'Edit-User', 'UserController', NULL, NULL),
(19, 'Update-User', 'UserController', NULL, NULL),
(20, 'Delete-User', 'UserController', NULL, NULL),
(21, 'Add-Client', 'ClientController', NULL, NULL),
(22, 'Edit-Client', 'ClientController', NULL, NULL),
(23, 'Update-Client', 'ClientController', NULL, NULL),
(24, 'Delete-Client', 'ClientController', NULL, NULL),
(25, 'Add-Payment', 'PaymentController', NULL, NULL),
(26, 'Edit-Payment', 'PaymentController', NULL, NULL),
(27, 'Update-Payment', 'PaymentController', NULL, NULL),
(28, 'Delete-Payment', 'PaymentController', NULL, NULL),
(29, 'Add-Package', 'PackageController', NULL, NULL),
(30, 'Edit-Package', 'PackageController', NULL, NULL),
(31, 'Update-Package', 'PackageController', NULL, NULL),
(32, 'Delete-Package', 'PackageController', NULL, NULL);

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
(8, 6, 10, 6, 'ewd-product', 45.00, '1608719586.png', 'this is description', '3', '76', 'stock in', '3', '0.5 kg', '432', NULL, NULL, 0, 'active', '2020-12-23 05:33:06', '2020-12-29 07:05:06'),
(9, 6, 10, 6, 'ewd-product2', 250.00, '1608719586.png', 'this is description', '3', '75', 'stock in', '3', '0.5 kg', '432', NULL, NULL, 1, 'active', '2020-12-23 05:33:06', '2020-12-28 06:46:45'),
(10, 6, 10, 6, 'ewd-product3', 350.00, '1608719586.png', 'this is description', '3', '72', 'stock in', '3', '0.5 kg', '432', NULL, NULL, 0, 'active', '2020-12-23 05:33:06', '2020-12-28 06:46:45'),
(11, 6, 10, 6, 'ewd-product4', 450.00, '1608719586.png', 'this is description', '3', '66', 'stock in', '3', '0.5 kg', '432', NULL, NULL, 0, 'active', '2020-12-23 05:33:06', '2020-12-28 05:42:14'),
(12, 6, 10, 6, 'ewd-product5', 550.00, '1608719586.png', 'this is description', '3', '75', 'stock in', '3', '0.5 kg', '432', NULL, NULL, 1, 'active', '2020-12-23 05:33:06', '2020-12-28 05:40:05'),
(13, 6, 10, 6, 'test', 666.00, '1609236141.png', 'sdfdsf', '3', '5', 'stock in', '3', '1kg', '5coupon', NULL, NULL, 1, 'active', '2020-12-29 05:02:21', '2020-12-29 07:46:49');

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
(74, 9, 'color', 'black,pink,red', 'black,pink,red', '2020-12-28 04:26:08', '2020-12-28 04:26:08'),
(75, 9, 'size', '43,44,45', '43,44,45', '2020-12-28 04:26:08', '2020-12-28 04:26:08'),
(93, 8, 'color', 'cae,test', 'cae,test', '2020-12-29 07:04:50', '2020-12-29 07:04:50'),
(102, 13, 'color', 'WHITE,pink', 'WHITE,pink', '2020-12-29 07:49:50', '2020-12-29 07:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', '2021-01-05 07:00:12', '2021-01-05 07:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles_permissions`
--

INSERT INTO `roles_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1);

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
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `subscription_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription_end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `client_id`, `store_id`, `package_id`, `subscription_date`, `subscription_end_date`, `subscription_id`, `status`, `created_at`, `updated_at`) VALUES
(16, 5, 6, 2, '1609757550', '1612435950', 'sub_IhFAiiaC2eAbFs', 'cancel', '2021-01-04 05:52:48', '2021-01-04 06:36:23'),
(17, 5, 6, 4, '1609762360', '1610367160', 'sub_IhGSwBVUuTpQoh', 'cancel', '2021-01-04 07:12:57', '2021-01-04 08:08:23'),
(18, 5, 6, 4, '1609765790', '1610370590', 'sub_IhHN12vBxWyqRb', 'active', '2021-01-04 08:10:07', '2021-01-04 08:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, 'superadmin', 'super', 'admin', 'superadmin@gmail.com', NULL, NULL, '$2y$10$0lKoEvoV1AgSX8u4pwxkfOm2K8diyCb9QhRnh5vEW2E76yOpVFUJu', 'oTJvr2hH3gplK8ZygkeDNQPWyWFzXju5gCwFmHzqsTmAUGvKFh7IsbTSCVTD', 'active', '2020-12-15 07:13:13', '2020-12-30 07:00:43'),
(12, 'owner', 'Muhammad', 'Waseem', 'waseem@ewdtech.com', '03013435656', NULL, '$2y$10$cFr35ch6CFP9hLKMP.AwDOPOodDkWC4qCw60zNyHx2jERFyHWjDoi', NULL, 'active', '2020-12-22 02:01:55', '2020-12-30 06:59:29'),
(13, 'admin', 'testfirst', 'testlast', 'test@gmail.com', '03013435656', NULL, '$2y$10$pwC/b.Xw1dAw6soxmcAYIumpqbiQZspVHx7lki3xi0tzW8U.2GsiS', NULL, 'active', '2020-12-22 04:35:07', '2020-12-22 04:35:07'),
(16, 'admin', 'testfirst', 'testlast', 'test-first-client@gmail.com', '03013435656', NULL, '$2y$10$lu/xF/3PE9su8ubiMgmpV.7pjhUzHxw5NTYKW7JGKdtVFq7tjX9Ey', NULL, 'active', '2020-12-22 04:35:59', '2020-12-22 04:35:59'),
(18, 'owner', 'testfirst', 'testlast', 'waseem2@ewdtech.com', '03013435656', NULL, '$2y$10$6heRdoM6ZU8TGqa1FY0jgeDU91561XzhWAYpiJTEQaUSp4Hf3nfi2', NULL, 'active', '2020-12-22 04:36:56', '2020-12-22 04:38:04'),
(19, 'customer', 'ewd-test', 'ewd-last', 'customer@gmail.com', '03013435656', NULL, '$2y$10$CX5gL1OLN4YsrNFYcIerCuXKNOoigLzWIZOlzaWurav6kx3huKAJy', NULL, 'active', '2020-12-22 06:28:58', '2020-12-24 06:27:05'),
(20, 'customer', 'the-first', 'the-last', 'the-customer@gmail.com', '03011122334', NULL, '$2y$10$HZzODqwJ1p993951JpqHUe/mFW5N10pHI9FIJb52gCOOGrdP9h5JO', NULL, 'active', '2020-12-22 06:38:03', '2020-12-22 06:38:03'),
(21, 'customer', 'ewd2-first', 'ewd2-last', 'ewd2-customer@gmail.com', '03013435656', NULL, '$2y$10$VVJWc2z2NScjketA1lWi5OyEvTMpW.IesVqI28St4Na88FJ1sCXjG', NULL, 'active', '2020-12-22 06:43:25', '2020-12-22 06:43:25'),
(22, 'customer', 'ewd-customer', 'ewd-customer', 'ewd-customer-5@gmail.com', '03051449423', NULL, '$2y$10$dNpnVu/d5kIGGLQDZxx8zOU3O.Ovzv2hZvj.LBkG3bUoXEG/KladW', NULL, 'active', '2020-12-22 06:51:24', '2020-12-24 06:23:12'),
(23, 'customer', 'the', 'thelast', 'the@gmail.com', '03051449423', NULL, '$2y$10$Hgo5AhNlR./6L9H0RAdeLOGPpGd9tpdYoqSEhHe5f9y9xUiBoNf8K', NULL, 'active', '2020-12-23 01:58:54', '2020-12-23 01:58:54'),
(25, 'superadmin', 'rnbQF1PO42', 'Zdzdoj97aC', 'newsuperadmin@gmail.com', NULL, NULL, '$2y$10$0lKoEvoV1AgSX8u4pwxkfOm2K8diyCb9QhRnh5vEW2E76yOpVFUJu', NULL, 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_user_id_foreign` (`user_id`);

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
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_templates_user_id_foreign` (`user_id`);

--
-- Indexes for table `facebooks`
--
ALTER TABLE `facebooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facebooks_store_id_foreign` (`store_id`);

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
-- Indexes for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD KEY `roles_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `roles_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stores_user_id_foreign` (`user_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriptions_clients_id_foreign` (`client_id`),
  ADD KEY `subscriptions_packages_id_foreign` (`package_id`),
  ADD KEY `subscriptions_store_id_foreign` (`store_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suppliers_store_id_foreign` (`store_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD KEY `users_roles_user_id_foreign` (`user_id`),
  ADD KEY `users_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facebooks`
--
ALTER TABLE `facebooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD CONSTRAINT `email_templates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `facebooks`
--
ALTER TABLE `facebooks`
  ADD CONSTRAINT `facebooks_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD CONSTRAINT `roles_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_clients_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subscriptions_packages_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subscriptions_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD CONSTRAINT `users_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
