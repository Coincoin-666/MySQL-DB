-- MySQL-partSEVEN-DELETE_UPDATE

-- Exo7.1

DELETE FROM `languages` WHERE `language`='html';

-- Exo7.2

UPDATE `frameworks` SET `framework`='Symfony2' WHERE `framework`='symfony';

-- Exo7.3

UPDATE `languages` SET `version`='v5.1' WHERE `language`='javascript' AND `version`='v5';