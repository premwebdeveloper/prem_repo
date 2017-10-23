-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2017 at 10:06 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matrimonial`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_09_26_150949_create_user_details_table', 1),
(2, '2017_09_30_091236_create_roles_table', 2),
(3, '2017_09_30_092914_user_roles', 3);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `family_head_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify_token` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `family_head_id`, `name`, `lastname`, `username`, `email`, `password`, `remember_token`, `verify_token`, `phone`, `created_at`, `updated_at`, `status`) VALUES
(1, '', 'Admin', 'istrator', 'administrator', 'admin@admin.com', '$2y$10$6BPkrI9Op4gET1PlpMWHtu99uPXhL2ViLC9Ep6hJjpvtB8FFbuPQy', 'lZ9qIYSQvbBlT6VFgo8q6MyRJdcvtvICK9x80Va98HT5pi3WI8yRCE7mmGAK', NULL, '9602947878', '2017-10-02 18:30:00', '2017-10-02 18:30:00', 1),
(2, '', 'Prem Kumar', 'Saini', 'Prem KumarSaini', 'prem_saini@hotmail.com', '$2y$10$7coTMDxeMT2OIxvfCcDeke9X7sh8AlHtEHXIp8fyjib8k3YLpePG2', '7BZWR0TdLZ7HsKVYgZsqjhpFCWPOlfoakrKeac1TVDSl7Ax4FA6i8xJtzhib', NULL, '9602947878', '2017-10-03 07:26:55', '2017-10-03 07:28:41', 1),
(4, '', 'sanjana', 'kalra', 'sanjanakalra', 'sanjanakalra.7658@gmail.com', '$2y$10$ph3zrQdLYFliP2KrI6H1kus/oVT3Tm7oPR/uGBDqTMYm/BeaBV32a', NULL, '', '9982867606', '2017-10-14 08:11:31', '2017-10-14 08:11:31', 1),
(6, '', 'Amit', 'Sharma', 'AmitSharma', 'amitsharma6681@gmail.com', '$2y$10$z1d.bFP5V2Z.0aS8W..4ZedLgpji/t1Fn4bP8bNo/X5RT80i3Bt4i', 'AL7PG5mWjt9AUTAjRmuzjABcKfVlz0oGu7NekSBZc1wT3zuzXu6iOOwCp1oP', NULL, '8003947560', '2017-10-16 08:27:15', '2017-10-14 09:08:33', 1),
(10, '6', 'Avinash', 'Tamrayat', 'AvinashTamrayat', 'avinash@gmail.com', '$2y$10$z1d.bFP5V2Z.0aS8W..4ZedLgpji/t1Fn4bP8bNo/X5RT80i3Bt4i', NULL, NULL, '8003947560', '2017-10-16 09:04:00', '2017-10-16 09:04:00', 0),
(11, '6', 'Ravindra nath', 'Bhati', 'Ravindra nathBhati', 'ravibhati074@gmail.com', '$2y$10$z1d.bFP5V2Z.0aS8W..4ZedLgpji/t1Fn4bP8bNo/X5RT80i3Bt4i', NULL, NULL, '9982867606', '2017-10-16 08:52:34', '2017-10-16 08:52:34', 0),
(19, '6', 'Prem', 'Sharma', 'PremSharma', 'premkumar@gmail.com', '$2y$10$z1d.bFP5V2Z.0aS8W..4ZedLgpji/t1Fn4bP8bNo/X5RT80i3Bt4i', NULL, NULL, '9982867606', '2017-10-16 08:20:59', NULL, 0),
(20, '6', 'Amit', 'Sharma', 'AmitSharma', 'ravibhati074@gmail.com', '$2y$10$z1d.bFP5V2Z.0aS8W..4ZedLgpji/t1Fn4bP8bNo/X5RT80i3Bt4i', NULL, NULL, '8003947560', '2017-10-16 09:06:41', NULL, 0),
(21, '6', 'Prem Kumar', 'Sharma', 'Prem KumarSharma', 'ravibhati074@gmail.com', '$2y$10$z1d.bFP5V2Z.0aS8W..4ZedLgpji/t1Fn4bP8bNo/X5RT80i3Bt4i', NULL, NULL, '8003947560', '2017-10-16 09:09:33', NULL, 0),
(22, '6', 'Prem Kumar', 'Sharma', 'Prem KumarSharma', 'ravibhati074@gmail.com', '$2y$10$z1d.bFP5V2Z.0aS8W..4ZedLgpji/t1Fn4bP8bNo/X5RT80i3Bt4i', NULL, NULL, '9982867606', '2017-10-16 09:13:55', NULL, 0),
(23, '6', 'sanjana', 'kalra', 'sanjanakalra', 'akki.7658@gmail.com', '$2y$10$z1d.bFP5V2Z.0aS8W..4ZedLgpji/t1Fn4bP8bNo/X5RT80i3Bt4i', NULL, NULL, '9876543210', '2017-10-16 23:52:03', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `name`, `lastname`, `email`, `phone`, `image`, `bio`, `gender`, `dob`, `blood_group`, `address`, `pin_code`, `district`, `state`, `country`, `created_at`, `updated_at`, `status`) VALUES
(1, 2, 'Prem Kumar', 'Saini', 'prem_saini@hotmail.com', '9602947878', 'jewelinthecrown-620x245.jpg', NULL, '1', '1989-02-16', 'o+', 'F 102 Unnati Tower, Vidhayadhar Nagar', '302039', 'jhunjhunu', 'Rajasthan', 'India', '2017-10-03 07:26:55', '2017-10-14 08:07:19', 1),
(3, 4, 'sanjana', 'kalra', 'sanjanakalra.7658@gmail.com', '9982867606', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-14 08:11:31', '2017-10-14 08:11:31', 0),
(4, 6, 'Amit', 'Sharma', 'amitsharma6681@gmail.com', '8003947560', 'user.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', '1990-05-28', 'AB+', 'F 102, Unnati Tower, Vidhyadhar Nagar', '302023', 'Jaipur', 'Rajasthan', 'India', '2017-10-14 09:07:31', '2017-10-14 09:08:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_extra_details`
--

