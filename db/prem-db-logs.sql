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