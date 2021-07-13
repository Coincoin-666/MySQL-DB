-- MySQL-partFIVE-SELECT

-- Exo5.1

SELECT * FROM `languages`;

-- Exo5.2

SELECT `language`, `version` FROM `languages` WHERE IN ('php');

-- Exo5.3

SELECT `language`, `version` FROM `languages` WHERE `language` IN ('php', 'javascript');

-- Exo5.4

SELECT `language`, `version` FROM `languages` WHERE `id` IN (9, 11, 15);

-- Exo5.5

SELECT `language`, `version` FROM `languages` WHERE IN ('javascript') LIMIT 2;

-- Exo5.6

SELECT `language`, `version` FROM `languages` WHERE NOT IN ('php');

-- Exo5.7

SELECT `language`, `version` FROM `languages` ORDER BY `language`;