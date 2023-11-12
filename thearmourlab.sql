-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 08:01 PM
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_11_11_190500_create_warranties_table', 2),
(7, '2023_11_12_084406_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `make` varchar(255) DEFAULT NULL,
  `colour` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `v_i_n` varchar(255) DEFAULT NULL,
  `plate` varchar(255) DEFAULT NULL,
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
  `customer_signature` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `make`, `colour`, `phone`, `model`, `year`, `email`, `v_i_n`, `plate`, `ceramic_coating_kenzo_coating`, `ceramic_coating_quartz_plus_coating`, `ceramic_coating_quartz_coating`, `ceramic_coating_premier_coating`, `ceramic_coating_interior_pkg`, `ceramic_coating_wheels_of_pkg`, `ceramic_coating_price`, `ppf_full_car`, `ppf_client_notes`, `ppf_payment_stub`, `ppf_payment_terms`, `ppf_price`, `cc_payment_terms`, `cc_client_notes`, `cc_payment_stub`, `cc_price`, `additional_requests`, `total_price`, `mileage_in_price`, `note`, `int`, `payment_type`, `customer_signature`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kessie Guthrie', 'Distinctio Quo qui', 'Laboriosam nihil mo', '+1 (794) 333-4903', 'Vitae consectetur e', '2007', 'mypab@mailinator.com', 'Molestias ipsa illu', 'Libero iusto veritat', 'on', 'on', NULL, NULL, 'on', 'on', 819.00, 'on', 'on', NULL, 'on', 86.00, 'on', 'on', NULL, 394.00, 'Qui ut tempora proid', '37', NULL, 'Cupiditate sunt volu', '40', 'Debit', NULL, '1991-10-19', '2023-11-12 17:44:39', '2023-11-12 19:58:51', NULL),
(2, 'Kessie Guthrie', 'Distinctio Quo qui', 'Laboriosam nihil mo', '+1 (794) 333-4903', 'Vitae consectetur e', '2007', 'mypab@mailinator.com', 'Molestias ipsa illu', 'Libero iusto veritat', 'on', 'on', NULL, NULL, 'on', 'on', 819.00, 'on', 'on', NULL, 'on', 86.00, 'on', 'on', NULL, 394.00, 'Qui ut tempora proid', '37', NULL, 'Cupiditate sunt volu', '40', 'Debit', NULL, '1991-10-19', '2023-11-12 17:46:44', '2023-11-12 17:46:44', NULL),
(3, 'Vivian Bradley', 'Laboris sed ullamco', 'Anim veniam eius in', '+1 (662) 264-8735', 'Et est velit quasi', '1996', 'hecyty@mailinator.com', 'Quia et ut eum facil', 'Expedita commodo ad', 'on', 'on', 'on', NULL, NULL, 'on', 566.00, NULL, 'on', 'on', 'on', 554.00, 'on', 'on', NULL, 117.00, 'Voluptatem occaecat', '941', NULL, 'Illum reiciendis en', '4', 'Credit', NULL, '2005-03-11', '2023-11-12 17:47:01', '2023-11-12 17:47:01', NULL),
(4, 'Hedwig Deleon', 'Modi velit omnis cum', 'Est similique aliqu', '+1 (746) 999-5922', 'Et nulla eum ea mole', '2005', 'hebofy@mailinator.com', 'Omnis aut cillum ut', 'Et est ad eius quide', '1', '0', '1', '0', '0', '0', 272.00, '0', '1', '0', '1', 467.00, '1', '1', '1', 628.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-12 17:52:19', '2023-11-12 17:52:19', NULL),
(5, 'Cassady Frank', 'Nobis irure tempor s', 'Laboriosam labore i', '+1 (662) 152-2165', 'Ab molestiae sunt q', '1991', 'gihoz@mailinator.com', 'Tempore odio enim n', 'Aute sint voluptate', '0', '1', '1', '1', '0', '0', 65.00, '1', '0', '1', '1', 190.00, '1', '0', '1', 999.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-12 19:49:04', '2023-11-12 19:58:58', NULL);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$T17AHKocrt5T0kXq3kEB.emILhCFkWzLeKLYl.W4BBvKefj2aOlo6', '0', '1', NULL, '2023-11-12 03:08:45', '2023-11-12 03:08:45', NULL),
(3, 'user', 'user@gmail.com', NULL, '$2y$10$UMUhwVmD3/9ivKvIuL9sXuNH8Uk6XZ9nal61DXyvKhBXxEb0Q2x2.', '1', '0', NULL, '2023-11-12 18:59:44', '2023-11-12 19:48:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warranties`
--

CREATE TABLE `warranties` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `warranties` (`id`, `first_name`, `last_name`, `email`, `tel`, `make`, `model`, `year`, `colour`, `vin`, `exterior_package`, `interior`, `windows`, `wheels`, `trim`, `paint_correction`, `body`, `coating_duration`, `full_front_end`, `partial_front_end`, `full_body`, `attitionl_panels`, `ppf_brand`, `roll_serial_number`, `warranty_duration`, `installer`, `date_of_installation`, `installer_signature`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ariana', 'Fowler', 'sofi@mailinator.com', 'Incidunt fugit rep', 'Suscipit omnis rerum', 'Ipsum aut reprehende', '1978', 'Tenetur consequatur', 'Consectetur consequa', 'Possimus reiciendis', 'Ab amet aut necessi', 'Provident aut aut e', 'Id at laborum a off', 'Deserunt tempora nih', 'Minim saepe est rati', 'Maxime esse beatae a', 'Sint excepteur facil', NULL, 'on', 'on', 'Nulla quia omnis seq', 'Aut aut placeat eaq', '248', 'Odio non eum rem nis', 'Doloribus eos conseq', '1975-03-31', NULL, '2023-11-12 05:22:25', '2023-11-12 20:01:35', NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `warranties`
--
ALTER TABLE `warranties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `warranties`
--
ALTER TABLE `warranties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
