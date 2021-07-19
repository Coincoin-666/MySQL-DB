-- SQL-8 – Les Jointures

-- Exo1
-- Afficher tous les frameworks associés à leur langages. Si un langage n'a pas de framework, l'afficher aussi. (Merci Franck pour la correction)

SELECT `languages`.`name` AS `languagesName`, `frameworks`.`name` AS `frameworksName` FROM `frameworks` RIGHT JOIN `languages` ON `frameworks`.`languagesId`=`languages`.`id`;

-- Retourne un tableau de 2 colonnes: languagesName et frameworksName
-- Les 4 dernières lignes de frameworksName sont NULL.

-- Exo2
-- Afficher tous les frameworks associés à leur langages. Si un language n'a pas de framework, ne pas l'afficher.

SELECT `languages`.`name` AS `languagesName`, `frameworks`.`name` AS `frameworksName` FROM `frameworks` INNER JOIN `languages` ON `frameworks`.`languagesId`=`languages`.`id`;

-- INNER JOIN permet de sélectionner uniquement les lignes qui ont une correspondance.
-- Les 4 dernières lignes n'apparaissent plus.

-- Exo3
-- Afficher le nombre de frameworks qu'à un langage.

-- On SELECT la colonne `name` du tableau `languages`, et on COUNT le nombre de fois que chaque `name` unique apparaît dans le tableau `framework` et on renomme la colonne numberofframworks
SELECT `languages`.`name`,  COUNT(`frameworks`.`name`) AS numberOfFrameworks
FROM `languages` 
INNER JOIN `frameworks`
ON `languages`.`id` = `frameworks`.`languagesId`
GROUP BY `languages`.`name` 
ORDER BY numberOfFrameworks DESC;

-- Voilà donc c'est super cool. Encore merci à la correction parce que façon j'bite que dalle.

--Exo4
SELECT `languages`.`name`, COUNT(`frameworks`.`name`) AS NoF
FROM `frameworks`
INNER JOIN `languages`
ON `frameworks`.`languagesId` = `languages`.`id`
GROUP BY `languages`.`name`
HAVING NoF>3;