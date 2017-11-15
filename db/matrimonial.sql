-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 03:24 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrimonial`
--

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
(1, '2017_09_26_150949_create_user_details_table', 1),
(2, '2017_09_30_091236_create_roles_table', 2),
(3, '2017_09_30_092914_user_roles', 3);

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
('premsaini9602@gmail.com', '$2y$10$f/uoEJ/fH2Yl.cIAuyeU/e9Q9F49iXp3Wwen4tg4WzCxhzSMBNv8a', '2017-11-13 07:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `family_head_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify_token` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `family_head_id`, `name`, `lastname`, `username`, `email`, `password`, `remember_token`, `verify_token`, `phone`, `created_at`, `updated_at`, `status`) VALUES
(1, '', 'Admin', 'istrator', 'administrator', 'admin@admin.com', '$2y$10$6BPkrI9Op4gET1PlpMWHtu99uPXhL2ViLC9Ep6hJjpvtB8FFbuPQy', 'jnoBcSP8faSAS4bAgMHgA6p4z4h1p4Bo7dxI2rRE6DqHOvoeDDmpmV3cf83D', NULL, '9602947878', '2017-10-02 18:30:00', '2017-10-02 18:30:00', 1),
(2, NULL, 'Prem', NULL, 'Prem', 'premsaini9602@gmail.com', '$2y$10$8LhPNFGJSjzFhkJq.0cjsuQT9vk1FvJg2bVWebfb29zgKbT5BFBvi', NULL, NULL, '9602947878', '2017-11-15 07:10:05', '2017-11-15 07:10:17', 1),
(3, NULL, 'Prem', NULL, 'Prem', 'prem_saini@hotmail.com', '$2y$10$Xy64m2xv5qeDjHnpIjjGrugSEDnnpWphwYB.sh0Ck4mJkGIbWJWKy', NULL, NULL, '8005609866', '2017-11-15 07:10:44', '2017-11-15 07:11:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_husband_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp_mobile` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sampraday` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cast` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_cast` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gotra` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bunk` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin_place` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `married` tinyint(1) DEFAULT NULL,
  `marriage_date` date DEFAULT NULL,
  `life_partner_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_qualification` text COLLATE utf8mb4_unicode_ci,
  `experience_field` text COLLATE utf8mb4_unicode_ci,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seva_nivrat` tinyint(1) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `residential_address` text COLLATE utf8mb4_unicode_ci,
  `residential_pincode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residential_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residential_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation_address` text COLLATE utf8mb4_unicode_ci,
  `occupation_pincode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation_district` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation_state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_hours` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_field` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_hours_according` tinyint(1) DEFAULT NULL,
  `donate_hundred` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `name`, `father_husband_name`, `email`, `whatsapp_mobile`, `phone`, `sampraday`, `cast`, `sub_cast`, `gotra`, `bunk`, `origin_place`, `married`, `marriage_date`, `life_partner_name`, `education`, `special_qualification`, `experience_field`, `occupation`, `seva_nivrat`, `image`, `bio`, `gender`, `dob`, `residential_address`, `residential_pincode`, `residential_district`, `residential_state`, `occupation_address`, `occupation_pincode`, `occupation_district`, `occupation_state`, `social_hours`, `social_field`, `social_hours_according`, `donate_hundred`, `created_at`, `updated_at`, `status`) VALUES
