-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2017 at 01:47 PM
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
(7, '7', 'prem', 'saini', 'Prem Saini', 'premsaini9602@gmail.com', '$2y$10$.Y7YULhhGKDjv9vOMh5vfuf7doKWVoV50Odhj46wFM5BTrkfifd42', '7RWcW9UKpjt5mK3RLvQSITvvz8TfWc6fODYBJPf5J4rN0H3wmG0qbeixN5sM', NULL, '80039475602', '2017-10-23 09:24:59', '2017-10-24 08:52:20', 1),
(10, '7', 'sumit kumar', 'sharma', 'sumit kumarsharma', 'sumitkumar@gmail.com', '$2y$10$0F1nmJR/nfakSNbcHivdHeZ8jONOSOR13K8BnFzyXrdMZdcSCGFzu', NULL, NULL, '9602947878', '2017-10-23 09:31:32', '2017-10-23 09:31:32', 0),
(11, '7', 'Prem', 'saini', 'Premsaini', 'kuku@gmail.com', '$2y$10$.Y7YULhhGKDjv9vOMh5vfuf7doKWVoV50Odhj46wFM5BTrkfifd42', NULL, NULL, '96278454545', '2017-10-24 09:46:39', '2017-10-24 09:46:39', 0),
(12, NULL, 'akshay', 'jangid', 'akshayjangid', 'akshayjangid9309@gmail.com', '$2y$10$awMmqSAs3Qh8L/PxiqiAseQFWin6oZgoXLpMWflPqmcTqqi2TS2OO', NULL, '5GbVo3w5LMNeBZn2OPrPfQgNw2XJ0NCv7SdHdvaj', '7690016967', '2017-10-26 06:21:41', '2017-10-26 06:21:41', 0),
(18, NULL, 'kuku', 'Saini', 'kukuSaini', 'premsinghania2402@gmail.com', '$2y$10$jHMDJmcUnUoE5Nh40ZgCTuldKPunY9I0ehREqWtdPhZjolokbaiAm', NULL, 'mzG9TxpxMsWa6GyFF77CyEB05tuQZwdWvkPUAZAn', '9602947878', '2017-11-13 07:35:36', '2017-11-13 07:35:36', 0),
(21, NULL, 'prem', NULL, 'prem', 'p@g.com', '$2y$10$K/A/HdzPVT9zaWkDHJEni.STSEU/pW5ILiHjY.axAi6Kh28LLGz9W', NULL, 'JoVyXZ2sW2BQxLzlg6GhQ3aRqalVlIHIpm6MxdLB', '9602947878', '2017-11-13 08:53:52', '2017-11-13 08:53:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `blood_group` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `pin_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `name`, `lastname`, `email`, `phone`, `image`, `bio`, `gender`, `dob`, `blood_group`, `address`, `pin_code`, `district`, `state`, `country`, `created_at`, `updated_at`, `status`) VALUES
(6, 7, 'Prem', 'Saini', 'premsaini9602@gmail.com', '9602947878', '7f4e43.PNG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-15 04:18:52', '2017-10-24 09:47:04', 1),
(7, 18, 'kuku', 'Saini', 'premsinghania2402@gmail.com', '9602947878', 'user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-13 07:35:40', '2017-11-13 07:35:40', 0),
(8, 20, 'prem', NULL, 'p@g.com', '9602947878', 'user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-13 08:43:20', '2017-11-13 08:43:20', 0),
(9, 21, 'prem', NULL, 'p@g.com', '9602947878', 'user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-13 08:53:52', '2017-11-13 08:53:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_family_details`
--

CREATE TABLE `user_family_details` (
  `id` int(11) NOT NULL,
  `family_head_id` int(11) NOT NULL,
  `f_member_user_id` int(11) DEFAULT NULL COMMENT 'family member''s user table auto increment id',
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `gender` int(11) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(15) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `manglik` int(11) DEFAULT NULL,
  `married` int(11) DEFAULT NULL,
  `marriage_date` date DEFAULT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `profession` int(11) DEFAULT NULL,
  `ph_Divyangata` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_family_details`
--

INSERT INTO `user_family_details` (`id`, `family_head_id`, `f_member_user_id`, `fname`, `lname`, `email`, `mobile`, `gender`, `dob`, `blood_group`, `image`, `manglik`, `married`, `marriage_date`, `experience`, `profession`, `ph_Divyangata`, `created_at`, `updated_at`, `status`) VALUES
(8, 7, 10, 'sumit kumar', 'sharma', 'sumitkumar@gmail.com', '9602947878', 2, '2010-06-23', 'AB+', NULL, 2, 1, '2017-10-25', '6 moths', 1, 1, '2017-10-23 15:01:32', '2017-10-23 15:01:32', 1),
(9, 7, 11, 'Prem', 'saini', 'kuku@gmail.com', '96278454545', 1, '2017-10-20', NULL, 'bdb67a.PNG', 1, 1, NULL, NULL, 1, 2, '2017-10-24 15:16:39', '2017-10-24 15:16:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_family_optional_details`
--

CREATE TABLE `user_family_optional_details` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_optional_details`
--

CREATE TABLE `user_optional_details` (
  `id` int(11) NOT NULL
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
(12, 2, 21, '2017-11-13 08:53:52', '2017-11-13 08:53:52');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_family_details`
--
ALTER TABLE `user_family_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
