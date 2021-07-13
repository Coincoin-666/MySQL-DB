-- MySQL-partONE-CREATE_DROP_DATABASES

-- Exo1.1

CREATE DATABASE `languages` ;

-- Exo1.2

CREATE DATABASE `webDevelopment` CHARACTER SET `utf8mb4` COLLATE `utf8mb4_unicode_ci`;

-- Exo1.3

CREATE DATABASE IF NOT EXISTS `frameworks` CHARACTER SET `utf8mb4` COLLATE `utf8mb4_unicode_ci`;

-- Exo1.4

CREATE DATABASE IF NOT EXISTS `languages` CHARACTER SET `utf8mb4` COLLATE `utf8mb4_unicode_ci`;

-- Exo1.5

DROP DATABASE `languages`;

-- Exo1.6

DROP DATABASE IF EXISTS `frameworks`;

-- Exo1.7

DROP DATABASE IF EXISTS `languages`;
