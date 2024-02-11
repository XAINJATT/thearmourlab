-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 02:26 PM
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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `type_of_service` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contests`
--

CREATE TABLE `contests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` longtext DEFAULT NULL,
  `answer` longtext DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `category`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Does ceramic coating require special maintenance?', 'Ceramic coating warranty primarily addresses manufactures production defects and any discrepancies during installation. It\'s essential to understand that coatings efficacy largely depends on its care. For optimal longevity and  durability, annual maintenance by an approved installer is strongly recommended.', 'cc', 1, '2024-01-26 12:57:56', '2024-01-26 13:04:21', NULL),
(2, 'Can I wash my car regularly after applying a ceramic coating?', 'Yes, regular washing is recommended to remove contaminants. Always  use a PH-neutral soap and avoid abrasive chemicals and touch car washes!', 'cc', 1, '2024-01-26 13:00:21', '2024-01-26 13:04:14', NULL),
(3, 'Does ceramic coating prevent scratches?', 'While ceramic coating provides a protective layer, it isn\'t entirely scratch-proof. However, it can minimize light swirls and scratches, adding a level of protection against minor abrasions.', 'cc', 1, '2024-01-26 13:01:22', '2024-01-26 13:04:09', NULL),
(4, 'How long does ceramic coating last?', 'With proper maintenance, premium ceramic coatings can last several years. The exact duration varies based on environmental conditions, how often the vehicle is used, and how well it is maintained.', 'cc', 1, '2024-01-26 13:02:08', '2024-01-26 13:03:16', NULL),
(5, 'What is ceramic coating?', 'Ceramic coating is a liquid polymer applied to a vehicle\'s exterior surfaces. Once cured, it bonds with the factory paint, establishing alayer of protection anda hydrophobic surface.', 'cc', 1, '2024-01-26 13:02:53', '2024-01-26 13:03:10', NULL),
(6, 'What is covered under warranty with ppf?', 'PPF\'s warranty typically covers defects in materials and\r\n                                 workmanship,\r\n                                 including yellowing, staining, and cracking. However. it doesn\'t\r\n                                 cover\r\n                                 damages from accidents, misuse. or wear from abrasive\r\n\r\n                                 materials ( stones on the road). Always consult the official\r\n                                 warranty\r\n                                 documentation for specific coverage details', 'ppf', 1, '2024-01-26 13:06:30', '2024-01-26 13:10:34', NULL),
(7, 'Can PPF be removed? Will it damage the paint?', 'PPF is designed for safe removal by professionals. When done\r\n                                 correctly,\r\n                                 removal will not damage the underlying paint. In fact, the paint\r\n                                 beneath\r\n                                 will typically look as vibrant as the day the film was applied.', 'ppf', 1, '2024-01-26 13:06:57', '2024-01-26 13:10:29', NULL),
(8, 'Is PPF completely resistant to stone chips and scratches?', 'Paint Protection Film (PPF) provides an enhanced layer of\r\n                                 defence against\r\n                                 stone chips, road debris, and minor abrasions, significantly\r\n                                 reducing the\r\n                                 risk of damage to your vehicle\'s paint. However, it\'s important\r\n                                 to note that\r\n                                 PPF isn\'t \"bulletproof.\" In cases of high-speed impacts or\r\n                                 sharp, forceful\r\n                                 debris, there\'s still a possibility of stone chips penetrating\r\n                                 through.Think\r\n                                 of PPF as a highly effective shield; it will take the brunt of\r\n                                 many impacts\r\n                                 and preserve your vehicle\'s aesthetics, but under extreme\r\n                                 conditions, no\r\n                                 shield is absolute.', 'ppf', 1, '2024-01-26 13:07:23', '2024-01-26 13:10:22', NULL),
(9, 'How long does PPF last?', 'Depending on the quality of the film, environmental conditions,\r\n                                 and\r\n                                 maintenance, PPF can last several years. Periodic inspections\r\n                                 are\r\n                                 recommended to check for signs of wear or damage. Our PPF is\r\n                                 backed by a 10\r\n                                 year warranty!', 'ppf', 1, '2024-01-26 13:07:47', '2024-01-26 13:10:16', NULL),
(10, 'Does PPF turn yellow over time?', 'Quality PPFs are designed to resist yellowing. However, over\r\n                                 extended\r\n                                 periods and under harsh conditions, some slight discolouration\r\n                                 might occur.\r\n                                 Regular maintenance can help prevent this.', 'ppf', 1, '2024-01-26 13:08:13', '2024-01-26 13:10:10', NULL),
(11, 'How does PPF differ from ceramic coating?', 'While both offer protection, PPF is more focused on physical\r\n                                 protection\r\n                                 against chips and scratches. Ceramic coating, on the other hand,\r\n                                 offers\r\n                                 protection against contaminants, UV damage, and provides a\r\n                                 hydrophobic\r\n                                 effect.', 'ppf', 1, '2024-01-26 13:08:38', '2024-01-26 13:10:05', NULL),
(12, 'What is Paint Protection Film (PPF)?', 'PPF is a transparent, durable film applied to a vehicle\'s\r\n                                 exterior to\r\n                                 protect it from scratches, rock chips, and environmental\r\n                                 contaminants.', 'ppf', 1, '2024-01-26 13:09:03', '2024-01-26 13:10:00', NULL),
(13, 'Can I legally tint my windshield in Ontario?', 'Absolutely, you can add a strip of tint to the top part of your\r\n                                 windshield\r\n                                 here in Ontario. The law allows a non-reflective tint strip on\r\n                                 the upper 6\r\n                                 inches to help shield your eyes from the sun. But remember,\r\n                                 covering the\r\n                                 entire windshield isn\'t allowed – we\'ve got to keep the view\r\n                                 clear for safe\r\n                                 driving!', 'wt', 1, '2024-01-26 13:11:19', '2024-01-26 13:14:10', NULL),
(14, 'Is 35% the legal window tint limit in Ontario? Can I go darker with                              a 20%                              tint?', 'In Ontario, the legal requirement for the front side windows is\r\n                                 to allow at\r\n                                 least 70% of light to pass through. However, while 35% tint is\r\n                                 commonly\r\n                                 recommended to ensure compliance, many drivers have observed\r\n                                 that the\r\n                                 province can be somewhat lenient in its enforcement, with some\r\n                                 20% tints\r\n                                 passing inspections. That being said, always proceed with\r\n                                 caution when\r\n                                 selecting darker tints, as individual experiences can vary.', 'wt', 1, '2024-01-26 13:11:45', '2024-01-26 13:14:05', NULL),
(15, 'Why does ceramic window tint feel cooler than other types of tint                              when                              exposed to sunlight?', 'Ceramic window tints have a high infrared heat rejection rate.\r\n                                 This means\r\n                                 they\'re especially effective at blocking the heat-producing\r\n                                 infrared rays\r\n                                 from the sun, ensuring the interior of your vehicle remains\r\n                                 cooler, even in\r\n                                 intense sunlight.', 'wt', 1, '2024-01-26 13:12:25', '2024-01-26 13:13:58', NULL),
(16, 'Is ceramic window tint more effective at blocking UV rays than                              regular tint?', 'Absolutely! Ceramic window tints are specifically designed with\r\n                                 UV-rejecting\r\n                                 properties. They can block up to 99% of harmful UV rays,\r\n                                 offering superior\r\n                                 protection for both vehicle interiors and occupants when\r\n                                 compared to many\r\n                                 regular tints.', 'wt', 1, '2024-01-26 13:12:48', '2024-01-26 13:13:54', NULL),
(17, 'Will ceramic tint turn purple or bubble over time?', 'No, high-quality ceramic window tints are designed to be UV\r\n                                 stable, which\r\n                                 prevents them from turning purple. The advanced adhesive\r\n                                 technology ensures\r\n                                 that the tint remains bubble-free for its lifetime when properly\r\n                                 installed', 'wt', 1, '2024-01-26 13:13:12', '2024-01-26 13:13:49', NULL),
(18, 'What makes ceramic window tint different from other types of tints?', 'Ceramic window tints use a layer of ceramic particles to reject\r\n                                 heat and UV\r\n                                 rays, making them superior in heat reduction without blocking\r\n                                 electronic\r\n                                 signals. Unlike other tints, they offer enhanced clarity and are\r\n                                 less\r\n                                 reflective, ensuring optimum visibility. Also ceramic film is\r\n                                 backed by\r\n                                 LIFETIME warranty!', 'wt', 1, '2024-01-26 13:13:36', '2024-01-26 13:13:44', NULL),
(33, 'Nesciunt laudantium?', 'Cupidatat sed in rep', 'cc', 1, '2024-01-26 14:52:58', '2024-01-26 14:54:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `giveaway_entries`
--

CREATE TABLE `giveaway_entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `prize` varchar(255) DEFAULT NULL,
  `giveaway` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iso` varchar(255) NOT NULL,
  `rtl` tinyint(1) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `iso`, `rtl`, `active`, `created_at`, `updated_at`) VALUES
(1, 'ar', 1, 1, NULL, NULL),
(2, 'en', 0, 1, NULL, NULL),
(3, 'de', 0, 1, NULL, NULL),
(4, 'es', 0, 1, NULL, NULL),
(5, 'et', 0, 1, NULL, NULL),
(6, 'fa', 1, 1, NULL, NULL),
(7, 'fr', 0, 1, NULL, NULL),
(8, 'id', 0, 1, NULL, NULL),
(9, 'it', 0, 1, NULL, NULL),
(10, 'nl', 0, 1, NULL, NULL),
(11, 'de', 0, 1, NULL, NULL),
(12, 'pl', 0, 1, NULL, NULL),
(13, 'pt', 0, 1, NULL, NULL),
(14, 'ro', 0, 1, NULL, NULL),
(15, 'ru', 0, 1, NULL, NULL),
(16, 'th', 0, 1, NULL, NULL),
(17, 'tr', 0, 1, NULL, NULL),
(18, 'pt-br', 0, 1, NULL, NULL),
(19, 'zh-cn', 0, 1, NULL, NULL),
(20, 'zh-tw', 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '1',
  `is_gallery` varchar(255) DEFAULT NULL COMMENT 'Will this media displayed in gallery or not',
  `type` varchar(255) DEFAULT NULL COMMENT 'Image or Video',
  `category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `path`, `status`, `is_gallery`, `type`, `category`, `created_at`, `updated_at`) VALUES
