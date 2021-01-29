-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2021 at 08:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommence`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(2, NULL, 1, 'Category 2', 'category-2', '2021-01-09 03:04:02', '2021-01-09 03:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Products', 'products', '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(2, 'Laptops', 'laptops', '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(3, 'Desktops', 'desktops', '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(4, 'Mobile Phones', 'mobile-phones', '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(5, 'Tablets', 'tablets', '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(6, 'TVs', 'tvs', '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(7, 'Digital Cameras', 'digital-cameras', '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(8, 'Appliances', 'appliances', '2021-01-09 03:02:50', '2021-01-09 03:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 7, 2, NULL, NULL),
(8, 8, 2, NULL, NULL),
(9, 9, 2, NULL, NULL),
(10, 10, 2, NULL, NULL),
(11, 11, 2, NULL, NULL),
(12, 12, 2, NULL, NULL),
(13, 13, 2, NULL, NULL),
(14, 14, 2, NULL, NULL),
(15, 15, 2, NULL, NULL),
(16, 16, 2, NULL, NULL),
(17, 17, 2, NULL, NULL),
(18, 18, 2, NULL, NULL),
(19, 19, 2, NULL, NULL),
(20, 20, 2, NULL, NULL),
(21, 21, 2, NULL, NULL),
(22, 22, 2, NULL, NULL),
(23, 23, 2, NULL, NULL),
(24, 24, 2, NULL, NULL),
(25, 25, 2, NULL, NULL),
(26, 26, 2, NULL, NULL),
(27, 27, 2, NULL, NULL),
(28, 28, 2, NULL, NULL),
(29, 29, 2, NULL, NULL),
(30, 30, 2, NULL, NULL),
(31, 31, 2, NULL, NULL),
(32, 32, 2, NULL, NULL),
(33, 33, 2, NULL, NULL),
(34, 34, 2, NULL, NULL),
(35, 35, 2, NULL, NULL),
(36, 36, 2, NULL, NULL),
(37, 37, 3, NULL, NULL),
(38, 38, 3, NULL, NULL),
(39, 39, 3, NULL, NULL),
(40, 40, 3, NULL, NULL),
(41, 41, 3, NULL, NULL),
(42, 42, 3, NULL, NULL),
(43, 43, 3, NULL, NULL),
(44, 44, 3, NULL, NULL),
(45, 45, 3, NULL, NULL),
(46, 46, 4, NULL, NULL),
(47, 47, 4, NULL, NULL),
(48, 48, 4, NULL, NULL),
(49, 49, 4, NULL, NULL),
(50, 50, 4, NULL, NULL),
(51, 51, 4, NULL, NULL),
(52, 52, 4, NULL, NULL),
(53, 53, 4, NULL, NULL),
(54, 54, 4, NULL, NULL),
(55, 55, 5, NULL, NULL),
(56, 56, 5, NULL, NULL),
(57, 57, 5, NULL, NULL),
(58, 58, 5, NULL, NULL),
(59, 59, 5, NULL, NULL),
(60, 60, 5, NULL, NULL),
(61, 61, 5, NULL, NULL),
(62, 62, 5, NULL, NULL),
(63, 63, 5, NULL, NULL),
(64, 64, 6, NULL, NULL),
(65, 65, 6, NULL, NULL),
(66, 66, 6, NULL, NULL),
(67, 67, 6, NULL, NULL),
(68, 68, 6, NULL, NULL),
(69, 69, 6, NULL, NULL),
(70, 70, 6, NULL, NULL),
(71, 71, 6, NULL, NULL),
(72, 72, 6, NULL, NULL),
(73, 73, 7, NULL, NULL),
(74, 74, 7, NULL, NULL),
(75, 75, 7, NULL, NULL),
(76, 76, 7, NULL, NULL),
(77, 77, 7, NULL, NULL),
(78, 78, 7, NULL, NULL),
(79, 79, 7, NULL, NULL),
(80, 80, 7, NULL, NULL),
(81, 81, 7, NULL, NULL),
(82, 82, 8, NULL, NULL),
(83, 83, 8, NULL, NULL),
(84, 84, 8, NULL, NULL),
(85, 85, 8, NULL, NULL),
(86, 86, 8, NULL, NULL),
(87, 87, 8, NULL, NULL),
(88, 88, 8, NULL, NULL),
(89, 89, 8, NULL, NULL),
(90, 90, 8, NULL, NULL),
(91, 71, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percent_off` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `value`, `percent_off`, `type`, `created_at`, `updated_at`) VALUES
(1, 'ABCDEFG', '30', NULL, 'fixed', '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(2, '123456', NULL, '30', 'percent', '2021-01-09 03:02:51', '2021-01-09 03:02:51');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 8, 'user_id', 'text', 'User Id', 0, 0, 1, 1, 0, 1, '{}', 2),
(58, 8, 'billing_email', 'text', 'Billing Email', 0, 1, 1, 1, 0, 1, '{}', 3),
(59, 8, 'billing_name', 'text', 'Billing Name', 0, 1, 1, 1, 0, 1, '{}', 4),
(60, 8, 'billing_address', 'text', 'Billing Address', 0, 1, 1, 1, 0, 1, '{}', 5),
(61, 8, 'billing_city', 'text', 'Billing City', 0, 1, 1, 1, 0, 1, '{}', 6),
(62, 8, 'billing_province', 'text', 'Billing Province', 0, 0, 1, 1, 0, 1, '{}', 7),
(63, 8, 'billing_postalcode', 'text', 'Billing Postalcode', 0, 0, 1, 1, 0, 1, '{}', 8),
(64, 8, 'billing_phone', 'number', 'Billing Phone', 0, 1, 1, 1, 0, 1, '{}', 9),
(65, 8, 'billing_name_on_card', 'text', 'Billing Name On Card', 0, 1, 1, 1, 0, 1, '{}', 10),
(66, 8, 'billing_discount', 'text', 'Billing Discount', 1, 1, 1, 1, 0, 1, '{}', 11),
(67, 8, 'billing_discount_code', 'text', 'Billing Discount Code', 0, 1, 1, 1, 0, 1, '{}', 12),
(68, 8, 'billing_subtotal', 'text', 'Billing Subtotal', 1, 0, 1, 1, 0, 1, '{}', 13),
(69, 8, 'billing_tax', 'number', 'Billing Tax', 1, 0, 1, 1, 0, 1, '{}', 14),
(70, 8, 'billing_total', 'number', 'Billing Total', 1, 1, 1, 1, 0, 1, '{}', 15),
(71, 8, 'payment_gateway', 'text', 'Payment Gateway', 1, 0, 1, 1, 0, 1, '{}', 16),
(72, 8, 'shipped', 'checkbox', 'Shipped', 1, 1, 1, 1, 0, 1, '{\"on\":\"Yes\",\"off\":\"No\",\"checked\":false}', 17),
(73, 8, 'error', 'text', 'Error', 0, 1, 1, 1, 0, 1, '{}', 18),
(74, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 19),
(75, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 20),
(76, 9, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(77, 9, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(78, 9, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{}', 3),
(79, 9, 'details', 'text', 'Details', 0, 1, 1, 1, 1, 1, '{}', 4),
(80, 9, 'price', 'number', 'Price', 1, 1, 1, 1, 1, 1, '{}', 5),
(81, 9, 'description', 'rich_text_box', 'Description', 1, 1, 1, 1, 1, 1, '{}', 6),
(82, 9, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 7),
(83, 9, 'images', 'multiple_images', 'Images', 0, 1, 1, 1, 1, 1, '{}', 8),
(84, 9, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{\"on\":\"Yes\",\"off\":\"No\",\"checked\":false}', 9),
(85, 9, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 10),
(86, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(87, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(88, 10, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(89, 10, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{}', 3),
(90, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(91, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(92, 9, 'product_belongstomany_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Category\",\"table\":\"categories\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"category_product\",\"pivot\":\"1\",\"taggable\":null}', 12);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(8, 'orders', 'orders', 'Order', 'Orders', 'voyager-documentation', 'App\\Models\\Order', NULL, '\\App\\Http\\Controllers\\Voyager\\OrdersController', NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-01-09 03:16:14', '2021-01-09 03:18:06'),
(9, 'products', 'products', 'Product', 'Products', 'voyager-shop', 'App\\Models\\Product', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-01-12 05:25:25', '2021-01-12 05:25:25'),
(10, 'category', 'category', 'Category', 'Categories', 'voyager-categories', 'App\\Models\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-01-12 05:26:29', '2021-01-12 05:26:29');

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-01-09 03:03:56', '2021-01-09 03:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2021-01-09 03:03:56', '2021-01-09 03:03:56', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 8, '2021-01-09 03:03:56', '2021-01-29 10:49:57', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 5, '2021-01-09 03:03:56', '2021-01-29 11:34:28', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 6, '2021-01-09 03:03:56', '2021-01-29 10:50:00', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 12, '2021-01-09 03:03:56', '2021-01-29 10:49:55', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2021-01-09 03:03:56', '2021-01-22 06:16:13', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, NULL, 7, '2021-01-09 03:03:56', '2021-01-29 10:49:57', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2021-01-09 03:03:56', '2021-01-22 06:16:33', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2021-01-09 03:03:56', '2021-01-22 06:16:33', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 13, '2021-01-09 03:03:56', '2021-01-29 10:49:55', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 11, '2021-01-09 03:04:02', '2021-01-29 10:49:57', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 9, '2021-01-09 03:04:02', '2021-01-29 10:49:57', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 10, '2021-01-09 03:04:02', '2021-01-29 10:49:57', 'voyager.pages.index', NULL),
(14, 1, 'Orders', '', '_self', 'voyager-documentation', NULL, NULL, 2, '2021-01-09 03:16:14', '2021-01-22 06:16:24', 'voyager.orders.index', NULL),
(15, 1, 'Products', '', '_self', 'voyager-shop', NULL, NULL, 3, '2021-01-12 05:25:25', '2021-01-22 06:16:45', 'voyager.products.index', NULL),
(16, 1, 'Categories', '', '_self', 'voyager-categories', NULL, 5, 2, '2021-01-12 05:26:29', '2021-01-22 06:16:33', 'voyager.category.index', NULL),
(17, 1, 'Best Selling Products', '', '_self', 'voyager-credit-cards', '#f5ed0a', NULL, 4, '2021-01-29 10:49:48', '2021-01-29 11:34:28', 'products.best-selling', 'null');

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
(35, '2014_10_12_000000_create_users_table', 1),
(36, '2014_10_12_100000_create_password_resets_table', 1),
(37, '2016_01_01_000000_add_voyager_user_fields', 1),
(38, '2016_01_01_000000_create_data_types_table', 1),
(39, '2016_01_01_000000_create_pages_table', 1),
(40, '2016_01_01_000000_create_posts_table', 1),
(41, '2016_02_15_204651_create_categories_table', 1),
(42, '2016_05_19_173453_create_menu_table', 1),
(43, '2016_10_21_190000_create_roles_table', 1),
(44, '2016_10_21_190000_create_settings_table', 1),
(45, '2016_11_30_135954_create_permission_table', 1),
(46, '2016_11_30_141208_create_permission_role_table', 1),
(47, '2016_12_26_201236_data_types__add__server_side', 1),
(48, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(49, '2017_01_14_005015_create_translations_table', 1),
(50, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(51, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(52, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(53, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(54, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(55, '2017_08_05_000000_add_group_to_settings_table', 1),
(56, '2017_11_26_013050_add_user_role_relationship', 1),
(57, '2017_11_26_015000_create_user_roles_table', 1),
(58, '2018_03_11_000000_add_user_settings', 1),
(59, '2018_03_14_000000_add_details_to_data_types_table', 1),
(60, '2018_03_16_000000_make_settings_value_nullable', 1),
(61, '2019_08_19_000000_create_failed_jobs_table', 1),
(62, '2020_12_29_135523_create_products_table', 1),
(63, '2021_01_01_203310_create_category_table', 1),
(64, '2021_01_01_210708_create_category_product_table', 1),
(65, '2021_01_03_101340_create_coupons_table', 1),
(66, '2021_01_05_125733_add_images_to_products_table', 1),
(67, '2021_01_08_110705_create_orders_table', 1),
(68, '2021_01_08_111322_create_order_product_table', 1),
(69, '2021_01_22_123955_ad_quantity_to_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `billing_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_postalcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_name_on_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_discount` int(11) NOT NULL DEFAULT 0,
  `billing_discount_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_subtotal` int(11) NOT NULL,
  `billing_tax` int(11) NOT NULL,
  `billing_total` int(11) NOT NULL,
  `payment_gateway` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'stripe',
  `shipped` tinyint(1) NOT NULL DEFAULT 0,
  `error` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `billing_email`, `billing_name`, `billing_address`, `billing_city`, `billing_province`, `billing_postalcode`, `billing_phone`, `billing_name_on_card`, `billing_discount`, `billing_discount_code`, `billing_subtotal`, `billing_tax`, `billing_total`, `payment_gateway`, `shipped`, `error`, `created_at`, `updated_at`) VALUES
(1, 11, 'admin@gmail.com', 'hein', 'momo', 'ZDF', 'teste', 'testing', '098772832', 'dafsdassdfg', 0, NULL, 3050, 153, 3203, 'stripe', 1, NULL, '2021-01-09 03:20:23', '2021-01-09 03:21:38'),
(2, 11, 'admin@gmail.com', 'Hein Htet Soe', 'htet', 'dsafas', 'testing', 'oho', '09677288624', 'DFA', 4522, '123456', 10551, 528, 11079, 'stripe', 0, NULL, '2021-01-22 09:09:06', '2021-01-22 09:09:06'),
(3, 11, 'admin@gmail.com', 'Hein-Z', 'aa', 'aa', 'aa', 'aa', '09222211212', 'dfa', 3956, '123456', 9232, 462, 9694, 'stripe', 0, NULL, '2021-01-22 09:14:32', '2021-01-22 09:14:32'),
(4, 11, 'admin@gmail.com', 'ss', 'jn', 'h', 'jhjh', 'jhjh', '09677288624', 'kjl', 0, '', 2703, 135, 2838, 'stripe', 0, NULL, '2021-01-22 09:16:34', '2021-01-22 09:16:34'),
(5, 11, 'admin@gmail.com', 'wfsda', 'dsf', 'fdsaf', 'fdsa', 'dfa', '09222211212', 'nkdfla', 0, '', 4506, 225, 4731, 'stripe', 0, NULL, '2021-01-22 09:18:32', '2021-01-22 09:18:32'),
(6, 11, 'admin@gmail.com', 'dhsjkh', '934', 'kdsj', 'kjdskl', 'djskl', '09222211212', 'jiikdfjs', 0, '', 3604, 180, 3784, 'stripe', 0, NULL, '2021-01-22 09:19:57', '2021-01-22 09:19:57'),
(7, 11, 'admin@gmail.com', 'ssa', 'dsaf', 'fdsaf', 'fdsa', 'dfa', '09222211212', 'kl', 0, '', 901, 45, 946, 'stripe', 0, NULL, '2021-01-22 09:29:04', '2021-01-22 09:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 20, 2, '2021-01-09 03:20:23', '2021-01-09 03:20:23'),
(2, 2, 74, 8, '2021-01-22 09:09:06', '2021-01-22 09:09:06'),
(3, 3, 74, 7, '2021-01-22 09:14:32', '2021-01-22 09:14:32'),
(4, 4, 71, 3, '2021-01-22 09:16:34', '2021-01-22 09:16:34'),
(5, 5, 16, 3, '2021-01-22 09:18:32', '2021-01-22 09:18:32'),
(6, 6, 71, 4, '2021-01-22 09:19:57', '2021-01-22 09:19:57'),
(7, 7, 71, 1, '2021-01-22 09:29:04', '2021-01-22 09:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 11, 'Welcome', 'Your day will be easier because of this application just manage.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'welcome', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2021-01-09 03:04:02', '2021-01-22 06:22:12');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(2, 'browse_bread', NULL, '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(3, 'browse_database', NULL, '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(4, 'browse_media', NULL, '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(5, 'browse_compass', NULL, '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(6, 'browse_menus', 'menus', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(7, 'read_menus', 'menus', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(8, 'edit_menus', 'menus', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(9, 'add_menus', 'menus', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(10, 'delete_menus', 'menus', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(11, 'browse_roles', 'roles', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(12, 'read_roles', 'roles', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(13, 'edit_roles', 'roles', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(14, 'add_roles', 'roles', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(15, 'delete_roles', 'roles', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(16, 'browse_users', 'users', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(17, 'read_users', 'users', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(18, 'edit_users', 'users', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(19, 'add_users', 'users', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(20, 'delete_users', 'users', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(21, 'browse_settings', 'settings', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(22, 'read_settings', 'settings', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(23, 'edit_settings', 'settings', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(24, 'add_settings', 'settings', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(25, 'delete_settings', 'settings', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(26, 'browse_categories', 'categories', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(27, 'read_categories', 'categories', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(28, 'edit_categories', 'categories', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(29, 'add_categories', 'categories', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(30, 'delete_categories', 'categories', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(31, 'browse_posts', 'posts', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(32, 'read_posts', 'posts', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(33, 'edit_posts', 'posts', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(34, 'add_posts', 'posts', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(35, 'delete_posts', 'posts', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(36, 'browse_pages', 'pages', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(37, 'read_pages', 'pages', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(38, 'edit_pages', 'pages', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(39, 'add_pages', 'pages', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(40, 'delete_pages', 'pages', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(41, 'browse_orders', 'orders', '2021-01-09 03:16:14', '2021-01-09 03:16:14'),
(42, 'read_orders', 'orders', '2021-01-09 03:16:14', '2021-01-09 03:16:14'),
(43, 'edit_orders', 'orders', '2021-01-09 03:16:14', '2021-01-09 03:16:14'),
(44, 'add_orders', 'orders', '2021-01-09 03:16:14', '2021-01-09 03:16:14'),
(45, 'delete_orders', 'orders', '2021-01-09 03:16:14', '2021-01-09 03:16:14'),
(46, 'browse_products', 'products', '2021-01-12 05:25:25', '2021-01-12 05:25:25'),
(47, 'read_products', 'products', '2021-01-12 05:25:25', '2021-01-12 05:25:25'),
(48, 'edit_products', 'products', '2021-01-12 05:25:25', '2021-01-12 05:25:25'),
(49, 'add_products', 'products', '2021-01-12 05:25:25', '2021-01-12 05:25:25'),
(50, 'delete_products', 'products', '2021-01-12 05:25:25', '2021-01-12 05:25:25'),
(51, 'browse_category', 'category', '2021-01-12 05:26:29', '2021-01-12 05:26:29'),
(52, 'read_category', 'category', '2021-01-12 05:26:29', '2021-01-12 05:26:29'),
(53, 'edit_category', 'category', '2021-01-12 05:26:29', '2021-01-12 05:26:29'),
(54, 'add_category', 'category', '2021-01-12 05:26:29', '2021-01-12 05:26:29'),
(55, 'delete_category', 'category', '2021-01-12 05:26:29', '2021-01-12 05:26:29');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(3, 1),
(3, 3),
(4, 1),
(4, 3),
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
(16, 3),
(17, 1),
(17, 3),
(18, 1),
(18, 3),
(19, 1),
(19, 3),
(20, 1),
(20, 3),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(26, 3),
(27, 1),
(27, 3),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(35, 3),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(41, 3),
(42, 1),
(42, 3),
(43, 1),
(43, 3),
(44, 1),
(44, 3),
(45, 1),
(45, 3),
(46, 1),
(46, 3),
(47, 1),
(47, 3),
(48, 1),
(48, 3),
(49, 1),
(49, 3),
(50, 1),
(50, 3),
(51, 1),
(51, 3),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(54, 3),
(55, 1),
(55, 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-01-09 03:04:02', '2021-01-09 03:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 10,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `details`, `price`, `description`, `image`, `images`, `featured`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'Product 1', 'product-1', 'Full Frame DSLR, with 18-55mm kit lens.', 2363.00, 'Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/product-1.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(2, 'Product 2', 'product-2', 'Full Frame DSLR, with 18-55mm kit lens.', 1124.00, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/product-2.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(3, 'Product 3', 'product-3', 'Full Frame DSLR, with 18-55mm kit lens.', 1963.00, 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/product-3.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(4, 'Product 4', 'product-4', 'Full Frame DSLR, with 18-55mm kit lens.', 1633.00, 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/product-4.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(5, 'Product 5', 'product-5', 'Full Frame DSLR, with 18-55mm kit lens.', 1408.00, 'Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/product-5.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(6, 'Product 6', 'product-6', 'Full Frame DSLR, with 18-55mm kit lens.', 888.00, 'Lorem 6 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/product-6.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(7, 'Laptop 1', 'laptop-1', '13 inch, 2 TB SSD, 32GB RAM', 1533.00, 'Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-1.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(8, 'Laptop 2', 'laptop-2', '15 inch, 2 TB SSD, 32GB RAM', 2347.00, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-2.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(9, 'Laptop 3', 'laptop-3', '13 inch, 2 TB SSD, 32GB RAM', 1524.00, 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-3.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(10, 'Laptop 4', 'laptop-4', '15 inch, 1 TB SSD, 32GB RAM', 1925.00, 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-4.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(11, 'Laptop 5', 'laptop-5', '13 inch, 2 TB SSD, 32GB RAM', 1652.00, 'Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-5.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(12, 'Laptop 6', 'laptop-6', '15 inch, 2 TB SSD, 32GB RAM', 2007.00, 'Lorem 6 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-6.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(13, 'Laptop 7', 'laptop-7', '13 inch, 2 TB SSD, 32GB RAM', 1980.00, 'Lorem 7 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-7.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(14, 'Laptop 8', 'laptop-8', '15 inch, 3 TB SSD, 32GB RAM', 1699.00, 'Lorem 8 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-8.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(15, 'Laptop 9', 'laptop-9', '13 inch, 1 TB SSD, 32GB RAM', 1638.00, 'Lorem 9 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-9.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(16, 'Laptop 10', 'laptop-10', '14 inch, 1 TB SSD, 32GB RAM', 1502.00, 'Lorem 10 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-10.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(17, 'Laptop 11', 'laptop-11', '14 inch, 1 TB SSD, 32GB RAM', 1577.00, 'Lorem 11 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-11.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(18, 'Laptop 12', 'laptop-12', '15 inch, 2 TB SSD, 32GB RAM', 2112.00, 'Lorem 12 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-12.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(19, 'Laptop 13', 'laptop-13', '13 inch, 2 TB SSD, 32GB RAM', 1910.00, 'Lorem 13 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-13.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(20, 'Laptop 14', 'laptop-14', '14 inch, 2 TB SSD, 32GB RAM', 1525.00, 'Lorem 14 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-14.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(21, 'Laptop 15', 'laptop-15', '14 inch, 2 TB SSD, 32GB RAM', 2435.00, 'Lorem 15 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-15.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(22, 'Laptop 16', 'laptop-16', '13 inch, 2 TB SSD, 32GB RAM', 1781.00, 'Lorem 16 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-16.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(23, 'Laptop 17', 'laptop-17', '13 inch, 3 TB SSD, 32GB RAM', 2346.00, 'Lorem 17 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-17.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(24, 'Laptop 18', 'laptop-18', '14 inch, 2 TB SSD, 32GB RAM', 1922.00, 'Lorem 18 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-18.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(25, 'Laptop 19', 'laptop-19', '13 inch, 1 TB SSD, 32GB RAM', 1977.00, 'Lorem 19 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-19.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(26, 'Laptop 20', 'laptop-20', '15 inch, 2 TB SSD, 32GB RAM', 2255.00, 'Lorem 20 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-20.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(27, 'Laptop 21', 'laptop-21', '13 inch, 1 TB SSD, 32GB RAM', 1647.00, 'Lorem 21 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-21.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(28, 'Laptop 22', 'laptop-22', '13 inch, 2 TB SSD, 32GB RAM', 2216.00, 'Lorem 22 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-22.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(29, 'Laptop 23', 'laptop-23', '15 inch, 2 TB SSD, 32GB RAM', 1613.00, 'Lorem 23 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-23.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(30, 'Laptop 24', 'laptop-24', '15 inch, 3 TB SSD, 32GB RAM', 2428.00, 'Lorem 24 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-24.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(31, 'Laptop 25', 'laptop-25', '13 inch, 1 TB SSD, 32GB RAM', 1805.00, 'Lorem 25 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-25.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(32, 'Laptop 26', 'laptop-26', '13 inch, 3 TB SSD, 32GB RAM', 1992.00, 'Lorem 26 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-26.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(33, 'Laptop 27', 'laptop-27', '14 inch, 1 TB SSD, 32GB RAM', 2030.00, 'Lorem 27 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-27.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(34, 'Laptop 28', 'laptop-28', '15 inch, 1 TB SSD, 32GB RAM', 1826.00, 'Lorem 28 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-28.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(35, 'Laptop 29', 'laptop-29', '13 inch, 2 TB SSD, 32GB RAM', 2370.00, 'Lorem 29 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-29.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(36, 'Laptop 30', 'laptop-30', '13 inch, 1 TB SSD, 32GB RAM', 2340.00, 'Lorem 30 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/laptop-30.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(37, 'Desktop 1', 'desktop-1', '25 inch, 2 TB SSD, 32GB RAM', 3775.00, 'Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/desktop-1.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(38, 'Desktop 2', 'desktop-2', '27 inch, 3 TB SSD, 32GB RAM', 2623.00, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/desktop-2.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(39, 'Desktop 3', 'desktop-3', '24 inch, 1 TB SSD, 32GB RAM', 3939.00, 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/desktop-3.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(40, 'Desktop 4', 'desktop-4', '24 inch, 3 TB SSD, 32GB RAM', 4009.00, 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/desktop-4.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(41, 'Desktop 5', 'desktop-5', '25 inch, 3 TB SSD, 32GB RAM', 3246.00, 'Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/desktop-5.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(42, 'Desktop 6', 'desktop-6', '24 inch, 2 TB SSD, 32GB RAM', 2571.00, 'Lorem 6 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/desktop-6.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(43, 'Desktop 7', 'desktop-7', '27 inch, 2 TB SSD, 32GB RAM', 4150.00, 'Lorem 7 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/desktop-7.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(44, 'Desktop 8', 'desktop-8', '24 inch, 3 TB SSD, 32GB RAM', 3913.00, 'Lorem 8 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/desktop-8.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(45, 'Desktop 9', 'desktop-9', '24 inch, 3 TB SSD, 32GB RAM', 3249.00, 'Lorem 9 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/desktop-9.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(46, 'Phone 1', 'phone-1', '64GB, 5.9 inch screen, 4GHz Quad Core', 1129.00, 'Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/phone-1.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(47, 'Phone 2', 'phone-2', '32GB, 5.7 inch screen, 4GHz Quad Core', 1069.00, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/phone-2.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(48, 'Phone 3', 'phone-3', '64GB, 5.9 inch screen, 4GHz Quad Core', 1049.00, 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/phone-3.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(49, 'Phone 4', 'phone-4', '64GB, 5.9 inch screen, 4GHz Quad Core', 1140.00, 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/phone-4.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(50, 'Phone 5', 'phone-5', '16GB, 5.7 inch screen, 4GHz Quad Core', 842.00, 'Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/phone-5.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(51, 'Phone 6', 'phone-6', '16GB, 5.8 inch screen, 4GHz Quad Core', 1276.00, 'Lorem 6 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/phone-6.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(52, 'Phone 7', 'phone-7', '32GB, 5.8 inch screen, 4GHz Quad Core', 1072.00, 'Lorem 7 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/phone-7.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(53, 'Phone 8', 'phone-8', '64GB, 5.9 inch screen, 4GHz Quad Core', 1065.00, 'Lorem 8 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/phone-8.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(54, 'Phone 9', 'phone-9', '64GB, 5.8 inch screen, 4GHz Quad Core', 996.00, 'Lorem 9 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/phone-9.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(55, 'Tablet 1', 'tablet-1', '64GB, 5.12 inch screen, 4GHz Quad Core', 1274.00, 'Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tablet-1.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(56, 'Tablet 2', 'tablet-2', '64GB, 5.11 inch screen, 4GHz Quad Core', 1086.00, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tablet-2.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(57, 'Tablet 3', 'tablet-3', '32GB, 5.12 inch screen, 4GHz Quad Core', 1052.00, 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tablet-3.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(58, 'Tablet 4', 'tablet-4', '16GB, 5.10 inch screen, 4GHz Quad Core', 1196.00, 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tablet-4.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(59, 'Tablet 5', 'tablet-5', '16GB, 5.12 inch screen, 4GHz Quad Core', 1392.00, 'Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tablet-5.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(60, 'Tablet 6', 'tablet-6', '32GB, 5.11 inch screen, 4GHz Quad Core', 1421.00, 'Lorem 6 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tablet-6.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(61, 'Tablet 7', 'tablet-7', '32GB, 5.10 inch screen, 4GHz Quad Core', 788.00, 'Lorem 7 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tablet-7.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(62, 'Tablet 8', 'tablet-8', '32GB, 5.10 inch screen, 4GHz Quad Core', 1021.00, 'Lorem 8 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tablet-8.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(63, 'Tablet 9', 'tablet-9', '64GB, 5.12 inch screen, 4GHz Quad Core', 834.00, 'Lorem 9 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tablet-9.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(64, 'TV 1', 'tv-1', '60 inch screen, Smart TV, 4K', 840.00, 'Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tv-1.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(65, 'TV 2', 'tv-2', '46 inch screen, Smart TV, 4K', 1226.00, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tv-2.jpg', NULL, 0, 0, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(66, 'TV 3', 'tv-3', '46 inch screen, Smart TV, 4K', 1309.00, 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tv-3.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(67, 'TV 4', 'tv-4', '60 inch screen, Smart TV, 4K', 1257.00, 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tv-4.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(68, 'TV 5', 'tv-5', '60 inch screen, Smart TV, 4K', 1499.00, 'Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tv-5.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(69, 'TV 6', 'tv-6', '50 inch screen, Smart TV, 4K', 946.00, 'Lorem 6 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tv-6.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(70, 'TV 7', 'tv-7', '50 inch screen, Smart TV, 4K', 1198.00, 'Lorem 7 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tv-7.jpg', NULL, 0, 10, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(71, 'TV 8', 'tv-8', '46 inch screen, Smart TV, 4K', 901.00, '<p>Lorem 8 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!</p>', 'products/tv-8.jpg', '[\"products\\/January2021\\/5rmID7LUiLLPKWTUDHpt.png\",\"products\\/January2021\\/G3OOP0AcGEpH0acMHBLb.jpg\",\"products\\/January2021\\/WyKKK2cxZPk2POCvSSnL.jpg\",\"products\\/January2021\\/bMpRvuOr2ba3bPu72msy.jpg\",\"products\\/January2021\\/IK0DN63sYj7GmsEhCYUR.jpg\"]', 1, 5, '2021-01-09 03:02:51', '2021-01-22 09:29:04'),
(72, 'TV 9', 'tv-9', '50 inch screen, Smart TV, 4K', 1482.00, 'Lorem 9 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/tv-9.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(73, 'Camera 1', 'camera-1', 'Full Frame DSLR, with 18-55mm kit lens.', 1169.00, 'Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/camera-1.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(74, 'Camera 2', 'camera-2', 'Full Frame DSLR, with 18-55mm kit lens.', 1884.00, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/camera-2.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(75, 'Camera 3', 'camera-3', 'Full Frame DSLR, with 18-55mm kit lens.', 1222.00, 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/camera-3.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(76, 'Camera 4', 'camera-4', 'Full Frame DSLR, with 18-55mm kit lens.', 1707.00, 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/camera-4.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(77, 'Camera 5', 'camera-5', 'Full Frame DSLR, with 18-55mm kit lens.', 868.00, 'Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/camera-5.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(78, 'Camera 6', 'camera-6', 'Full Frame DSLR, with 18-55mm kit lens.', 954.00, 'Lorem 6 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/camera-6.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(79, 'Camera 7', 'camera-7', 'Full Frame DSLR, with 18-55mm kit lens.', 2395.00, 'Lorem 7 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/camera-7.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(80, 'Camera 8', 'camera-8', 'Full Frame DSLR, with 18-55mm kit lens.', 1310.00, 'Lorem 8 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/camera-8.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(81, 'Camera 9', 'camera-9', 'Full Frame DSLR, with 18-55mm kit lens.', 1728.00, 'Lorem 9 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/camera-9.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(82, 'Appliance 1', 'appliance-1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 1476.00, 'Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/appliance-1.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(83, 'Appliance 2', 'appliance-2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 1301.00, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/appliance-2.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(84, 'Appliance 3', 'appliance-3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 1294.00, 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/appliance-3.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(85, 'Appliance 4', 'appliance-4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 1292.00, 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/appliance-4.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(86, 'Appliance 5', 'appliance-5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 1448.00, 'Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/appliance-5.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(87, 'Appliance 6', 'appliance-6', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 1396.00, 'Lorem 6 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/appliance-6.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(88, 'Appliance 7', 'appliance-7', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 987.00, 'Lorem 7 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/appliance-7.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(89, 'Appliance 8', 'appliance-8', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 1347.00, 'Lorem 8 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/appliance-8.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51'),
(90, 'Appliance 9', 'appliance-9', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 857.00, 'Lorem 9 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'products/appliance-9.jpg', NULL, 0, 10, '2021-01-09 03:02:51', '2021-01-09 03:02:51');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(2, 'user', 'Normal User', '2021-01-09 03:03:56', '2021-01-09 03:03:56'),
(3, 'manager', 'Manager', '2021-01-22 06:20:02', '2021-01-22 06:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(11, 'site.stock_threshold', 'Stock Threshold', '5', NULL, 'text', 6, 'Site');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2021-01-09 03:04:02', '2021-01-09 03:04:02'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2021-01-09 03:04:02', '2021-01-09 03:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Elody Leannon', 'ernser.kathlyn@example.org', 'users/default.png', '2021-01-09 03:02:50', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PDnj5L0Igy', NULL, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(2, NULL, 'Antwan DuBuque', 'della46@example.com', 'users/default.png', '2021-01-09 03:02:50', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZXun92aPOj', NULL, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(3, NULL, 'Alexzander Shanahan', 'klehner@example.org', 'users/default.png', '2021-01-09 03:02:50', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'z9ASigHcPG', NULL, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(4, NULL, 'Dr. Cassie Mraz', 'sschroeder@example.org', 'users/default.png', '2021-01-09 03:02:50', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fzhdg406YL', NULL, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(5, NULL, 'Tyrel Ebert', 'wmorissette@example.com', 'users/default.png', '2021-01-09 03:02:50', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'W1dlnquanf', NULL, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(6, NULL, 'Mrs. Bernadine D\'Amore V', 'fbergstrom@example.org', 'users/default.png', '2021-01-09 03:02:50', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tIKVCDAIFq', NULL, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(7, NULL, 'Mona Monahan DDS', 'cdubuque@example.net', 'users/default.png', '2021-01-09 03:02:50', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cgoQ6ZaL1p', NULL, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(8, NULL, 'Rosanna O\'Connell', 'sherwood78@example.org', 'users/default.png', '2021-01-09 03:02:50', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'twpUUktYdY', NULL, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(9, NULL, 'Georgiana Brekke', 'lisette22@example.com', 'users/default.png', '2021-01-09 03:02:50', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'W9Ni6ivjZj', NULL, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(10, NULL, 'Alexandrea Cronin IV', 'morissette.justus@example.com', 'users/default.png', '2021-01-09 03:02:50', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9E7sBY92AH', NULL, '2021-01-09 03:02:50', '2021-01-09 03:02:50'),
(11, 1, 'Hein Z', 'admin@gmail.com', 'users/default.png', NULL, '$2y$10$4wyNaGrVO2saJmuYOvkd2OpqqczReEkJRhYrwxlPm0Ii7g3JyRPdG', NULL, NULL, '2021-01-09 03:04:29', '2021-01-09 03:04:29'),
(12, 2, 'hein', 'hein@gmail.com', 'users/default.png', NULL, '$2y$10$c9a5tJkFX.NfNY3k3lchEe601xVzj7JzyYkWZvYL3WbhCd8.K/lEm', NULL, NULL, '2021-01-11 08:21:34', '2021-01-11 08:21:34'),
(13, 3, 'Manager', 'manager@gmail.com', 'users/January2021/rTpP98A1E7oyiMMU7rjM.png', NULL, '$2y$10$1om.YOFFBaALXjchBsOJ7uDyXr24RHJoAyA9KsUpsRFUawqaG51.q', NULL, '{\"locale\":\"en\"}', '2021-01-22 06:25:00', '2021-01-22 06:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(13, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name_unique` (`name`),
  ADD UNIQUE KEY `category_slug_unique` (`slug`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`),
  ADD KEY `category_product_category_id_foreign` (`category_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

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
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_order_id_foreign` (`order_id`),
  ADD KEY `order_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD UNIQUE KEY `products_image_unique` (`image`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
