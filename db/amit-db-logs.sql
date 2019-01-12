-- ---------------------------Updated Table user_details ON 09-10-2017--------------------------

ALTER TABLE `user_religion_details` CHANGE `updated_on` `updated_on` DATETIME NULL DEFAULT NULL;
ALTER TABLE `user_religion_details` CHANGE `created_on` `created_on` DATETIME NULL DEFAULT NULL;

-- ---------------------------Updated Table user_details ON 15-10-2017--------------------------

ALTER TABLE `user_family_details` CHANGE `updated_at` `updated_at` DATETIME NOT NULL;
ALTER TABLE `user_family_details` CHANGE `created_at` `created_at` DATETIME NOT NULL;


-- ---------------------------Updated Table user_details ON 30-11-2017--------------------------
ALTER TABLE `website_pages` CHANGE `page_description` `page_description` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;

-- ---------------------------Updated Table user_details ON 07-12-2017--------------------------
CREATE TABLE IF NOT EXISTS `website_pages` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website_pages`
--

INSERT INTO `website_pages` (`id`, `page_title`, `page_description`, `created_at`, `updated_at`, `status`) VALUES
(1, 'About Us', '<font face="Arial Black"><span style="font-size: 14px;">sdasdas</span></font>', '2017-11-21 00:00:00', '2017-11-21 00:00:00', 1),
(2, 'Aims And Objectives', 'Aims And Objectives', '2017-11-21 00:00:00', '2017-11-21 00:00:00', 1),
(3, 'Help Our Body', 'Help Our Body', '2017-11-21 00:00:00', '2017-11-21 00:00:00', 1),
(4, 'Join Us', 'Join Us', '2017-11-21 00:00:00', '2017-11-21 00:00:00', 1),
(5, 'abc_club', NULL, NULL, NULL, 1),
(6, 'annual_action_plan', NULL, NULL, NULL, 1),
(7, 'dharmshala', NULL, NULL, NULL, 1),
(8, 'digital_directory', NULL, NULL, NULL, 1),
(9, 'employee_services', NULL, NULL, NULL, 1),
(10, 'five_year_central_action_plan', NULL, NULL, NULL, 1),
(11, 'car_pooling', NULL, NULL, NULL, 1),
(12, 'heritage_cultural_festival', NULL, NULL, NULL, 1),
(13, 'history_motivational_story', NULL, NULL, NULL, 1),
(14, 'karya_pranali', NULL, NULL, NULL, 1),
(15, 'may_help_you_club', NULL, NULL, NULL, 1),
(16, 'member', NULL, NULL, NULL, 1),
(17, 'membership', NULL, NULL, NULL, 1),
(18, 'moa_registration', NULL, NULL, NULL, 1),
(19, 'motivational_article', NULL, NULL, NULL, 1),
(20, 'new_calendar', NULL, NULL, NULL, 1),
(21, 'news_exchange', NULL, NULL, NULL, 1),
(22, 'problem', NULL, NULL, NULL, 1),
(23, 'renowned_persons', NULL, NULL, NULL, 1),
(24, 'representative_members', NULL, NULL, NULL, 1),
(25, 'sangthan_pranali', NULL, NULL, NULL, 1),
(26, 'suggestion', NULL, NULL, NULL, 1),
(27, 'tolet_services', NULL, NULL, NULL, 1),
(28, 'vaish_panchayat', NULL, NULL, NULL, 1),
(29, 'working_social_religious_units', NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `website_pages`
--
ALTER TABLE `website_pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `website_pages`
--
ALTER TABLE `website_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;

-- ---------------------------ALTER TABLE `user_details` ADD ON 12-01-2019--------------------------
ALTER TABLE `user_details` ADD `antim_pad` VARCHAR(255) NOT NULL AFTER `donate_hundred`, ADD `vibhag` VARCHAR(255) NOT NULL AFTER `antim_pad`, ADD `pad` VARCHAR(255) NOT NULL AFTER `vibhag`;

-- ---------------------------ALTER TABLE `user_details` CHANGE ON 12-01-2019--------------------------
ALTER TABLE `user_details` CHANGE `antim_pad` `antim_pad` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL, CHANGE `vibhag` `vibhag` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL, CHANGE `pad` `pad` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;

-- ---------------------------ALTER TABLE `user_family_details` CHANGE ON 12-01-2019--------------------------
ALTER TABLE `user_family_details` CHANGE `email` `email` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL, CHANGE `phone` `phone` VARCHAR(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;