-- ---------------------------Updated Table user_details ON 09-10-2017--------------------------

ALTER TABLE `user_details` ADD `image` VARCHAR(255) NULL AFTER `phone`;

ALTER TABLE `user_details` ADD `bio` TEXT NULL AFTER `image`;