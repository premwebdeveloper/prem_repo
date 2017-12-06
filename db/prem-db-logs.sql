-- ---------------------------Updated Table user_details ON 09-10-2017--------------------------

ALTER TABLE `user_details` ADD `image` VARCHAR(255) NULL AFTER `phone`;

ALTER TABLE `user_details` ADD `bio` TEXT NULL AFTER `image`;

-- ---------------------------Updated Table user_details ON 11-10-2017--------------------------

ALTER TABLE `user_details` ADD `gender` VARCHAR(10) NULL AFTER `bio`, ADD `dob` VARCHAR(10) NULL AFTER `gender`, ADD `blood_group` VARCHAR(10) NULL AFTER `dob`, ADD `address` TEXT NULL AFTER `blood_group`, ADD `pin_code` VARCHAR(10) NULL AFTER `address`, ADD `district` VARCHAR(255) NULL AFTER `pin_code`, ADD `state` VARCHAR(255) NULL AFTER `district`, ADD `country` VARCHAR(255) NULL AFTER `state`;

ALTER TABLE `user_details` CHANGE `dob` `dob` DATE NULL DEFAULT NULL;


CREATE TABLE `user_religion_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cast` varchar(50) DEFAULT NULL,
  `sub_cast` varchar(50) DEFAULT NULL,
  `ghatak` varchar(50) DEFAULT NULL,
  `sub_ghatak` varchar(50) DEFAULT NULL,
  `gotra` varchar(50) DEFAULT NULL,
  `sub_gotra` varchar(50) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `updated_on` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `user_religion_details`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_religion_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

-- ---------------------------Created Table user_extra_details ON 12-10-2017--------------------------

CREATE TABLE `user_extra_details` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `user_extra_details`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_extra_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

-- ---------------------------Created Table user_family_details ON 12-10-2017--------------------------

CREATE TABLE `user_family_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
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
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `user_family_details`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_family_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;


-- ---------------------------Updated Table users ON 15-10-2017--------------------------
ALTER TABLE `users` ADD `family_id` VARCHAR(10) NOT NULL AFTER `id`;
ALTER TABLE `users` CHANGE `family_id` `family_head_id` VARCHAR(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL;
ALTER TABLE `users` CHANGE `family_head_id` `family_head_id` VARCHAR(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;

-- ---------------------------Updated Table user_family_details ON 16-10-2017--------------------------

ALTER TABLE `user_family_details` ADD `f_member_user_id` INT NOT NULL AFTER `user_id`;

-- ---------------------------CREATEED Table password_resets ON 23-10-2017--------------------------

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

ALTER TABLE `user_family_details` CHANGE `user_id` `head_user_id` INT(11) NOT NULL;
ALTER TABLE `user_family_details` CHANGE `head_user_id` `family_head_id` INT(11) NOT NULL;
ALTER TABLE `user_family_details` DROP `f_member_user_id`;

CREATE TABLE `family_member_marriagable_details` (
  `id` int(11) NOT NULL,
  `family_member_id` int(11) NOT NULL COMMENT 'user_family_details tables aotp increment id',
  `family_head_id` int(11) NOT NULL COMMENT 'family head id',
  `color` varchar(50) DEFAULT NULL,
  `height` varchar(50) DEFAULT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `specs_uses` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `family_member_marriagable_details`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `family_member_marriagable_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

ALTER TABLE `user_family_details` ADD `f_member_user_id` INT NULL COMMENT 'family member\'s user table auto increment id' AFTER `family_head_id`;


-- ---------------------------CREATEED Table 'website_pages' ON 23-10-2017--------------------------
CREATE TABLE `website_pages` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `website_pages` (`id`, `page_title`, `page_description`, `created_at`, `updated_at`, `status`) VALUES
(1, 'About Us', 'About Us', '2017-11-21 00:00:00', '2017-11-21 00:00:00', 1),
(2, 'Aims And Objectives', 'Aims And Objectives', '2017-11-21 00:00:00', '2017-11-21 00:00:00', 1),
(3, 'Help Our Body', 'Help Our Body', '2017-11-21 00:00:00', '2017-11-21 00:00:00', 1),
(4, 'Join Us', 'Join Us', '2017-11-21 00:00:00', '2017-11-21 00:00:00', 1);

ALTER TABLE `website_pages`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `website_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

-- ---------------------------CREATEED Table 'suggestions' ON 23-10-2017--------------------------
CREATE TABLE `suggestions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `suggestion` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `suggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

-- ---------------------------CREATEED Table 'problems' ON 23-10-2017--------------------------
CREATE TABLE `problems` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `problem` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `problems`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `problems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

-- ---------------------------Updated Table 'website_pages' ON 06-12-2017--------------------------
ALTER TABLE `website_pages` CHANGE `created_at` `created_at` DATETIME NULL, CHANGE `updated_at` `updated_at` DATETIME NULL;