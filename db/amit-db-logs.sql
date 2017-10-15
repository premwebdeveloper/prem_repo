-- ---------------------------Updated Table user_details ON 09-10-2017--------------------------

ALTER TABLE `user_religion_details` CHANGE `updated_on` `updated_on` DATETIME NULL DEFAULT NULL;
ALTER TABLE `user_religion_details` CHANGE `created_on` `created_on` DATETIME NULL DEFAULT NULL;

-- ---------------------------Updated Table user_details ON 15-10-2017--------------------------

ALTER TABLE `user_family_details` CHANGE `updated_at` `updated_at` DATETIME NOT NULL;
ALTER TABLE `user_family_details` CHANGE `created_at` `created_at` DATETIME NOT NULL;