CREATE TABLE IF NOT EXISTS `user_extra_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `donate_body_part` int(11) DEFAULT NULL,
  `farm_member` int(11) DEFAULT NULL,
  `club_member` int(11) DEFAULT NULL,
  `abc_club_member` int(11) DEFAULT NULL,
  `project_committee` int(11) DEFAULT NULL,
  `blood_donate` int(11) DEFAULT NULL,
  `vaishya_vahini` int(11) DEFAULT NULL,
  `year_calendar` int(11) DEFAULT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_extra_details`
--

INSERT INTO `user_extra_details` (`id`, `user_id`, `donate_body_part`, `farm_member`, `club_member`, `abc_club_member`, `project_committee`, `blood_donate`, `vaishya_vahini`, `year_calendar`, `created_on`, `updated_on`, `status`) VALUES
(1, 2, 2, 1, 1, 2, 1, 2, 1, 2, '0000-00-00', '2017-10-14', 1),
(2, 6, 1, 2, 2, 1, 2, 2, 1, 2, '2017-10-14', '2017-10-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_family_details`
--

CREATE TABLE IF NOT EXISTS `user_family_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `f_member_user_id` int(11) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_family_details`
--

INSERT INTO `user_family_details` (`id`, `user_id`, `f_member_user_id`, `fname`, `lname`, `email`, `mobile`, `gender`, `dob`, `blood_group`, `image`, `manglik`, `married`, `marriage_date`, `experience`, `profession`, `ph_Divyangata`, `created_at`, `updated_at`, `status`) VALUES
(4, 6, 10, 'Avinash', 'Tamrayat', 'avinash@gmail.com', '8003947560', 1, '1990-05-28', 'O+', NULL, 1, 2, NULL, '5 Years', 1, 2, '2017-10-16 14:34:00', '2017-10-16 14:34:00', 1),
(5, 6, 11, 'Ravindra nath', 'Bhati', 'ravibhati074@gmail.com', '9982867606', 1, '1990-05-28', 'O+', NULL, 1, 1, '2016-01-25', '2 Years', 1, 2, '2017-10-16 14:22:34', '2017-10-16 14:22:34', 1),
(6, 6, 19, 'Prem', 'Sharma', 'premkumar@gmail.com', '9982867606', 1, '1989-02-24', 'O-', NULL, 2, 2, NULL, '4 years', 1, 2, '2017-10-16 13:50:59', '2017-10-16 13:50:59', 1),
(7, 6, 20, 'Amit', 'Sharma', 'ravibhati074@gmail.com', '8003947560', 1, '1990-05-28', NULL, NULL, 1, 1, NULL, NULL, 1, 2, '2017-10-16 14:36:41', '2017-10-16 14:36:41', 1),
(8, 6, 21, 'Prem Kumar', 'Sharma', 'ravibhati074@gmail.com', '8003947560', 1, '1990-05-28', NULL, NULL, 1, 1, NULL, NULL, 1, 2, '2017-10-16 14:39:33', '2017-10-16 14:39:33', 0),
(9, 6, 22, 'Prem Kumar', 'Sharma', 'ravibhati074@gmail.com', '9982867606', 1, '1990-05-28', NULL, NULL, 1, 1, NULL, NULL, 1, 2, '2017-10-16 14:43:55', '2017-10-16 14:43:55', 0),
(10, 6, 23, 'sanjana', 'kalra', 'akki.7658@gmail.com', '9876543210', 1, '1990-05-28', NULL, NULL, 1, 1, NULL, NULL, 1, 2, '2017-10-17 05:22:03', '2017-10-17 05:22:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_religion_details`
--

CREATE TABLE IF NOT EXISTS `user_religion_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cast` varchar(50) DEFAULT NULL,
  `sub_cast` varchar(50) DEFAULT NULL,
  `ghatak` varchar(50) DEFAULT NULL,
  `sub_ghatak` varchar(50) DEFAULT NULL,
  `gotra` varchar(50) DEFAULT NULL,
  `sub_gotra` varchar(50) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_religion_details`
--

INSERT INTO `user_religion_details` (`id`, `user_id`, `cast`, `sub_cast`, `ghatak`, `sub_ghatak`, `gotra`, `sub_gotra`, `created_on`, `updated_on`, `status`) VALUES
(2, 2, 'agarwal', 'rathilathi', 'rathi1', 'rathi12', 'rathi132', 'rathi142', NULL, '2017-10-14 12:26:14', 1),
(3, 6, 'Brahman', 'Brahman', 'Brahman', 'Brahman', 'Biwal', 'Biwal', '2017-10-14 14:37:31', '2017-10-15 05:49:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
  `id` int(10) unsigned NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-09-30 04:12:29', '2017-09-30 04:12:29'),
(2, 2, 2, '2017-10-03 07:26:55', '2017-10-03 07:26:55'),
(3, 2, 3, '2017-10-14 08:08:01', '2017-10-14 08:08:01'),
(4, 2, 4, '2017-10-14 08:11:31', '2017-10-14 08:11:31'),
(5, 2, 5, '2017-10-14 09:03:49', '2017-10-14 09:03:49'),
(6, 2, 6, '2017-10-14 09:07:31', '2017-10-14 09:07:31');

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
-- Indexes for table `user_extra_details`
--
ALTER TABLE `user_extra_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_family_details`
--
ALTER TABLE `user_family_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_religion_details`
--
ALTER TABLE `user_religion_details`
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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_extra_details`
--
ALTER TABLE `user_extra_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_family_details`
--
ALTER TABLE `user_family_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_religion_details`
--
ALTER TABLE `user_religion_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