(1, 'public/media/B02iDdx5ZGsvWFbuhYmcfHZ1jAlcDDjeF0pvNnc1.jpg', '1', 'true', 'image/jpeg', 'ppf', '2024-01-26 06:41:25', '2024-01-26 06:41:25'),
(2, 'public/media/0xGYSKMRjUJmHS7f0Z8GZg373c8gF39BJ1CjKXhn.jpg', '1', 'true', 'image/jpeg', 'ppf', '2024-01-26 06:41:32', '2024-01-26 06:41:32'),
(3, 'public/media/Uqs1CjFOe5ZOzxk9pfNcXJx8QQRH5gDgsFlj91aJ.jpg', '1', 'true', 'image/jpeg', 'ppf', '2024-01-26 06:41:50', '2024-01-26 06:41:50'),
(4, 'public/media/7CygHLnS3zxYYqbuv2ZmNEKDjzwsUOErTe1DmSR4.jpg', '1', 'true', 'image/jpeg', 'ppf', '2024-01-26 06:41:50', '2024-01-26 06:41:50'),
(5, 'public/media/CKmNDzDlyA0NfQRlJgf0JFMPtRxzqSGk8YHrkuaL.jpg', '1', 'true', 'image/jpeg', 'cc', '2024-01-26 06:43:02', '2024-01-26 06:43:02'),
(6, 'public/media/D4iaNHXncjO48kbeXoMQdY4O7p3ikZZFzzROh0ig.jpg', '1', 'true', 'image/jpeg', 'cc', '2024-01-26 06:43:03', '2024-01-26 06:43:03'),
(7, 'public/media/TeSOPTs0F8CyMucUeiPgSZx26HTyDrjZKHvFi98C.jpg', '1', 'true', 'image/jpeg', 'wt', '2024-01-26 06:43:12', '2024-01-26 06:43:12'),
(8, 'public/media/tI9WG89ntpdGbDhvyWwOP3tzEDAuHfGX57z0KCgi.jpg', '0', 'true', 'image/jpeg', 'wt', '2024-01-26 06:43:13', '2024-01-26 07:37:32'),
(9, 'public/media/LmXKkslJEU4wbrwy3nK1UuTytvaVt5ht7zpYwpN0.jpg', '1', 'false', 'image/jpeg', NULL, '2024-01-26 13:16:26', '2024-01-26 13:16:26'),
(10, 'public/media/FKPqoR398RBpUYn5t2G2tRN3CAYZEfKK1BgXchml.jpg', '1', 'false', 'image/jpeg', NULL, '2024-01-26 13:16:36', '2024-01-26 13:16:36'),
(11, 'public/media/ERMQrOEsDAM4fhzFaKYi6xgNTvgjGUNcIxSvhkW7.jpg', '1', 'false', 'image/jpeg', NULL, '2024-01-26 13:36:30', '2024-01-26 13:36:30');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_11_190500_create_warranties_table', 1),
(6, '2023_11_21_155645_create_blogs_table', 1),
(7, '2023_11_21_180823_create_products_table', 1),
(8, '2023_11_21_195038_create_stocks_table', 1),
(9, '2023_11_22_112144_create_work_orders_table', 1),
(10, '2023_11_22_193638_create_contact_us_table', 1),
(11, '2023_11_23_133749_create_product_images_table', 1),
(12, '2023_11_28_014321_create_orders_table', 1),
(13, '2023_11_28_014641_create_products_orders_table', 1),
(14, '2023_11_28_030935_create_user_orders_table', 1),
(15, '2023_12_02_075140_create_work_order_statuses_table', 1),
(16, '2023_12_07_173238_add_log_data_warranty_table', 1),
(17, '2023_12_08_112506_add_user_id_to_orders_table', 1),
(18, '2023_12_13_102459_add_type_of_service_contact_us', 1),
(19, '2023_12_15_173513_adding_status_options_in_work_order', 1),
(20, '2023_12_15_183933_create_media_table', 1),
(21, '2023_12_18_145948_add_packages_work_order_page', 1),
(22, '2023_12_25_002413_create_contests_table', 1),
(23, '2023_12_29_004307_user_contests', 1),
(24, '2024_01_05_045606_create_settings_table', 1),
(25, '2024_01_06_155952_create_testimonials_table', 1),
(26, '2024_01_12_082246_create_giveaway_entries_table', 1),
(27, '2024_01_12_114635_add_status_images_work_order', 1),
(28, '2024_01_21_145722_modify_work_orders_table', 1),
(29, '2024_01_22_184207_create_invoices_table', 1),
(31, '2024_01_25_223146_create_faqs_table', 2),
(33, '2024_02_08_142333_create_languages_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subtotal` varchar(255) DEFAULT NULL,
  `tax` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Admin', 'Admin', 'admin@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$/2eXybCJmtEOeIHRJLcEXO08FXbDoIQAILPakBX1GrugCD05JXm96', '0', '1', NULL, '2024-01-26 06:19:59', '2024-01-26 06:19:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_contests`
--

CREATE TABLE `user_contests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `prize` varchar(255) DEFAULT NULL,
  `contest_id` bigint(20) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `date` varchar(255) DEFAULT NULL,
  `customer_signature` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `log_data` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `status` varchar(255) NOT NULL DEFAULT 'General' COMMENT 'General',
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
  `customer_signature` varchar(255) DEFAULT NULL,
  `defects` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `drivers_license` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `general_stages` varchar(255) DEFAULT NULL,
  `check_in` varchar(255) DEFAULT NULL,
  `initial_inspection` varchar(255) DEFAULT NULL,
  `Wash_and_decontamination` varchar(255) DEFAULT NULL,
  `general_stages_status` text DEFAULT 'Pending',
  `check_in_status` text DEFAULT 'Pending',
  `initial_inspection_status` text DEFAULT 'Pending',
  `Wash_and_decontamination_status` text DEFAULT 'Pending',
  `paint_protection_film_stages` text DEFAULT NULL,
  `PPF_cutting_alignment` text DEFAULT NULL,
  `PPF_polish` text DEFAULT NULL,
  `PPF_installation` text DEFAULT NULL,
  `PPF_curing_phase` text DEFAULT NULL,
  `paint_protection_film_stages_status` text DEFAULT 'Pending',
  `PPF_cutting_alignment_status` text DEFAULT 'Pending',
  `PPF_polish_status` text DEFAULT 'Pending',
  `PPF_installation_status` text DEFAULT 'Pending',
  `PPF_curing_phase_status` text DEFAULT 'Pending',
  `ceramic_coating_stages` text DEFAULT NULL,
  `cc_ceramic_coating_rep` text DEFAULT NULL,
  `cc_paint_correction` text DEFAULT NULL,
  `cc_ceramic_coating_application` text DEFAULT NULL,
  `cc_curing_phase` text DEFAULT NULL,
  `ceramic_coating_stages_status` text DEFAULT 'Pending',
  `cc_ceramic_coating_rep_status` text DEFAULT 'Pending',
  `cc_paint_correction_status` text DEFAULT 'Pending',
  `cc_ceramic_coating_application_status` varchar(255) DEFAULT 'Pending',
  `cc_curing_phase_status` varchar(255) DEFAULT 'Pending',
  `window_tint_stages` varchar(255) DEFAULT NULL,
  `window_tint_measurement_cut` varchar(255) DEFAULT NULL,
  `window_tint_application` varchar(255) DEFAULT NULL,
  `window_tint_stages_status` varchar(255) DEFAULT 'Pending',
  `window_tint_measurement_cut_status` varchar(255) DEFAULT 'Pending',
  `window_tint_application_status` varchar(255) DEFAULT 'Pending',
  `final_stages` varchar(255) DEFAULT NULL,
  `final_inspection` varchar(255) DEFAULT NULL,
  `completion_pickup` varchar(255) DEFAULT NULL,
  `final_stages_status` varchar(255) DEFAULT 'Pending',
  `final_inspection_status` varchar(255) DEFAULT 'Pending',
  `completion_pickup_status` varchar(255) DEFAULT 'Pending',
  `ceramic_coating_kenzo_coating` varchar(11) DEFAULT NULL,
  `ceramic_coating_quartz_plus_coating` varchar(11) DEFAULT NULL,
  `ceramic_coating_quartz_coating` varchar(11) DEFAULT NULL,
  `ceramic_coating_premier_coating` varchar(11) DEFAULT NULL,
  `ceramic_coating_interior_pkg` varchar(11) DEFAULT NULL,
  `ceramic_coating_wheels_of_pkg` varchar(11) DEFAULT NULL,
  `ceramic_coating_price` decimal(10,2) DEFAULT NULL,
  `ppf_full_car` varchar(11) DEFAULT NULL,
  `ppf_full_front_end` varchar(11) DEFAULT NULL,
  `ppf_partial_front_end` varchar(11) DEFAULT NULL,
  `ppf_partial_kit` varchar(11) DEFAULT NULL,
  `ppf_rockers` varchar(11) DEFAULT NULL,
  `ppf_headlights` varchar(11) DEFAULT NULL,
  `ppf_luggage_strip` varchar(11) DEFAULT NULL,
  `ppf_price` decimal(10,2) DEFAULT NULL,
  `wt_front_windows` varchar(11) DEFAULT NULL,
  `wt_full_vehicle` varchar(11) DEFAULT NULL,
  `wt_windshield` varchar(11) DEFAULT NULL,
  `wt_5` varchar(11) DEFAULT NULL,
  `wt_20` varchar(11) DEFAULT NULL,
  `wt_35` varchar(11) DEFAULT NULL,
  `wt_50` varchar(11) DEFAULT NULL,
  `wt_70` varchar(11) DEFAULT NULL,
  `wt_price` decimal(10,2) DEFAULT NULL,
  `pc_one_stage` varchar(11) DEFAULT NULL,
  `pc_two_stage` varchar(11) DEFAULT NULL,
  `pc_three_stage` varchar(11) DEFAULT NULL,
  `pc_wet_sand` varchar(11) DEFAULT NULL,
  `pc_price` decimal(10,2) DEFAULT NULL,
  `os_interior_detailing` varchar(11) DEFAULT NULL,
  `os_car_wrap` varchar(11) DEFAULT NULL,
  `os_rim_powder_coating` varchar(11) DEFAULT NULL,
  `os_rim_repair` varchar(11) DEFAULT NULL,
  `os_dent_repair` varchar(11) DEFAULT NULL,
  `os_caliper_painting` varchar(11) DEFAULT NULL,
  `os_price` decimal(10,2) DEFAULT NULL,
  `status_images` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `contests`
--
ALTER TABLE `contests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giveaway_entries`
--
ALTER TABLE `giveaway_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_contests`
--
ALTER TABLE `user_contests`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contests`
--
ALTER TABLE `contests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `giveaway_entries`
--
ALTER TABLE `giveaway_entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_orders`
--
ALTER TABLE `products_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_contests`
--
ALTER TABLE `user_contests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warranties`
--
ALTER TABLE `warranties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_orders`
--
ALTER TABLE `work_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_order_statuses`
--
ALTER TABLE `work_order_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