(1, 2, 'Prem', 'pitaji', 'premsaini9602@gmail.com', '8003947560', '9602947878', 'राधास्वामी', 'mali', 'saini', 'tundwal', 'singhania', 'khetri nagar', 1, '2017-02-18', 'komal', 'b.tech', 'engineer', 'development', 'job', 1, 'user.png', 'My Bio', '1', '1989-02-24', 'khetri nagar', '333504', 'jhunjhunu', 'raj', 'unnati tower', '302039', 'jaipur', 'rajasthan', '2', 'jhunjhunu', 2, 2, '2017-11-15 12:40:05', '2017-11-15 14:23:23', 1),
(2, 3, 'Prem', NULL, 'prem_saini@hotmail.com', NULL, '8005609866', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-15 12:40:44', '2017-11-15 12:41:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_family_details`
--

CREATE TABLE `user_family_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `family_head_id` int(11) NOT NULL COMMENT 'family head user id',
  `f_member_user_id` int(11) DEFAULT NULL COMMENT 'family member''s user table auto increment id ',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_husband_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation_to_head_member` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp_mobile` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sampraday` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cast` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_cast` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gotra` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bunk` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin_place` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `married` tinyint(1) DEFAULT NULL,
  `marriage_date` date DEFAULT NULL,
  `life_partner_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_qualification` text COLLATE utf8mb4_unicode_ci,
  `experience_field` text COLLATE utf8mb4_unicode_ci,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seva_nivrat` tinyint(1) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `residential_address` text COLLATE utf8mb4_unicode_ci,
  `residential_pincode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residential_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residential_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation_address` text COLLATE utf8mb4_unicode_ci,
  `occupation_pincode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation_district` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation_state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_hours` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_field` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_hours_according` tinyint(1) DEFAULT NULL,
  `donate_hindred` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_family_optional_details`
--

CREATE TABLE `user_family_optional_details` (
  `id` int(11) NOT NULL,
  `family_head_id` int(11) NOT NULL,
  `f_member_user_id` int(11) DEFAULT NULL COMMENT 'family member''s user table auto increment id',
  `blood_group` tinyint(1) DEFAULT NULL,
  `blood_information` tinyint(1) DEFAULT NULL,
  `consumer_forum` tinyint(1) DEFAULT NULL,
  `club_member` tinyint(1) DEFAULT NULL,
  `abc_club_member` tinyint(1) DEFAULT NULL,
  `project_community` tinyint(1) DEFAULT NULL,
  `vaishya_panchayat` tinyint(1) DEFAULT NULL,
  `donate_body_parts` tinyint(1) DEFAULT NULL,
  `samaj_sanstha` varchar(255) DEFAULT NULL,
  `samaj_patrika` varchar(255) DEFAULT NULL,
  `self_home` tinyint(1) DEFAULT NULL,
  `vehicle` varchar(10) DEFAULT NULL,
  `pan_card` varchar(20) DEFAULT NULL,
  `adhar_card` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_optional_details`
--

CREATE TABLE `user_optional_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blood_group` tinyint(1) DEFAULT NULL,
  `blood_information` tinyint(1) DEFAULT NULL,
  `consumer_forum` tinyint(1) DEFAULT NULL,
  `club_member` tinyint(1) DEFAULT NULL,
  `abc_club_member` tinyint(1) DEFAULT NULL,
  `project_community` tinyint(1) DEFAULT NULL,
  `vaishya_panchayat` tinyint(1) DEFAULT NULL,
  `donate_body_parts` tinyint(1) DEFAULT NULL,
  `samaj_sanstha` varchar(255) DEFAULT NULL,
  `samaj_patrika` varchar(255) DEFAULT NULL,
  `self_home` tinyint(1) DEFAULT NULL,
  `vehicle` varchar(10) DEFAULT NULL,
  `family_cards` varchar(20) DEFAULT NULL,
  `pan_card` varchar(20) DEFAULT NULL,
  `adhar_card` varchar(20) DEFAULT NULL,
  `annual_income` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-09-30 04:12:29', '2017-09-30 04:12:29'),
(2, 2, 2, '2017-10-03 07:26:55', '2017-10-03 07:26:55'),
(3, 2, 3, '2017-10-04 09:21:32', '2017-10-04 09:21:32'),
(4, 2, 3, '2017-10-14 08:46:13', '2017-10-14 08:46:13'),
(5, 2, 4, '2017-10-14 08:49:11', '2017-10-14 08:49:11'),
(6, 2, 5, '2017-10-14 08:51:15', '2017-10-14 08:51:15'),
(7, 2, 6, '2017-10-15 04:16:24', '2017-10-15 04:16:24'),
(8, 2, 7, '2017-10-15 04:18:52', '2017-10-15 04:18:52'),
(9, 2, 18, '2017-11-13 07:35:40', '2017-11-13 07:35:40'),
(10, 2, 19, '2017-11-13 08:39:30', '2017-11-13 08:39:30'),
(11, 2, 20, '2017-11-13 08:43:20', '2017-11-13 08:43:20'),
(12, 2, 21, '2017-11-13 08:53:52', '2017-11-13 08:53:52'),
(13, 2, 2, '2017-11-15 07:10:05', '2017-11-15 07:10:05'),
(14, 2, 3, '2017-11-15 07:10:44', '2017-11-15 07:10:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_family_details`
--
ALTER TABLE `user_family_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_family_optional_details`
--
ALTER TABLE `user_family_optional_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_optional_details`
--
ALTER TABLE `user_optional_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_family_details`
--
ALTER TABLE `user_family_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_family_optional_details`
--
ALTER TABLE `user_family_optional_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_optional_details`
--
ALTER TABLE `user_optional_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
