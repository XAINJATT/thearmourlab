-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 02:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thearmourlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `blog_writer_name` varchar(255) DEFAULT NULL,
  `blog_writer_picture` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `blog_writer_name`, `blog_writer_picture`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Accusamus cillum eli', 'Dolor dicta officia', 'Image-20231121-171758.png', 'James Wise', 'BlogWriterImage-20231121-171758.png', '1', '2023-11-22 01:17:58', '2023-11-22 01:23:13', '2023-11-22 01:23:13'),
(5, 'Accusamus omnis assu', 'Laborum Illo et ali', 'Image-20231121-174720.jpg', 'Zia Hodge', 'BlogWriterImage-20231121-174720.jpg', '1', '2023-11-22 20:33:34', '2023-11-22 20:33:34', NULL),
(6, 'Quam quasi officiis', 'Voluptates consectet', 'Image-20231122-122632.jpg', 'Ezekiel Nieves', 'BlogWriterImage-20231122-122632.jpg', '0', '2023-11-22 20:26:32', '2023-11-22 20:27:08', '2023-11-22 20:27:08'),
(7, 'Magna saepe velit co', 'Totam sint placeat', 'Image-20231122-204007.jpg', 'Carol Snyder', 'BlogWriterImage-20231122-204007.jpg', '1', '2023-11-23 04:40:07', '2023-11-23 04:40:07', NULL),
(8, 'Est voluptatum nesci', 'Fugit nesciunt cor', 'Image-20231122-204023.jpg', 'Brett Flynn', 'BlogWriterImage-20231122-204023.jpg', '1', '2023-11-23 04:40:23', '2023-11-23 04:40:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Joshua Webb', 'cunyzozy@mailinator.com', '+1 (761) 852-4216', 'Quia nihil id mollit', '2023-11-23 04:15:47', '2023-11-23 04:25:42', '2023-11-23 04:25:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_11_12_084406_create_orders_table', 3),
(10, '2023_11_21_155645_create_blogs_table', 5),
(11, '2023_11_21_195038_create_stocks_table', 6),
(13, '2014_10_12_000000_create_users_table', 8),
(15, '2023_11_22_112144_create_work_orders_table', 9),
(16, '2023_11_11_190500_create_warranties_table', 10),
(17, '2023_11_22_193638_create_contact_us_table', 11),
(18, '2023_11_23_133749_create_product_images_table', 12),
(19, '2023_11_21_180823_create_products_table', 13),
(20, '2023_11_28_014321_create_orders_table', 14),
(21, '2023_11_28_014641_create_products_orders_table', 15),
(22, '2023_11_28_030935_create_user_orders_table', 16),
(23, '2023_12_02_075140_create_work_order_statuses_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subtotal` varchar(255) DEFAULT NULL,
  `tax` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `subtotal`, `tax`, `total`, `payment_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1946.00', '97.30', '2043.30', 'Pending', '2023-11-28 10:52:00', '2023-11-28 10:52:00', NULL),
(2, '1946.00', '97.30', '2043.30', 'Pending', '2023-11-28 10:56:27', '2023-11-28 10:56:27', NULL),
(3, '1946.00', '97.30', '2043.30', 'Pending', '2023-11-28 10:57:13', '2023-11-28 10:57:13', NULL),
(4, '540.00', '27.00', '567.00', 'Pending', '2023-11-28 10:59:22', '2023-11-28 10:59:22', NULL),
(5, '540.00', '27.00', '567.00', 'Pending', '2023-11-28 10:59:42', '2023-11-28 10:59:42', NULL),
(6, '810.00', '40.50', '850.50', 'Pending', '2023-11-28 11:03:01', '2023-11-28 11:03:01', NULL),
(7, '810.00', '40.50', '850.50', 'Pending', '2023-11-28 11:06:02', '2023-11-28 11:06:02', NULL),
(8, '56.00', '2.80', '58.80', 'Pending', '2023-11-29 05:30:17', '2023-11-29 05:30:17', NULL),
(9, '56.00', '2.80', '58.80', 'Paid', '2023-11-29 06:02:35', '2023-11-29 06:46:36', NULL),
(10, '382.00', '19.10', '401.10', 'Paid', '2023-11-29 08:13:40', '2023-11-29 08:14:11', NULL),
(11, '270.00', '13.50', '283.50', 'Paid', '2023-12-02 16:12:09', '2023-12-02 16:12:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `discounted_price` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `soh` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `slug`, `price`, `discounted_price`, `product_image`, `status`, `soh`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Clarke Quinn', NULL, 'clarke-quinn', '827', '56', 'ProductImage-20231123-135042.jpg', '1', '57', '2023-11-23 21:50:43', '2023-11-23 21:50:43', NULL),
(2, 'Luke Decker', 'Neque et est ab erro', 'luke-decker', '374', '270', 'ProductImage-20231123-140534.jpg', '1', '75', '2023-11-23 22:11:26', '2023-11-23 22:11:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_orders`
--

CREATE TABLE `products_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_orders`
--

INSERT INTO `products_orders` (`id`, `order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2023-11-28 10:52:00', '2023-11-28 10:52:00'),
(2, 1, 1, '2023-11-28 10:52:00', '2023-11-28 10:52:00'),
(3, 2, 2, '2023-11-28 10:56:27', '2023-11-28 10:56:27'),
(4, 2, 1, '2023-11-28 10:56:27', '2023-11-28 10:56:27'),
(5, 3, 2, '2023-11-28 10:57:13', '2023-11-28 10:57:13'),
(6, 3, 1, '2023-11-28 10:57:13', '2023-11-28 10:57:13'),
(7, 4, 2, '2023-11-28 10:59:22', '2023-11-28 10:59:22'),
(8, 5, 2, '2023-11-28 10:59:42', '2023-11-28 10:59:42'),
(9, 6, 2, '2023-11-28 11:03:01', '2023-11-28 11:03:01'),
(10, 7, 2, '2023-11-28 11:06:02', '2023-11-28 11:06:02'),
(11, 8, 1, '2023-11-29 05:30:17', '2023-11-29 05:30:17'),
(12, 9, 1, '2023-11-29 06:02:35', '2023-11-29 06:02:35'),
(13, 10, 1, '2023-11-29 08:13:40', '2023-11-29 08:13:40'),
(14, 10, 2, '2023-11-29 08:13:40', '2023-11-29 08:13:40'),
(15, 11, 2, '2023-12-02 16:12:09', '2023-12-02 16:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(7, 2, '1700748675676.jpg', '2023-11-23 22:11:15', '2023-11-23 22:11:15'),
(8, 2, '1700748675479.jpg', '2023-11-23 22:11:15', '2023-11-23 22:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1- stock, 0- initial_quantity',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `product_id`, `qty`, `type`, `created_at`, `updated_at`) VALUES
(6, 5, 44, 0, '2023-11-22 20:33:11', '2023-11-22 20:33:11'),
(7, 1, 57, 0, '2023-11-23 21:50:43', '2023-11-23 21:50:43'),
(11, 2, 75, 0, '2023-11-23 22:11:26', '2023-11-23 22:11:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '1' COMMENT 'Admin = 0, User = 1',
  `status` varchar(255) NOT NULL DEFAULT '1' COMMENT 'ban = 0, Active = 1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `profile_image`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$vBBR/aBuYjgUezRGaA84auv/413YlTMCRyq1siszB7hH8LUdq4V7W', '0', '1', NULL, '2023-11-23 18:53:59', '2023-11-23 18:53:59', NULL),
(2, 'Helen', 'Giles', 'tosexaj@mailinator.com', '1', 'Sequi nemo nisi exer', 'ProfileImage-20231126-035057.jpg', NULL, '$2y$10$2I.5ZejUFXzIEtOL502FROP4foRlepduH/sTlvBytLtBSwgM4gDJK', '1', '1', NULL, '2023-11-26 11:50:57', '2023-11-26 11:50:57', NULL),
(3, 'Tyrone', 'Perez', 'zepix@mailinator.com', '99', 'Tenetur eu occaecat', 'ProfileImage-20231203-022850.jpg', NULL, '$2y$10$xto32tvZHmkFZ3CIZJ2IkehCmmsv8ogwq.0M1rrqCALL5kjMcVCU.', '1', '1', NULL, '2023-12-03 10:28:51', '2023-12-03 10:28:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`id`, `order_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `country`, `city`, `state`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 7, 'Demetria', 'Oneal', 'zoryf@mailinator.com', '+1 (885) 701-1811', 'Non voluptatem Volu', 'Non voluptatem qui i', 'Ut adipisicing sapie', 'Non consequatur Qui', '36387', '2023-11-28 11:29:03', '2023-11-28 11:29:03'),
(2, 8, 'Leonard', 'Gross', 'lojevi@mailinator.com', '+1 (573) 296-1733', 'Error occaecat est q', 'Aut quo ut aute sint', 'Velit aut ullam eaqu', 'Hic voluptate et est', '60105', '2023-11-29 05:30:26', '2023-11-29 05:30:26'),
(3, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-29 06:11:19', '2023-11-29 06:11:19'),
(4, 10, 'Madeline', 'Harmon', 'qumom@mailinator.com', '+1 (747) 965-9762', 'Est hic distinctio', 'Tempore quae quisqu', 'Temporibus dolorem f', 'Voluptates dolores a', '84584', '2023-11-29 08:13:49', '2023-11-29 08:13:49'),
(5, 11, 'Kane', 'Hines', 'tuta@mailinator.com', '+1 (607) 204-4119', 'Velit voluptas repud', 'Proident id commod', 'Ipsa omnis a qui qu', 'Anim consequatur nul', '31663', '2023-12-02 16:12:19', '2023-12-02 16:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `warranties`
--

CREATE TABLE `warranties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `make` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `colour` varchar(255) DEFAULT NULL,
  `vin` varchar(255) DEFAULT NULL,
  `exterior_package` varchar(255) DEFAULT NULL,
  `interior` varchar(255) DEFAULT NULL,
  `windows` varchar(255) DEFAULT NULL,
  `wheels` varchar(255) DEFAULT NULL,
  `trim` varchar(255) DEFAULT NULL,
  `paint_correction` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `coating_duration` varchar(255) DEFAULT NULL,
  `full_front_end` varchar(255) DEFAULT NULL,
  `partial_front_end` varchar(255) DEFAULT NULL,
  `full_body` varchar(255) DEFAULT NULL,
  `attitionl_panels` varchar(255) DEFAULT NULL,
  `ppf_brand` varchar(255) DEFAULT NULL,
  `roll_serial_number` varchar(255) DEFAULT NULL,
  `warranty_duration` varchar(255) DEFAULT NULL,
  `installer` varchar(255) DEFAULT NULL,
  `date_of_installation` varchar(255) DEFAULT NULL,
  `installer_signature` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warranties`
--

INSERT INTO `warranties` (`id`, `user_id`, `first_name`, `last_name`, `email`, `tel`, `make`, `model`, `year`, `colour`, `vin`, `exterior_package`, `interior`, `windows`, `wheels`, `trim`, `paint_correction`, `body`, `coating_duration`, `full_front_end`, `partial_front_end`, `full_body`, `attitionl_panels`, `ppf_brand`, `roll_serial_number`, `warranty_duration`, `installer`, `date_of_installation`, `installer_signature`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Kennedy', 'Miranda', 'nekiwovapu@mailinator.com', '92', 'Odit hic fugit iure', 'Aliquam reprehenderi', '2001', 'Sint delectus ea to', 'Ad earum non cupidit', 'Et enim pariatur Si', 'Vitae nostrud earum', 'Quos perspiciatis a', 'Et vel eos sunt qui', 'Cillum ad deleniti i', 'Delectus dignissimo', 'Veniam in aut optio', 'Eius veritatis molli', NULL, 'on', 'on', 'Et unde illum magna', 'Molestiae similique', '85', 'Dolor nihil ut neque', 'Reiciendis facilis a', '2022-02-01', NULL, '2023-11-22 20:52:27', '2023-11-22 20:52:27', NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-26 11:47:30', '2023-11-26 11:47:30', NULL),
(3, 2, 'Helen', 'Giles', 'tosexaj@mailinator.com', '1', 'Non quia nulla volup', 'Itaque consectetur d', '1996', 'Rerum doloremque est', 'Amet reprehenderit', 'Ad officia id irure', 'Reiciendis consequat', 'Harum sed ipsum vol', 'Sint et minima sequi', 'Qui illo non id temp', 'Sint vel sapiente et', 'Tenetur nihil accusa', 'Qui hic placeat rep', NULL, NULL, 'on', 'Sequi aut cumque sin', 'Suscipit voluptatum', '369', 'Ut dolorum expedita', 'Eaque laboriosam de', '2016-12-03', NULL, '2023-11-26 18:34:21', '2023-11-26 18:34:21', NULL),
(4, 2, 'Helen', 'Giles', 'tosexaj@mailinator.com', '1', 'Magna occaecat est r', 'Laborum esse dolorem', '1996', 'Aut vitae sapiente o', 'Non quisquam cumque', 'Culpa minima quis i', 'Sit non cupidatat d', 'Sunt duis omnis haru', 'Obcaecati adipisci i', 'Dignissimos ex volup', 'Sapiente aute offici', 'Illum dolor ipsum e', 'Placeat qui nostrum', 'on', 'on', 'on', 'Neque velit labore s', 'Et consequatur arch', '225', 'Veniam ducimus hic', 'Ex ipsum nulla conse', '2007-11-30', NULL, '2023-11-28 06:41:14', '2023-11-28 06:41:14', NULL),
(5, 2, 'Helen', 'Giles', 'tosexaj@mailinator.com', '1', 'Doloremque sint qui', 'Quas et illum velit', '2004', 'Eos incidunt minus', 'Aut qui minima et ha', 'Animi aut beatae fa', 'Perferendis aut et a', 'Qui culpa non molest', 'Nulla commodo autem', 'Harum et et anim mol', 'Quis assumenda sequi', 'Consectetur quia lau', 'Esse eos quia tempor', NULL, NULL, 'on', 'Unde mollit laboris', 'Architecto ullam qui', '434', 'Numquam soluta eos m', 'Maiores omnis recusa', '2022-11-06', 'signature-20231127-233148.png', '2023-11-28 07:31:48', '2023-11-28 07:31:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `work_orders`
--

CREATE TABLE `work_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `make` varchar(255) DEFAULT NULL,
  `colour` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `v_i_n` varchar(255) DEFAULT NULL,
  `plate` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'General' COMMENT '''General'', ''Paint Protection Film'', ''Ceramic Coating'', ''Window Tint'', ''Final''',
  `ceramic_coating_kenzo_coating` varchar(255) DEFAULT NULL,
  `ceramic_coating_quartz_plus_coating` varchar(255) DEFAULT NULL,
  `ceramic_coating_quartz_coating` varchar(255) DEFAULT NULL,
  `ceramic_coating_premier_coating` varchar(255) DEFAULT NULL,
  `ceramic_coating_interior_pkg` varchar(255) DEFAULT NULL,
  `ceramic_coating_wheels_of_pkg` varchar(255) DEFAULT NULL,
  `ceramic_coating_price` decimal(10,2) DEFAULT NULL,
  `ppf_full_car` varchar(255) DEFAULT NULL,
  `ppf_client_notes` varchar(255) DEFAULT NULL,
  `ppf_payment_stub` varchar(255) DEFAULT NULL,
  `ppf_payment_terms` varchar(255) DEFAULT NULL,
  `ppf_price` decimal(10,2) DEFAULT NULL,
  `cc_payment_terms` varchar(255) DEFAULT NULL,
  `cc_client_notes` varchar(255) DEFAULT NULL,
  `cc_payment_stub` varchar(255) DEFAULT NULL,
  `cc_price` decimal(10,2) DEFAULT NULL,
  `additional_requests` text DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `mileage_in_price` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `int` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `customer_signature` longtext DEFAULT NULL,
  `defects` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `drivers_license` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_orders`
--

INSERT INTO `work_orders` (`id`, `user_id`, `first_name`, `last_name`, `make`, `colour`, `phone`, `model`, `year`, `email`, `v_i_n`, `plate`, `status`, `ceramic_coating_kenzo_coating`, `ceramic_coating_quartz_plus_coating`, `ceramic_coating_quartz_coating`, `ceramic_coating_premier_coating`, `ceramic_coating_interior_pkg`, `ceramic_coating_wheels_of_pkg`, `ceramic_coating_price`, `ppf_full_car`, `ppf_client_notes`, `ppf_payment_stub`, `ppf_payment_terms`, `ppf_price`, `cc_payment_terms`, `cc_client_notes`, `cc_payment_stub`, `cc_price`, `additional_requests`, `total_price`, `mileage_in_price`, `note`, `int`, `payment_type`, `customer_signature`, `defects`, `date`, `drivers_license`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'Tyrone', 'Perez', 'Nisi quo sit ut susc', 'Aliquid dolores omni', '99', 'Lorem magnam labore', '1972', 'zepix@mailinator.com', 'Sunt iste et asperi', 'Autem provident ut', 'General', '1', '1', '0', '0', '1', '0', 756.00, '0', '1', '0', '1', 551.00, '1', '1', '1', 418.00, 'Minus accusantium at', '551', '63', 'Quia nemo esse aute', '92', 'E-Transfer', 'signature-20231205-231031.png', 'defects-20231205-223036.png', '2012-08-01', NULL, '2023-12-06 06:25:36', '2023-12-06 07:10:31', NULL),
(2, 3, 'Tyrone', 'Perez', 'Est rerum modi non', 'Aperiam ad veritatis', '99', 'Unde dolore ut quis', '1988', 'zepix@mailinator.com', 'Qui alias modi est', 'Qui labore deserunt', 'General', '1', '1', '1', '1', '0', '1', 170.00, '0', '1', '1', '1', 313.00, '1', '0', '0', 818.00, 'Consequatur dolore a', '161', '360', 'Optio excepteur nih', '86', 'Credit', 'signature-20231205-234433.png', 'defects-20231205-233308.png', '1983-04-08', 'DriversLicense-20231205-234433.png', '2023-12-06 07:33:08', '2023-12-06 07:44:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `work_order_statuses`
--

CREATE TABLE `work_order_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `work_order_id` bigint(20) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'General' COMMENT 'General',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_order_statuses`
--

INSERT INTO `work_order_statuses` (`id`, `car_name`, `work_order_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'SUV', 8, 'Final', '2023-12-02 16:51:03', '2023-12-02 17:09:23', NULL),
(2, 'Truck', 6, 'Paint Protection Film', '2023-12-02 18:22:28', '2023-12-02 18:22:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_us_email_unique` (`email`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `products_orders`
--
ALTER TABLE `products_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warranties`
--
ALTER TABLE `warranties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_orders`
--
ALTER TABLE `work_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_order_statuses`
--
ALTER TABLE `work_order_statuses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products_orders`
--
ALTER TABLE `products_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `warranties`
--
ALTER TABLE `warranties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `work_orders`
--
ALTER TABLE `work_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work_order_statuses`
--
ALTER TABLE `work_order_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
