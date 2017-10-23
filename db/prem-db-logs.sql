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