-- MySQL-partSIX-WHERE

-- Exo6.1

SELECT `framework`,`version` FROM `frameworks` WHERE `version` LIKE '2.%';

-- Exo6.2

SELECT `framework`,`version` FROM `frameworks` WHERE `id` = 1 OR `id` = 3;

--Exo6.3

SELECT `id`, `name`, `version`, `date` FROM `ide` WHERE `date` BETWEEN ("2010-01-01") AND ("2011-12-31");