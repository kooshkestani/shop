-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 09:26 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `addressline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` int(11) NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `addressline`, `city`, `state`, `zip`, `country`, `phone`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'ازادی جنب مترو شریف پ5', 'تهران', 'تهران', 1567898875, 'ایران', '178545689', '2018-12-18 20:30:00', '2018-12-20 05:35:31', 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `slug`, `created_at`, `updated_at`, `category_id`) VALUES
(11, NULL, 'لپ تاپ', 'laptops', '2018-12-01 17:28:17', '2018-12-01 17:28:17', NULL),
(12, NULL, 'کامپیوتر رومیزی', 'desktops', '2018-12-01 17:28:17', '2018-12-01 17:28:17', NULL),
(13, NULL, 'تلفن همراه', 'mobile-phones', '2018-12-01 17:28:17', '2018-12-01 17:28:17', NULL),
(14, NULL, 'تبلت', 'tablets', '2018-12-01 17:28:17', '2018-12-01 17:28:17', NULL),
(15, NULL, 'تلویزیون', 'tvs', '2018-12-01 17:28:17', '2018-12-01 17:28:17', NULL),
(16, NULL, 'دوربین عکاسی', 'digital-cameras', '2018-12-01 17:28:17', '2018-12-01 17:28:17', NULL),
(17, NULL, 'لوازم خانگی', 'appliances', '2018-12-01 17:28:17', '2018-12-01 17:28:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(116, 439, 11, NULL, NULL),
(117, 440, 11, NULL, NULL),
(118, 441, 11, NULL, NULL),
(119, 442, 11, NULL, NULL),
(120, 443, 11, NULL, NULL),
(121, 444, 11, NULL, NULL),
(122, 445, 11, NULL, NULL),
(123, 446, 11, NULL, NULL),
(124, 447, 11, NULL, NULL),
(125, 448, 11, NULL, NULL),
(126, 449, 11, NULL, NULL),
(127, 450, 11, NULL, NULL),
(128, 451, 11, NULL, NULL),
(129, 452, 11, NULL, NULL),
(130, 453, 11, NULL, NULL),
(131, 454, 11, NULL, NULL),
(132, 455, 11, NULL, NULL),
(133, 456, 11, NULL, NULL),
(134, 457, 11, NULL, NULL),
(135, 458, 11, NULL, NULL),
(136, 459, 11, NULL, NULL),
(137, 460, 11, NULL, NULL),
(138, 461, 11, NULL, NULL),
(139, 462, 11, NULL, NULL),
(140, 463, 11, NULL, NULL),
(141, 464, 11, NULL, NULL),
(142, 465, 11, NULL, NULL),
(143, 466, 11, NULL, NULL),
(144, 467, 11, NULL, NULL),
(145, 468, 11, NULL, NULL),
(146, 469, 12, NULL, NULL),
(147, 470, 12, NULL, NULL),
(148, 471, 12, NULL, NULL),
(149, 472, 12, NULL, NULL),
(150, 473, 12, NULL, NULL),
(151, 474, 12, NULL, NULL),
(152, 475, 12, NULL, NULL),
(153, 476, 12, NULL, NULL),
(154, 477, 12, NULL, NULL),
(155, 478, 13, NULL, NULL),
(156, 479, 13, NULL, NULL),
(157, 480, 13, NULL, NULL),
(158, 481, 13, NULL, NULL),
(159, 482, 13, NULL, NULL),
(160, 483, 13, NULL, NULL),
(161, 484, 13, NULL, NULL),
(162, 485, 13, NULL, NULL),
(163, 486, 13, NULL, NULL),
(164, 487, 14, NULL, NULL),
(165, 488, 14, NULL, NULL),
(166, 489, 14, NULL, NULL),
(167, 490, 14, NULL, NULL),
(168, 491, 14, NULL, NULL),
(169, 492, 14, NULL, NULL),
(170, 493, 14, NULL, NULL),
(171, 494, 14, NULL, NULL),
(172, 495, 14, NULL, NULL),
(173, 496, 15, NULL, NULL),
(174, 497, 15, NULL, NULL),
(175, 498, 15, NULL, NULL),
(176, 499, 15, NULL, NULL),
(177, 500, 15, NULL, NULL),
(178, 501, 15, NULL, NULL),
(179, 502, 15, NULL, NULL),
(180, 503, 15, NULL, NULL),
(181, 504, 15, NULL, NULL),
(182, 505, 16, NULL, NULL),
(183, 506, 16, NULL, NULL),
(184, 507, 16, NULL, NULL),
(185, 508, 16, NULL, NULL),
(186, 509, 16, NULL, NULL),
(187, 510, 16, NULL, NULL),
(188, 511, 16, NULL, NULL),
(189, 512, 16, NULL, NULL),
(190, 513, 16, NULL, NULL),
(191, 514, 17, NULL, NULL),
(192, 515, 17, NULL, NULL),
(193, 516, 17, NULL, NULL),
(194, 517, 17, NULL, NULL),
(195, 518, 17, NULL, NULL),
(196, 519, 17, NULL, NULL),
(197, 520, 17, NULL, NULL),
(198, 521, 17, NULL, NULL),
(199, 522, 17, NULL, NULL),
(201, 523, 16, '2018-11-30 20:30:00', '2018-12-23 20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `status_comment` tinyint(1) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `user_id`, `status_comment`, `body`, `created_at`, `updated_at`) VALUES
(1, 522, 3, 1, 'محصول جالبی بود خریدش رو پیشنهاد میکنم', '2018-12-18 03:43:17', '2018-12-18 03:43:17'),
(2, 522, 4, 0, 'اصلا محصول جالبی نبود', '2018-12-23 20:30:00', '0000-00-00 00:00:00'),
(3, 522, 3, 0, 'آقا محصول خوبیه این ali چرت میگه', '2018-12-18 04:42:52', '2018-12-18 04:42:52'),
(4, 492, 3, 0, 'محصول جالبیه', '2018-12-18 10:40:00', '2018-12-18 10:40:00'),
(5, 491, 3, 0, 'فعغلاهغلبلعغاهع', '2018-12-19 01:30:33', '2018-12-19 01:30:33'),
(6, 477, 3, 0, 'تست کامنت', '2018-12-19 01:46:41', '2018-12-19 01:46:41');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 6),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 7),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 10),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 13),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 14),
(12, 1, 'settings', 'text', 'Settings', 0, 0, 0, 0, 0, 0, '{\"locale\":\"en\"}', 12),
(13, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(14, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(15, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(16, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(17, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(18, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(19, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(20, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(21, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(22, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 11),
(23, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(24, 4, 'parent_id', 'hidden', 'Parent', 0, 0, 1, 1, 1, 1, '{}', 2),
(25, 4, 'order', 'hidden', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(26, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 4),
(27, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(28, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 6),
(29, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(30, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(31, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '{}', 2),
(32, 5, 'category_id', 'text', 'Category', 0, 0, 1, 1, 1, 0, '{}', 3),
(33, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4),
(34, 5, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 5),
(35, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{}', 6),
(36, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(37, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(38, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9),
(39, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 10),
(40, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(41, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 12),
(42, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(43, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, '{}', 14),
(44, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 15),
(45, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(46, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(47, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(48, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(49, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(50, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(51, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(52, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(53, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(54, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(55, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(56, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(107, 46, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(108, 46, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(109, 46, 'description', 'rich_text_box', 'Description', 1, 1, 1, 1, 1, 1, '{}', 3),
(112, 46, 'price', 'number', 'Price', 1, 1, 1, 1, 1, 1, '{}', 6),
(113, 46, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(114, 46, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(115, 47, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(116, 47, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(117, 47, 'total', 'text', 'Total', 1, 1, 1, 1, 1, 1, '{}', 3),
(118, 47, 'delivered', 'text', 'Delivered', 1, 1, 1, 1, 1, 1, '{}', 4),
(119, 47, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(120, 47, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(121, 48, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(122, 48, 'addressline', 'text', 'Addressline', 1, 1, 1, 1, 1, 1, '{}', 2),
(123, 48, 'city', 'text', 'City', 1, 1, 1, 1, 1, 1, '{}', 3),
(124, 48, 'state', 'text', 'State', 1, 1, 1, 1, 1, 1, '{}', 4),
(125, 48, 'zip', 'text', 'Zip', 1, 1, 1, 1, 1, 1, '{}', 5),
(126, 48, 'country', 'text', 'Country', 1, 1, 1, 1, 1, 1, '{}', 6),
(127, 48, 'phone', 'text', 'Phone', 1, 1, 1, 1, 1, 1, '{}', 7),
(128, 48, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(129, 48, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(130, 48, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 10),
(131, 49, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(132, 49, 'main_image', 'text', 'Main Image', 1, 1, 1, 1, 1, 1, '{}', 2),
(133, 49, 'first_image', 'text', 'First Image', 1, 1, 1, 1, 1, 1, '{}', 3),
(134, 49, 'second_image', 'text', 'Second Image', 1, 1, 1, 1, 1, 1, '{}', 4),
(135, 49, 'third_image', 'text', 'Third Image', 1, 1, 1, 1, 1, 1, '{}', 5),
(136, 49, 'product_id', 'text', 'Product Id', 1, 1, 1, 1, 1, 1, '{}', 6),
(137, 49, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(138, 49, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(139, 4, 'category_belongstomany_product_relationship', 'relationship', 'products', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Product\",\"table\":\"products\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"category_product\",\"pivot\":\"1\",\"taggable\":\"0\"}', 8),
(142, 46, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{}', 3),
(143, 46, 'details', 'text', 'Details', 0, 1, 1, 1, 1, 1, '{}', 4),
(144, 46, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{\"on\":\"Yes\",\"off\":\"No\"}', 7),
(145, 46, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 8),
(146, 46, 'images', 'multiple_images', 'Images', 0, 1, 1, 1, 1, 1, '{}', 9),
(148, 46, 'product_belongstomany_category_relationship_1', 'relationship', 'category', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Category\",\"table\":\"category\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"category_product\",\"pivot\":\"1\",\"taggable\":\"0\"}', 10),
(149, 50, 'id', 'hidden', 'Id', 1, 1, 1, 1, 1, 0, '{}', 1),
(150, 50, 'parent_id', 'text', 'Parent Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(151, 50, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(152, 50, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{}', 4),
(153, 50, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 5),
(154, 50, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(155, 46, 'quantity', 'text', 'Quantity', 0, 1, 1, 1, 1, 1, '{}', 8),
(160, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 0, 1, 1, 1, 1, '{}', 9);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-11-18 17:12:02', '2018-12-17 04:34:44'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'App\\Models\\Category', NULL, '\\App\\Http\\Controllers\\Voyager\\CategoriesController', NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null}', '2018-11-18 17:12:03', '2018-11-25 07:17:17'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-browser', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-11-18 17:12:03', '2018-11-25 00:45:42'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(11, 'newuser', 'newuser', 'Newuser', 'Newusers', NULL, 'App\\Models\\Newuser', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-11-22 12:16:31', '2018-11-22 12:25:51'),
(32, 'sample', 'sample', 'Sample', 'Samples', NULL, 'App\\Models\\Sample', NULL, '\\App\\Http\\Controllers\\Voyager\\samplesController', NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null}', '2018-11-23 09:53:45', '2018-11-23 09:53:45'),
(36, 'test', 'test', 'Test', 'Test', NULL, 'App\\Models\\Test', NULL, '\\App\\Http\\Controllers\\Voyager\\testController', NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null}', '2018-11-24 08:28:59', '2018-11-24 08:29:50'),
(46, 'products', 'products', 'Product', 'Products', NULL, 'App\\Models\\Product', NULL, '\\App\\Http\\Controllers\\Voyager\\ProductsController', NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null}', '2018-11-25 04:22:05', '2018-12-08 16:04:30'),
(47, 'orders', 'orders', 'Order', 'Orders', NULL, 'App\\Models\\Order', NULL, '\\App\\Http\\Controllers\\Voyager\\OrdersController', NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null}', '2018-11-25 04:24:04', '2018-12-17 02:51:55'),
(48, 'addresses', 'addresses', 'Address', 'Addresses', NULL, 'App\\Models\\Address', NULL, '\\App\\Http\\Controllers\\Voyager\\AddressesController', NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null}', '2018-11-25 04:25:32', '2018-11-25 04:25:32'),
(49, 'images', 'images', 'Image', 'Images', 'voyager-images', 'App\\Models\\Image', NULL, '\\App\\Http\\Controllers\\Voyager\\ImagesController', NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null}', '2018-11-25 04:31:31', '2018-11-25 07:18:53'),
(50, 'category', 'category', 'Category', 'category', 'voyager-categories', 'App\\Models\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-12-02 09:46:15', '2018-12-02 09:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-11-18 17:12:02', '2018-11-18 17:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'داشبورد', '', '_self', 'voyager-boat', NULL, NULL, 1, '2018-11-18 17:12:02', '2018-11-18 17:12:02', 'voyager.dashboard', NULL),
(2, 1, 'رسانه', '', '_self', 'voyager-images', '#000000', NULL, 4, '2018-11-18 17:12:02', '2018-12-17 04:24:34', 'voyager.media.index', 'null'),
(3, 1, 'کاربران', '', '_self', 'voyager-person', '#000000', NULL, 3, '2018-11-18 17:12:02', '2018-12-17 04:24:11', 'voyager.users.index', 'null'),
(4, 1, 'دسترسی ها', '', '_self', 'voyager-lock', '#000000', NULL, 2, '2018-11-18 17:12:02', '2018-12-17 04:23:57', 'voyager.roles.index', 'null'),
(5, 1, 'ابزارها', '', '_self', 'voyager-tools', '#000000', NULL, 9, '2018-11-18 17:12:02', '2018-12-17 04:26:18', NULL, ''),
(6, 1, 'ساختن منو', '', '_self', 'voyager-list', '#000000', 5, 1, '2018-11-18 17:12:02', '2018-12-17 04:26:35', 'voyager.menus.index', 'null'),
(7, 1, 'پایگاه داده', '', '_self', 'voyager-data', '#000000', 5, 2, '2018-11-18 17:12:02', '2018-12-17 04:26:50', 'voyager.database.index', 'null'),
(8, 1, 'راهنما', '', '_self', 'voyager-compass', '#000000', 5, 3, '2018-11-18 17:12:02', '2018-12-17 04:27:11', 'voyager.compass.index', 'null'),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2018-11-18 17:12:02', '2018-11-25 04:43:06', 'voyager.bread.index', NULL),
(12, 1, 'نوشته ها', '', '_self', 'voyager-news', '#000000', NULL, 5, '2018-11-18 17:12:03', '2018-12-17 04:25:01', 'voyager.posts.index', 'null'),
(13, 1, 'برگه ها', '', '_self', 'voyager-file-text', '#000000', NULL, 6, '2018-11-18 17:12:03', '2018-12-17 04:25:22', 'voyager.pages.index', 'null'),
(35, 1, 'محصولات', '', '_self', 'voyager-gift', '#000000', NULL, 7, '2018-11-25 04:22:05', '2018-12-17 04:25:44', 'voyager.products.index', 'null'),
(36, 1, 'سفارشات', '', '_self', 'voyager-shop', '#000000', NULL, 10, '2018-11-25 04:24:04', '2018-12-17 04:27:33', 'voyager.orders.index', 'null'),
(37, 1, 'آدرس ها', '', '_self', 'voyager-location', '#000000', NULL, 11, '2018-11-25 04:25:33', '2018-12-17 04:27:50', 'voyager.addresses.index', 'null'),
(38, 1, 'تصاویر', '', '_self', 'voyager-images', '#000000', NULL, 12, '2018-11-25 04:31:31', '2018-12-17 04:28:06', 'voyager.images.index', 'null'),
(40, 1, 'تنظیمات', '', '_self', 'voyager-settings', '#000000', NULL, 13, '2018-12-01 06:53:34', '2018-12-17 04:28:25', 'voyager.settings.index', 'null'),
(42, 1, 'دسته بندی ها', '', '_self', 'voyager-categories', '#000000', NULL, 8, '2018-12-02 09:46:15', '2018-12-17 04:26:00', 'voyager.category.index', 'null');

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
(4, '2016_01_01_000000_add_voyager_user_fields', 1),
(5, '2016_01_01_000000_create_data_types_table', 1),
(6, '2016_05_19_173453_create_menu_table', 1),
(7, '2016_10_21_190000_create_roles_table', 1),
(8, '2016_10_21_190000_create_settings_table', 1),
(9, '2016_11_30_135954_create_permission_table', 1),
(10, '2016_11_30_141208_create_permission_role_table', 1),
(11, '2016_12_26_201236_data_types__add__server_side', 1),
(12, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(13, '2017_01_14_005015_create_translations_table', 1),
(14, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(15, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(16, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(17, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(18, '2017_08_05_000000_add_group_to_settings_table', 1),
(19, '2017_11_26_013050_add_user_role_relationship', 1),
(20, '2017_11_26_015000_create_user_roles_table', 1),
(21, '2018_03_11_000000_add_user_settings', 1),
(22, '2018_03_14_000000_add_details_to_data_types_table', 1),
(23, '2018_03_16_000000_make_settings_value_nullable', 1),
(24, '2016_01_01_000000_create_pages_table', 2),
(25, '2016_01_01_000000_create_posts_table', 2),
(26, '2016_02_15_204651_create_categories_table', 2),
(27, '2017_04_11_000000_alter_post_nullable_fields_table', 2),
(42, '2016_12_10_070553_create_products_table', 3),
(43, '2016_12_10_092649_add_price_to_products_table', 3),
(44, '2016_12_31_042343_create_addresses_table', 3),
(45, '2016_12_31_052154_add_user_id_to_address_table_new', 3),
(46, '2017_01_07_161821_create_orders_table', 3),
(47, '2017_01_07_162847_create_order_product_table', 3),
(48, '2018_11_25_070027_create_category_product', 4),
(51, '2016_12_10_070557_create_products_table', 6),
(53, '2016_12_10_070657_create_products_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 8, 5, 1, '2018-12-18 20:30:00', '2018-12-22 20:30:00'),
(2, 2, 6, 1, '2018-12-29 20:30:00', '2018-12-22 20:30:00'),
(3, 3, 9, 1, '2018-12-05 20:30:00', '2018-12-29 20:30:00'),
(4, 3, 213587, 2, '2018-12-19 01:48:48', '2019-01-06 16:48:48'),
(5, 3, 17695, 3, '2018-12-20 05:04:03', '2018-12-20 05:04:03'),
(6, 3, 17695, 4, '2018-12-20 05:04:03', '2018-12-20 05:04:03'),
(7, 3, 20935, 2, '2018-12-21 04:26:56', '2018-12-21 04:26:56'),
(26, 3, 20935, 2, '2018-12-21 05:14:26', '2018-12-21 05:14:26'),
(35, 3, 15079, 2, '2018-12-23 17:14:39', '2018-12-23 17:14:39'),
(36, 3, 14522, 2, '2018-12-23 17:18:58', '2018-12-23 17:18:58'),
(37, 3, 9693, 2, '2018-12-23 17:19:49', '2018-12-23 17:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `product_id`, `order_id`, `quantity`, `total`, `created_at`, `updated_at`) VALUES
(1, 512, 1, 5, 5.00, NULL, NULL),
(2, 512, 1, 5, 5.00, NULL, NULL),
(3, 507, 2, 6, 8.00, '2018-12-24 20:30:00', '2018-12-29 20:30:00'),
(4, 477, 4, 1, 32824.00, NULL, NULL),
(5, 439, 4, 2, 42618.00, NULL, NULL),
(6, 441, 5, 1, 16234.00, NULL, NULL),
(7, 489, 6, 5, 16234.00, NULL, NULL),
(8, 451, 7, 1, 19206.00, '2018-12-21 07:56:56', '2018-12-21 07:56:56'),
(26, 451, 25, 1, 19206.00, '2018-12-21 08:43:53', '2018-12-21 08:43:53'),
(36, 487, 35, 1, 13834.00, '2018-12-23 20:44:39', '2018-12-23 20:44:39'),
(37, 498, 36, 1, 13323.00, '2018-12-23 20:48:58', '2018-12-23 20:48:58'),
(38, 497, 37, 1, 8893.00, '2018-12-23 20:49:49', '2018-12-23 20:49:49'),
(39, 500, 4, 1, 8425.00, '2018-12-23 20:54:26', '2018-12-23 20:54:26'),
(40, 489, 4, 1, 13094.00, '2018-12-24 13:41:59', '2018-12-24 13:41:59'),
(41, 522, 4, 1, 98990.00, '2019-01-06 20:18:48', '2019-01-06 20:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2018-11-18 17:12:03', '2018-11-18 17:12:03');

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
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(2, 'browse_bread', NULL, '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(3, 'browse_database', NULL, '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(4, 'browse_media', NULL, '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(5, 'browse_compass', NULL, '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(6, 'browse_menus', 'menus', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(7, 'read_menus', 'menus', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(8, 'edit_menus', 'menus', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(9, 'add_menus', 'menus', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(10, 'delete_menus', 'menus', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(11, 'browse_roles', 'roles', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(12, 'read_roles', 'roles', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(13, 'edit_roles', 'roles', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(14, 'add_roles', 'roles', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(15, 'delete_roles', 'roles', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(16, 'browse_users', 'users', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(17, 'read_users', 'users', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(18, 'edit_users', 'users', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(19, 'add_users', 'users', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(20, 'delete_users', 'users', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(21, 'browse_settings', 'settings', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(22, 'read_settings', 'settings', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(23, 'edit_settings', 'settings', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(24, 'add_settings', 'settings', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(25, 'delete_settings', 'settings', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(26, 'browse_categories', 'categories', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(27, 'read_categories', 'categories', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(28, 'edit_categories', 'categories', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(29, 'add_categories', 'categories', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(30, 'delete_categories', 'categories', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(31, 'browse_posts', 'posts', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(32, 'read_posts', 'posts', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(33, 'edit_posts', 'posts', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(34, 'add_posts', 'posts', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(35, 'delete_posts', 'posts', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(36, 'browse_pages', 'pages', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(37, 'read_pages', 'pages', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(38, 'edit_pages', 'pages', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(39, 'add_pages', 'pages', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(40, 'delete_pages', 'pages', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(41, 'browse_hooks', NULL, '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(47, 'browse_newuser', 'newuser', '2018-11-22 12:16:31', '2018-11-22 12:16:31'),
(48, 'read_newuser', 'newuser', '2018-11-22 12:16:31', '2018-11-22 12:16:31'),
(49, 'edit_newuser', 'newuser', '2018-11-22 12:16:31', '2018-11-22 12:16:31'),
(50, 'add_newuser', 'newuser', '2018-11-22 12:16:31', '2018-11-22 12:16:31'),
(51, 'delete_newuser', 'newuser', '2018-11-22 12:16:31', '2018-11-22 12:16:31'),
(97, 'browse_sample', 'sample', '2018-11-23 09:53:45', '2018-11-23 09:53:45'),
(98, 'read_sample', 'sample', '2018-11-23 09:53:45', '2018-11-23 09:53:45'),
(99, 'edit_sample', 'sample', '2018-11-23 09:53:45', '2018-11-23 09:53:45'),
(100, 'add_sample', 'sample', '2018-11-23 09:53:45', '2018-11-23 09:53:45'),
(101, 'delete_sample', 'sample', '2018-11-23 09:53:45', '2018-11-23 09:53:45'),
(107, 'browse_test', 'test', '2018-11-24 08:28:59', '2018-11-24 08:28:59'),
(108, 'read_test', 'test', '2018-11-24 08:28:59', '2018-11-24 08:28:59'),
(109, 'edit_test', 'test', '2018-11-24 08:28:59', '2018-11-24 08:28:59'),
(110, 'add_test', 'test', '2018-11-24 08:28:59', '2018-11-24 08:28:59'),
(111, 'delete_test', 'test', '2018-11-24 08:28:59', '2018-11-24 08:28:59'),
(152, 'browse_products', 'products', '2018-11-25 04:22:05', '2018-11-25 04:22:05'),
(153, 'read_products', 'products', '2018-11-25 04:22:05', '2018-11-25 04:22:05'),
(154, 'edit_products', 'products', '2018-11-25 04:22:05', '2018-11-25 04:22:05'),
(155, 'add_products', 'products', '2018-11-25 04:22:05', '2018-11-25 04:22:05'),
(156, 'delete_products', 'products', '2018-11-25 04:22:05', '2018-11-25 04:22:05'),
(157, 'browse_orders', 'orders', '2018-11-25 04:24:04', '2018-11-25 04:24:04'),
(158, 'read_orders', 'orders', '2018-11-25 04:24:04', '2018-11-25 04:24:04'),
(159, 'edit_orders', 'orders', '2018-11-25 04:24:04', '2018-11-25 04:24:04'),
(160, 'add_orders', 'orders', '2018-11-25 04:24:04', '2018-11-25 04:24:04'),
(161, 'delete_orders', 'orders', '2018-11-25 04:24:04', '2018-11-25 04:24:04'),
(162, 'browse_addresses', 'addresses', '2018-11-25 04:25:33', '2018-11-25 04:25:33'),
(163, 'read_addresses', 'addresses', '2018-11-25 04:25:33', '2018-11-25 04:25:33'),
(164, 'edit_addresses', 'addresses', '2018-11-25 04:25:33', '2018-11-25 04:25:33'),
(165, 'add_addresses', 'addresses', '2018-11-25 04:25:33', '2018-11-25 04:25:33'),
(166, 'delete_addresses', 'addresses', '2018-11-25 04:25:33', '2018-11-25 04:25:33'),
(167, 'browse_images', 'images', '2018-11-25 04:31:31', '2018-11-25 04:31:31'),
(168, 'read_images', 'images', '2018-11-25 04:31:31', '2018-11-25 04:31:31'),
(169, 'edit_images', 'images', '2018-11-25 04:31:31', '2018-11-25 04:31:31'),
(170, 'add_images', 'images', '2018-11-25 04:31:31', '2018-11-25 04:31:31'),
(171, 'delete_images', 'images', '2018-11-25 04:31:31', '2018-11-25 04:31:31'),
(172, 'browse_category', 'category', '2018-12-02 09:46:15', '2018-12-02 09:46:15'),
(173, 'read_category', 'category', '2018-12-02 09:46:15', '2018-12-02 09:46:15'),
(174, 'edit_category', 'category', '2018-12-02 09:46:15', '2018-12-02 09:46:15'),
(175, 'add_category', 'category', '2018-12-02 09:46:15', '2018-12-02 09:46:15'),
(176, 'delete_category', 'category', '2018-12-02 09:46:15', '2018-12-02 09:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
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
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(152, 1),
(153, 1),
(154, 1),
(155, 1),
(156, 1),
(157, 1),
(158, 1),
(159, 1),
(160, 1),
(161, 1),
(162, 1),
(163, 1),
(164, 1),
(165, 1),
(166, 1),
(167, 1),
(168, 1),
(169, 1),
(170, 1),
(171, 1),
(172, 1),
(173, 1),
(174, 1),
(175, 1),
(176, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Postsdsad', '<p>This is the body of the lorem ipsum postddd</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2018-11-18 17:12:03', '2018-11-29 05:51:19'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2018-11-18 17:12:03', '2018-11-18 17:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `quantity` int(11) DEFAULT '10',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `details`, `price`, `description`, `featured`, `quantity`, `image`, `images`, `created_at`, `updated_at`) VALUES
(439, 'Laptop 1', 'laptop-1', '14 inch, 1 TB SSD, 32GB RAM', 213086, 'Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-1.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(440, 'Laptop 2', 'laptop-2', '14 inch, 1 TB SSD, 32GB RAM', 215638, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-2.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(441, 'Laptop 3', 'laptop-3', '13 inch, 2 TB SSD, 32GB RAM', 162338, 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-3.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(442, 'Laptop 4', 'laptop-4', '13 inch, 2 TB SSD, 32GB RAM', 158738, 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-4.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(443, 'Laptop 5', 'laptop-5', '14 inch, 3 TB SSD, 32GB RAM', 186644, 'Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-5.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(444, 'Laptop 6', 'laptop-6', '13 inch, 1 TB SSD, 32GB RAM', 232191, 'Lorem 6 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-6.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(445, 'Laptop 7', 'laptop-7', '14 inch, 2 TB SSD, 32GB RAM', 249764, 'Lorem 7 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-7.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(446, 'Laptop 8', 'laptop-8', '14 inch, 3 TB SSD, 32GB RAM', 168355, 'Lorem 8 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-8.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(447, 'Laptop 9', 'laptop-9', '14 inch, 2 TB SSD, 32GB RAM', 164791, 'Lorem 9 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-9.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(448, 'Laptop 10', 'laptop-10', '13 inch, 3 TB SSD, 32GB RAM', 159703, 'Lorem 10 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-10.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(449, 'Laptop 11', 'laptop-11', '14 inch, 1 TB SSD, 32GB RAM', 180311, 'Lorem 11 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-11.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(450, 'Laptop 12', 'laptop-12', '13 inch, 3 TB SSD, 32GB RAM', 243410, 'Lorem 12 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-12.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(451, 'Laptop 13', 'laptop-13', '13 inch, 1 TB SSD, 32GB RAM', 192055, 'Lorem 13 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-13.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(452, 'Laptop 14', 'laptop-14', '13 inch, 1 TB SSD, 32GB RAM', 183232, 'Lorem 14 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-14.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(453, 'Laptop 15', 'laptop-15', '13 inch, 2 TB SSD, 32GB RAM', 236653, 'Lorem 15 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-15.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(454, 'Laptop 16', 'laptop-16', '14 inch, 2 TB SSD, 32GB RAM', 174139, 'Lorem 16 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-16.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(455, 'Laptop 17', 'laptop-17', '14 inch, 1 TB SSD, 32GB RAM', 229239, 'Lorem 17 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-17.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(456, 'Laptop 18', 'laptop-18', '13 inch, 1 TB SSD, 32GB RAM', 199152, 'Lorem 18 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-18.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(457, 'Laptop 19', 'laptop-19', '14 inch, 2 TB SSD, 32GB RAM', 202999, 'Lorem 19 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-19.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(458, 'Laptop 20', 'laptop-20', '14 inch, 1 TB SSD, 32GB RAM', 189970, 'Lorem 20 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-20.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(459, 'Laptop 21', 'laptop-21', '15 inch, 3 TB SSD, 32GB RAM', 226253, 'Lorem 21 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-21.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(460, 'Laptop 22', 'laptop-22', '13 inch, 2 TB SSD, 32GB RAM', 167055, 'Lorem 22 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-22.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(461, 'Laptop 23', 'laptop-23', '14 inch, 3 TB SSD, 32GB RAM', 239882, 'Lorem 23 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-23.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(462, 'Laptop 24', 'laptop-24', '15 inch, 3 TB SSD, 32GB RAM', 162815, 'Lorem 24 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-24.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(463, 'Laptop 25', 'laptop-25', '15 inch, 2 TB SSD, 32GB RAM', 226348, 'Lorem 25 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-25.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(464, 'Laptop 26', 'laptop-26', '13 inch, 3 TB SSD, 32GB RAM', 215608, 'Lorem 26 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-26.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(465, 'Laptop 27', 'laptop-27', '14 inch, 3 TB SSD, 32GB RAM', 208836, 'Lorem 27 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-27.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(466, 'Laptop 28', 'laptop-28', '14 inch, 1 TB SSD, 32GB RAM', 176586, 'Lorem 28 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-28.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(467, 'Laptop 29', 'laptop-29', '15 inch, 1 TB SSD, 32GB RAM', 216327, 'Lorem 29 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-29.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(468, 'Laptop 30', 'laptop-30', '13 inch, 3 TB SSD, 32GB RAM', 179176, 'Lorem 30 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/laptop-30.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(469, 'Desktop 1', 'desktop-1', '27 inch, 1 TB SSD, 32GB RAM', 440525, 'Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/desktop-1.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(470, 'Desktop 2', 'desktop-2', '27 inch, 1 TB SSD, 32GB RAM', 438682, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/desktop-2.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(471, 'Desktop 3', 'desktop-3', '24 inch, 2 TB SSD, 32GB RAM', 334054, 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/desktop-3.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(472, 'Desktop 4', 'desktop-4', '25 inch, 3 TB SSD, 32GB RAM', 335405, 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/desktop-4.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(473, 'Desktop 5', 'desktop-5', '24 inch, 3 TB SSD, 32GB RAM', 303921, 'Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/desktop-5.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(474, 'Desktop 6', 'desktop-6', '25 inch, 3 TB SSD, 32GB RAM', 449618, 'Lorem 6 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/desktop-6.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(475, 'Desktop 7', 'desktop-7', '27 inch, 1 TB SSD, 32GB RAM', 302862, 'Lorem 7 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/desktop-7.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(476, 'Desktop 8', 'desktop-8', '25 inch, 1 TB SSD, 32GB RAM', 420212, 'Lorem 8 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/desktop-8.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(477, 'Desktop 9', 'desktop-9', '24 inch, 3 TB SSD, 32GB RAM', 328236, 'Lorem 9 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/desktop-9.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(478, 'Phone 1', 'phone-1', '32GB, 5.7 inch screen, 4GHz Quad Core', 148026, 'Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/phone-1.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(479, 'Phone 2', 'phone-2', '32GB, 5.9 inch screen, 4GHz Quad Core', 142427, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/phone-2.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(480, 'Phone 3', 'phone-3', '16GB, 5.8 inch screen, 4GHz Quad Core', 124404, 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/phone-3.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(481, 'Phone 4', 'phone-4', '64GB, 5.9 inch screen, 4GHz Quad Core', 101102, 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/phone-4.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(482, 'Phone 5', 'phone-5', '64GB, 5.7 inch screen, 4GHz Quad Core', 83294, 'Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/phone-5.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(483, 'Phone 6', 'phone-6', '16GB, 5.8 inch screen, 4GHz Quad Core', 114657, 'Lorem 6 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/phone-6.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(484, 'Phone 7', 'phone-7', '16GB, 5.9 inch screen, 4GHz Quad Core', 93729, 'Lorem 7 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/phone-7.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(485, 'Phone 8', 'phone-8', '64GB, 5.7 inch screen, 4GHz Quad Core', 109077, 'Lorem 8 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/phone-8.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(486, 'Phone 9', 'phone-9', '16GB, 5.7 inch screen, 4GHz Quad Core', 133992, 'Lorem 9 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/phone-9.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(487, 'Tablet 1', 'tablet-1', '64GB, 5.11 inch screen, 4GHz Quad Core', 138343, 'Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tablet-1.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(488, 'Tablet 2', 'tablet-2', '32GB, 5.12 inch screen, 4GHz Quad Core', 1500, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tablet-2.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(489, 'Tablet 3', 'tablet-3', '32GB, 5.10 inch screen, 4GHz Quad Core', 130935, 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tablet-3.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(490, 'Tablet 4', 'tablet-4', '32GB, 5.10 inch screen, 4GHz Quad Core', 116621, 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tablet-4.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(491, 'Tablet 5', 'tablet-5', '32GB, 5.11 inch screen, 4GHz Quad Core', 135341, 'Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tablet-5.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(492, 'Tablet 6', 'tablet-6', '16GB, 5.11 inch screen, 4GHz Quad Core', 118025, 'Lorem 6 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tablet-6.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(493, 'Tablet 7', 'tablet-7', '64GB, 5.12 inch screen, 4GHz Quad Core', 94458, 'Lorem 7 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tablet-7.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(494, 'Tablet 8', 'tablet-8', '32GB, 5.10 inch screen, 4GHz Quad Core', 83565, 'Lorem 8 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tablet-8.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(495, 'Tablet 9', 'tablet-9', '64GB, 5.10 inch screen, 4GHz Quad Core', 130953, 'Lorem 9 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tablet-9.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(496, 'TV 1', 'tv-1', '46 inch screen, Smart TV, 4K', 147091, 'Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tv-1.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(497, 'TV 2', 'tv-2', '50 inch screen, Smart TV, 4K', 88927, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tv-2.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(498, 'TV 3', 'tv-3', '60 inch screen, Smart TV, 4K', 133228, 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tv-3.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(499, 'TV 4', 'tv-4', '46 inch screen, Smart TV, 4K', 111737, 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tv-4.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(500, 'TV 5', 'tv-5', '50 inch screen, Smart TV, 4K', 84250, 'Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tv-5.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(501, 'TV 6', 'tv-6', '50 inch screen, Smart TV, 4K', 85090, 'Lorem 6 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tv-6.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(502, 'TV 7', 'tv-7', '60 inch screen, Smart TV, 4K', 115682, 'Lorem 7 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tv-7.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(503, 'TV 8', 'tv-8', '46 inch screen, Smart TV, 4K', 140132, 'Lorem 8 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tv-8.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(504, 'TV 9', 'tv-9', '60 inch screen, Smart TV, 4K', 136302, 'Lorem 9 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/tv-9.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(505, 'Camera 1', 'camera-1', 'Full Frame DSLR, with 18-55mm kit lens.', 153540, 'Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/camera-1.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(506, 'Camera 2', 'camera-2', 'Full Frame DSLR, with 18-55mm kit lens.', 179837, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/camera-2.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(507, 'Camera 3', 'camera-3', 'Full Frame DSLR, with 18-55mm kit lens.', 217069, 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/camera-3.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(508, 'Camera 4', 'camera-4', 'Full Frame DSLR, with 18-55mm kit lens.', 127123, 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/camera-4.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(509, 'Camera 5', 'camera-5', 'Full Frame DSLR, with 18-55mm kit lens.', 81519, 'Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/camera-5.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(510, 'Camera 6', 'camera-6', 'Full Frame DSLR, with 18-55mm kit lens.', 205794, 'Lorem 6 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/camera-6.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(511, 'Camera 7', 'camera-7', 'Full Frame DSLR, with 18-55mm kit lens.', 97619, 'Lorem 7 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/camera-7.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(512, 'Camera 8', 'camera-8', 'Full Frame DSLR, with 18-55mm kit lens.', 146533, 'Lorem 8 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/camera-8.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(513, 'Camera 9', 'camera-9', 'Full Frame DSLR, with 18-55mm kit lens.', 133066, 'Lorem 9 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/camera-9.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(514, 'Appliance 1', 'appliance-1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 98359, 'Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 4, 'products/dummy/appliance-1.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(515, 'Appliance 2', 'appliance-2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 88467, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/appliance-2.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(516, 'Appliance 3', 'appliance-3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 124149, 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/appliance-3.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(517, 'Appliance 4', 'appliance-4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 102124, 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/appliance-4.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(518, 'Appliance 5', 'appliance-5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 141622, 'Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/appliance-5.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(519, 'Appliance 6', 'appliance-6', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 89413, 'Lorem 6 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/appliance-6.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(520, 'Appliance 7', 'appliance-7', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 119343, 'Lorem 7 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/appliance-7.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(521, 'Appliance 8', 'appliance-8', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 106122, 'Lorem 8 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/appliance-8.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49'),
(522, 'Appliance 9', 'appliance-9', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!', 989899, '<p><strong>Lorem</strong> 9 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!</p>', 0, 10, 'products/dummy/appliance-9.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:00', '2018-12-02 09:31:19'),
(523, 'Camera 22', 'camera-22', 'Full Frame DSLR, with 18-55mm kit lens.', 146533, 'Lorem 8 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 0, 10, 'products/dummy/camera-8.jpg', '[\"products\\/dummy\\/laptop-2.jpg\",\"products\\/dummy\\/laptop-3.jpg\",\"products\\/dummy\\/laptop-4.jpg\"]', '2018-12-01 18:26:49', '2018-12-01 18:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2018-11-18 17:12:02', '2018-11-18 17:12:02'),
(2, 'user', 'Normal User', '2018-11-18 17:12:02', '2018-11-18 17:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'فروشگاه اینترنتی دیجی کالا', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'جدیدترین محصولات دیجیتال', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings\\December2018\\TfOxVW5wQsA0QfoIU5Mf.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'دیجی کالا', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'بررسی انتخاب و خرید آنلاین', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(11, 'site.stock_Threshold', 'stock Threshold', '5', NULL, 'text', 6, 'Site');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2018-11-18 17:12:03', '2018-11-18 17:12:03'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2018-11-18 17:12:03', '2018-11-18 17:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users\\November2018\\vMw0TOiHah6PLSKZwulS.jpg', NULL, '$2y$10$B61SfE3TWmLcpir1RmKkd.zdpH0NsB2Rg0z.K/1qxudjKcK2r6B/C', 'zmAJEEQYIb5mErb4Ws2jAD5Tkve0Y5JKYIiC8bQbiTsxIPG0gue2xTUi5Epl', '{\"locale\":\"en\"}', '2018-11-18 17:12:03', '2018-11-19 03:25:23'),
(3, 1, 'mosako', 'gsmmsk3@gmail.com', 'users\\December2018\\Rtlm8z4tQ1kor1auIi24.png', NULL, '$2y$10$LcM6v6dPwqSck/VyK1/q/etq3EuILSxRsh.vNsLEC6pXOftdev9Ia', 'Cfc69jH6XhXas1r0YMnnJZYEvasPidzh9hvJuzedtOOlffnyOeRkNZ6TeENm', '{\"locale\":\"fa\"}', '2018-11-26 08:44:06', '2018-12-19 16:52:56'),
(4, 1, 'ali', 'ali@gmail.com', 'users/default.png', NULL, '$2y$10$Ku/k1NFuqONcFVc4OR4joeLidON0OvvhVj945l7trdIQrL2VT/TAu', NULL, NULL, '2018-11-28 07:22:55', '2018-11-28 07:22:55'),
(5, 2, 'khjh', 'gsmmsk@gmail.com', 'users/default.png', NULL, '$2y$10$OqMfiUOMY/5vrcR0tu8vwuS4HQsKAtJKOTHc2CEuPCkfmLZpM.QNi', NULL, NULL, '2018-11-28 07:24:32', '2018-11-28 07:24:32'),
(6, 2, 'سجاد', 'aaa@gmail.com', 'users/default.png', NULL, '$2y$10$95OMsge2siHY9XChuXURwOwFyZGge4/vEnAq49BJeLSqGcZ7C7cia', NULL, NULL, '2018-12-03 09:16:20', '2018-12-03 09:16:20'),
(7, 2, 'ggggg', 'gsm@gmail.com', 'users/default.png', NULL, '$2y$10$7ZS4Rupg.aIKPLsIjV5//.63aBCaeHfT/1S.mu3PeMTSbJAy/1/AS', NULL, NULL, '2018-12-03 10:31:37', '2018-12-03 10:31:37'),
(8, 2, 'aaaa', 'a@gmail.com', 'users/default.png', NULL, '$2y$10$jVp6ln4qNSYMc/HVnpSRdunDf9yzHbMeMlcO66GbWI/CJhZpQ9H0i', NULL, NULL, '2018-12-03 16:39:38', '2018-12-03 16:39:38'),
(9, 2, 'hhh', 'g@gmail.com', 'users/default.png', NULL, '$2y$10$VAKsBM5eL1HSzbaB2j0hteKOvU2sSSBr/JxmsF8nixxGg5Fr18JAq', '32qfIKBeSvWg7si4OXG8NvbFTq785Q5DHAPTyCjlWRi1fj2RKV8d0ZozVBPj', NULL, '2018-12-03 18:19:58', '2018-12-03 18:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_addresses_user_id` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`),
  ADD KEY `idx_category_product_category_id` (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_order_product_product_id` (`product_id`),
  ADD KEY `idx_order_product_order_id` (`order_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

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
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=524;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `fk_addresses_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_category_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `fk_order_product_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_product_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
