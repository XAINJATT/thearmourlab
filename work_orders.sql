-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 06:11 PM
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
  `general_stages_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `check_in_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `initial_inspection_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `Wash_and_decontamination_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `paint_protection_film_stages` varchar(100) DEFAULT NULL,
  `PPF_cutting_alignment` varchar(100) DEFAULT NULL,
  `PPF_polish` varchar(100) DEFAULT NULL,
  `PPF_installation` varchar(100) DEFAULT NULL,
  `PPF_curing_phase` varchar(100) DEFAULT NULL,
  `paint_protection_film_stages_status` varchar(100) NOT NULL DEFAULT 'Pending',
  `PPF_cutting_alignment_status` varchar(100) NOT NULL DEFAULT 'Pending',
  `PPF_polish_status` varchar(100) NOT NULL DEFAULT 'Pending',
  `PPF_installation_status` varchar(100) NOT NULL DEFAULT 'Pending',
  `PPF_curing_phase_status` varchar(100) NOT NULL DEFAULT 'Pending',
  `ceramic_coating_stages` varchar(100) DEFAULT NULL,
  `cc_ceramic_coating_rep` varchar(100) DEFAULT NULL,
  `cc_paint_correction` varchar(100) DEFAULT NULL,
  `cc_ceramic_coating_application` varchar(100) DEFAULT NULL,
  `cc_curing_phase` varchar(100) DEFAULT NULL,
  `ceramic_coating_stages_status` varchar(100) NOT NULL DEFAULT 'Pending',
  `cc_ceramic_coating_rep_status` varchar(100) NOT NULL DEFAULT 'Pending',
  `cc_paint_correction_status` varchar(100) NOT NULL DEFAULT 'Pending',
  `cc_ceramic_coating_application_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `cc_curing_phase_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `window_tint_stages` varchar(255) DEFAULT NULL,
  `window_tint_measurement_cut` varchar(255) DEFAULT NULL,
  `window_tint_application` varchar(255) DEFAULT NULL,
  `window_tint_stages_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `window_tint_measurement_cut_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `window_tint_application_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `final_stages` varchar(255) DEFAULT NULL,
  `final_inspection` varchar(255) DEFAULT NULL,
  `completion_pickup` varchar(255) DEFAULT NULL,
  `final_stages_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `final_inspection_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `completion_pickup_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `ppf_full_front_end` varchar(11) DEFAULT NULL,
  `ppf_partial_front_end` varchar(11) DEFAULT NULL,
  `ppf_partial_kit` varchar(11) DEFAULT NULL,
  `ppf_rockers` varchar(11) DEFAULT NULL,
  `ppf_headlights` varchar(11) DEFAULT NULL,
  `ppf_luggage_strip` varchar(11) DEFAULT NULL,
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
  `os_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `work_orders`
--
ALTER TABLE `work_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `work_orders`
--
ALTER TABLE `work_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
