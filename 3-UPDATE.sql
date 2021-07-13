-- MySQL-partTHREE-UPDATES

-- Exo3.1

use webDevelopment;

ALTER TABLE `languages` ADD `versions` VARCHAR(100);

-- Exo3.2

ALTER TABLE `frameworks` ADD `versions` INT;

-- Exo3.3

ALTER TABLE `frameworks` CHANGE `versions` `version` VARCHAR(100);

-- Exo3.4

ALTER TABLE `frameworks` CHANGE `name` `framework` VARCHAR(100);

-- Exo3.5

ALTER TABLE `languages` MODIFY `versions` VARCHAR(10);

-- TP

use codex;

ALTER TABLE `clients` DROP COLUMN `secondPhoneNumber`;

ALTER TABLE `clients` CHANGE `firstPhoneNumber` `phoneNumber` INT(10);

ALTER TABLE `clients` MODIFY `phoneNumber` VARCHAR(10);

ALTER TABLE `clients` ADD `zipCode` VARCHAR(10);

ALTER TABLE `clients` ADD `city` VARCHAR(100);
