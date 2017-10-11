-- ---------------------------Updated Table user_details ON 09-10-2017--------------------------

ALTER TABLE `user_details` ADD `image` VARCHAR(255) NULL AFTER `phone`;

ALTER TABLE `user_details` ADD `bio` TEXT NULL AFTER `image`;

-- ---------------------------Updated Table user_details ON 11-10-2017--------------------------

ALTER TABLE `user_details` ADD `gender` VARCHAR(10) NULL AFTER `bio`, ADD `dob` VARCHAR(10) NULL AFTER `gender`, ADD `blood_group` VARCHAR(10) NULL AFTER `dob`, ADD `address` TEXT NULL AFTER `blood_group`, ADD `pin_code` VARCHAR(10) NULL AFTER `address`, ADD `district` VARCHAR(255) NULL AFTER `pin_code`, ADD `state` VARCHAR(255) NULL AFTER `district`, ADD `country` VARCHAR(255) NULL AFTER `state`;

ALTER TABLE `user_details` CHANGE `dob` `dob` DATE NULL DEFAULT NULL;