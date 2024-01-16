-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 10:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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

--
-- Dumping data for table `giveaway_entries`
--

INSERT INTO `giveaway_entries` (`id`, `name`, `phone`, `email`, `prize`, `giveaway`, `created_at`, `updated_at`) VALUES
(1, 'Ramona Sargent', '+1 (215) 305-1863', 'naved@mailinator.com', NULL, NULL, '2024-01-12 04:41:06', '2024-01-12 05:04:24'),
(2, 'Patrick Rodriguez', '+1 (226) 643-7838', 'qodakeco@mailinator.com', '1', NULL, '2024-01-12 04:41:18', '2024-01-12 05:10:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giveaway_entries`
--
ALTER TABLE `giveaway_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giveaway_entries`
--
ALTER TABLE `giveaway_entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
