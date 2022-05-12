-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 09:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_newshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` int(11) NOT NULL,
  `banner_status` tinyint(4) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_image`, `added_by`, `banner_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1645599135.jpg', 1, 1, NULL, '2022-02-23 06:52:15', NULL),
(2, '1645600260.jpg', 1, 1, NULL, '2022-02-23 07:11:01', NULL),
(3, '1645600288.jpg', 1, 1, NULL, '2022-02-23 07:11:28', NULL),
(4, '1645617721.jpg', 1, 1, NULL, '2022-02-23 12:02:02', NULL),
(5, '1645617761.jpg', 1, 1, NULL, '2022-02-23 12:02:42', NULL),
(6, '1645617817.jpg', 1, 1, NULL, '2022-02-23 12:03:38', NULL),
(7, '1645617852.jpg', 1, 1, NULL, '2022-02-23 12:04:13', NULL),
(8, '1645617942.jpg', 1, 1, NULL, '2022-02-23 12:05:43', NULL),
(9, '1645618514.jpg', 1, 1, NULL, '2022-02-23 12:15:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Added_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `Added_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'SPORTS', 'gdfdnmmnvmnvmcvnlkdfd', '0', 1, NULL, '2022-01-30 15:50:09', NULL),
(2, 'APPEX', 'Appex is a good Barnd', '1', 1, NULL, '2022-01-30 17:45:20', NULL),
(3, 'MALE BRAND', 'Male is ggod Person', '1', 1, NULL, '2022-01-30 17:49:09', NULL),
(4, 'FEMALE', 'Female is Beatufull girls', '1', 1, NULL, '2022-01-30 17:49:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `added_by`, `created_at`, `updated_at`) VALUES
(3, 'NEWS', 'jkcnmnxcmvnxcjvmnxcvxnmv', 1, 2, '2022-01-28 07:34:33', '2022-01-29 17:47:20'),
(7, 'SHOES', 'All Shoes', 1, 1, '2022-01-30 17:45:50', NULL),
(8, 'CATCH', 'Catch is Good.', 1, 1, '2022-01-30 17:46:38', NULL),
(9, 'SHOCKS', 'Very Good', 1, 1, '2022-01-30 17:47:05', NULL),
(10, 'T-SHIRT', 'All Other T Shirt', 1, 1, '2022-01-30 17:50:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Rabbi', 'Hasan', 'mdrabbihasan610@gmail.com', '$2y$10$.GA/cQA3w/6DX6doZHR1meCV.lNWm8kQsLpBYuko04YlwKMdr9xdG', '0147852369', 'Panchagarh', '2022-02-20 11:38:34', NULL),
(2, 'Mist Sakiya', 'Islam', 'codedesign02@gmail.com', '$2y$10$gLBv9AG2W0wZ9Uhrn3N44OmjiJ05gZ./wfnTdSby.XyAiuFU5ROX6', '01710528972', 'Gulisthan , Dhaka', '2022-02-21 19:59:35', NULL),
(3, 'Ummay', 'Salma', 'ummaysalma@gmail.com', '$2y$10$eMA1tH9B7qzaavYZH1YLW.XWFTo8ETJv1HK4H20f5fw7PldB9tRA6', '0124578963', 'Panchagarh sodor,Panchagarh\r\nwebsite', '2022-02-22 13:19:38', NULL),
(4, 'dfsdfsdf', 'dgdgdfgd', 'app@gmail.com', '$2y$10$udcGGdssC5xVuOxYMqw0MetCY.jSBpYXdqcAulzNp08rpaBWB/B.C', '46456', 'fghfchfchg', '2022-02-24 18:21:03', NULL),
(5, 'Md Motiur', 'Rahamn', 'fahadkhan.m80@gmail.com', '$2y$10$IxdW.WwvE3qUR5APYY4gNuFTSu.5.UsDh6g2TPmL3wo1Yn5LF1sZS', '74545', 'vfghvvbnv', '2022-03-14 03:59:07', NULL),
(6, 'Sabbir', 'Rahman', 'sabbir@gmail.com', '$2y$10$qXxvOuJxfyIOOAopNWnNL.n0OsOaYqODqzGwHX2VN3IYknch9pN82', '01710528972', 'Dhaka', '2022-04-06 11:14:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_28_103531_create_categories_table', 2),
(6, '2022_01_30_203503_create_brands_table', 3),
(9, '2022_01_30_235749_create_products_table', 4),
(10, '2022_02_17_011210_create_carts_table', 5),
(11, '2022_02_17_223021_create_checkouts_table', 6),
(12, '2022_02_18_150700_create_shippings_table', 7),
(13, '2022_02_18_162658_create_payments_table', 8),
(14, '2022_02_18_162838_create_order_details_table', 8),
(15, '2022_02_18_163021_create_orders_table', 8),
(16, '2022_02_23_112020_create_banners_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 2793.00, 'Pending', '2022-02-18 12:28:19', NULL),
(2, 20, 4, 587.00, 'Pending', '2022-02-18 13:34:50', NULL),
(3, 2, 5, 516.00, 'Pending', '2022-02-21 20:00:55', NULL),
(4, 3, 6, 1964.00, 'Pending', '2022-02-22 13:24:38', NULL),
(5, 4, 7, 45688.00, 'Pending', '2022-02-24 18:24:04', NULL),
(6, 5, 8, 789.00, 'Pending', '2022-03-14 04:05:18', NULL),
(7, 5, 9, 1376.00, 'Pending', '2022-03-14 04:24:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 14, 'shortcut to proportional', 587.00, 3, NULL, NULL),
(2, 1, 8, 'Constraint the current', 258.00, 4, NULL, NULL),
(3, 2, 14, 'shortcut to proportional', 587.00, 1, NULL, NULL),
(4, 3, 8, 'Constraint the current', 258.00, 2, NULL, NULL),
(5, 4, 11, 'proportional resizing you can', 854.00, 1, NULL, NULL),
(6, 4, 10, 'proportional resizing you', 555.00, 2, NULL, NULL),
(7, 5, 15, 'Laptop Flase Player', 45688.00, 1, NULL, NULL),
(8, 6, 13, 'shortcut to proportional', 789.00, 1, NULL, NULL),
(9, 7, 13, 'shortcut to proportional', 789.00, 1, NULL, NULL),
(10, 7, 14, 'shortcut to proportional', 587.00, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('app@gmail.com', '$2y$10$9GTo.2yakBk8bD/RfAKZ5eX89O64xz9yCf8LV9DQplQpmK./rIEkm', '2022-01-27 08:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cash', 'Pending', '2022-02-18 12:28:19', NULL),
(2, 2, 'Cash', 'Pending', '2022-02-18 13:34:50', NULL),
(3, 3, 'Cash', 'Pending', '2022-02-21 20:00:55', NULL),
(4, 4, 'Cash', 'Pending', '2022-02-22 13:24:39', NULL),
(5, 5, 'Cash', 'Pending', '2022-02-24 18:24:04', NULL),
(6, 6, 'Cash', 'Pending', '2022-03-14 04:05:18', NULL),
(7, 7, 'Cash', 'Pending', '2022-03-14 04:24:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` int(11) NOT NULL,
  `brand_name` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quntity` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_name`, `brand_name`, `product_name`, `product_price`, `product_quntity`, `short_description`, `long_description`, `product_image`, `publication_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 7, 3, 'rjfjfjf', 122.00, 2, 'jkbjkghkgjgfhfg', '<p>fgjfjghkghkgk</p>', '1643829095.png', 1, NULL, '2022-02-02 19:11:35', '2022-02-02 19:11:35'),
(2, 7, 3, 'LA Quick Magic Hair Dry Hat Turban Twist Hair', 488.00, 2, 'LA Quick Magic Hair Dry Hat Turban Twist Hair Towel Wrap Head Towel Quick Dry', '<h2>Product details of LA Quick Magic Hair Dry Hat Turban Twist Hair Towel Wrap Head Towel Quick Dry</h2><ul><li>Fast hair drying towel soaks up 80% more water than turbie twist - get going faster</li><li>100% superfine composite superfine fiber material with a button to secure your bath towels, your hair will not slip when you take a bath. Very easy to use.</li><li>Large enough, specially for long hair.</li><li>Using the hair dryer will do great damage to your beautiful hair. The towel will absorb moisture in your hair during this time.</li><li>It is the softest way to dry long hair.</li></ul><p><img src=\"https://static-01.daraz.com.bd/p/992536a1d5fdcea4e8c5ae9c551c.jpg\"><img src=\"https://static-01.daraz.com.bd/p/24f5b40dbd992f4ae034764d9a50df86.jpg\"></p><p><strong>Quick Magic Hair Dry Hat Turban Twist Hair Towel Wrap Head Towel Quick Dry</strong></p><p>Features:<br>Fast hair drying towel soaks up 80% more water than turbie twist - get going faster<br>100% superfine composite superfine fiber material with a button to secure your bath towels, your hair will not slip when you take a bath. Very easy to use.<br>Large enough, specially for long hair.<br>Using the hair dryer will do great damage to your beautiful hair. The towel will absorb moisture in your hair during this time.<br>It is the softest way to dry long hair.<br><br><br><br>Specifications:<br>Material: Coral fleece<br>Color: Khaki,Pink,Coffee,Beige<br>Size: 250*650MM<br><br><br>Package Included:<br>1 x Hair Towel<br>&nbsp;</p>', '1643829384.png', 1, NULL, '2022-02-02 19:16:24', '2022-02-02 19:16:24'),
(3, 9, 4, 'ytdhgcgfv', 45.00, 1, 'yrhgvhjgb', '<p>fdfhgfghhgj</p>', 'Product-image/', 1, NULL, '2022-02-02 19:47:10', '2022-02-02 19:47:10'),
(4, 7, 2, 'fcgfdhfh', 42.00, 5, 'gfjgjgjgj', '<p>fghgfhfghfgh</p>', 'Product-image/1643831595.png', 1, NULL, '2022-02-02 19:53:15', '2022-02-02 19:53:16'),
(5, 7, 2, 'Hello Product', 145.00, 1, 'Closure callback defining constraints on the resize. It\'s possible to constraint the aspect-ratio and/or a unwanted upsizing of the image. See examples below.', '<p>Closure callback defining constraints on the resize. It\'s possible to constraint the <strong>aspect-ratio</strong> and/or a unwanted <strong>upsizing</strong> of the image. See examples below.Closure callback defining constraints on the resize. It\'s possible to constraint the <strong>aspect-ratio</strong> and/or a unwanted <strong>upsizing</strong> of the image. See examples below.Closure callback defining constraints on the resize. It\'s possible to constraint the <strong>aspect-ratio</strong> and/or a unwanted <strong>upsizing</strong> of the image. See examples below.Closure callback defining constraints on the resize. It\'s possible to constraint the <strong>aspect-ratio</strong> and/or a unwanted <strong>upsizing</strong> of the image. See examples below.Closure callback defining constraints on the resize. It\'s possible to constraint the <strong>aspect-ratio</strong> and/or a unwanted <strong>upsizing</strong> of the image. See examples below.Closure callback defining constraints on the resize. It\'s possible to constraint the <strong>aspect-ratio</strong> and/or a unwanted <strong>upsizing</strong> of the image. See examples below.</p>', 'Product-image/1644162759.jpeg', 1, NULL, '2022-02-06 15:52:39', '2022-02-06 15:52:39'),
(6, 8, 2, 'Good Shoes', 4564.00, 2, 'Well', '<p>Closure callback defining constraints on the resize. It\'s possible to constraint the <strong>aspect-ratio</strong> and/or a unwanted <strong>upsizing</strong> of the image. See examples below.Closure callback defining constraints on the resize. It\'s possible to constraint the <strong>aspect-ratio</strong> and/or a unwanted <strong>upsizing</strong> of the image. See examples below.</p>', 'Product-image/1644162897.png', 1, NULL, '2022-02-06 15:54:57', '2022-02-06 15:54:57'),
(7, 7, 2, 'Sed ut perspiciatis unde', 540.00, 5, 'Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use widen() or', '<p>Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or</p>', 'Product-image/1644168635.jpg', 1, NULL, '2022-02-06 17:30:36', '2022-02-06 17:30:36'),
(8, 8, 3, 'Constraint the current', 258.00, 12, 'Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use widen() or', '<p>Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or</p>', 'Product-image/1644168757.jpg', 1, NULL, '2022-02-06 17:32:37', '2022-02-06 17:32:37'),
(9, 9, 3, 'you can use widen', 145.00, 5, 'Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use widen() or', '<p>Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or</p>', 'Product-image/1644168886.jpg', 1, NULL, '2022-02-06 17:34:46', '2022-02-06 17:34:46'),
(10, 8, 2, 'proportional resizing you', 555.00, 5, 'Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use widen() or', '<p>Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or</p>', 'Product-image/1644168940.jpg', 1, NULL, '2022-02-06 17:35:41', '2022-02-06 17:35:41'),
(11, 8, 3, 'proportional resizing you can', 854.00, 7, 'Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use widen() or', '<p>Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or</p>', 'Product-image/1644168981.jpg', 1, NULL, '2022-02-06 17:36:21', '2022-02-06 17:36:21'),
(12, 9, 3, 'proportional resizing you', 1454.00, 4, 'Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use widen() or', '<p>Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or</p>', 'Product-image/1644169135.jpg', 1, NULL, '2022-02-06 17:38:55', '2022-02-06 17:38:55'),
(13, 10, 4, 'shortcut to proportional', 789.00, 4, 'Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use widen() or', '<p>Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or</p>', 'Product-image/1644169179.jpg', 1, NULL, '2022-02-06 17:39:40', '2022-02-06 17:39:40'),
(14, 7, 3, 'shortcut to proportional', 587.00, 4, 'Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use widen() or', '<p>Constraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> orConstraint the current aspect-ratio of the image. As a shortcut to proportional resizing you can use <a href=\"https://image.intervention.io/v2/api/widen\">widen()</a> or</p>', 'Product-image/1644169276.jpg', 1, NULL, '2022-02-06 17:41:16', '2022-02-06 17:41:16'),
(15, 7, 3, 'Laptop Flase Player', 45688.00, 5, 'jkdhvxjkvbxjvn', '<p>zvdxvxbfcbdf</p>', 'Product-image/1644674743.jpg', 1, NULL, '2022-02-12 14:05:46', '2022-02-12 14:05:46');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `full_name`, `email`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(3, 'Mizan Rahman', 'muhipkhan147@gmail.com', '01710528972', 'Dinajpur, Bangladesh', NULL, NULL),
(4, 'Farak Islam', 'faruk72559@gmail.com', '0174645121215', 'Thakurgaon', NULL, NULL),
(5, 'Most Lima Akter', 'lima@gmail.com', '017104879', 'Panchagarh', NULL, NULL),
(6, 'Rana Islam', 'ranasalma@gmail.com', '01257896741', 'Panchagarh sodor,Panchagarh\r\nwebsite', NULL, NULL),
(7, 'idsresetdrtdrtdrt', 'app@gmail.com', '46456', 'fghfchfchg', NULL, NULL),
(8, 'Md Motiur Rahamn', 'fahadkhan.m80@gmail.com', '74545', 'vfghvvbnv', NULL, NULL),
(9, 'Md Motiur Rahamn', 'fahadkhan.m80@gmail.com', '74545', 'vfghvvbnv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hasan', 'hasan610@gmail.com', NULL, '$2y$10$b9UM9pr5Lr39qAiwcGjQ1OIH0ykobJE5Vfn98SlWd1gDwfIOXlH4y', NULL, '2022-01-23 12:27:29', '2022-01-23 12:27:29'),
(2, 'app', 'app@gmail.com', NULL, '$2y$10$Qe1ByYXMXiG538roa5LbU.AJ185E68PzHx.mltVsaVLsEKBifcMMq', NULL, '2022-01-27 01:41:54', '2022-01-27 01:41:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
