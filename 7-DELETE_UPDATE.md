# SQL-Suppression et modification de données


## Exo1/

> DELETE FROM `languages`WHERE `language`='html';

>> Query OK, 1 row affected (0.01 sec)

****

## Exo2/

> UPDATE `frameworks` SET `framework`='Symfony2' WHERE `framework`='symphony';

>> Query OK, 2 rows affected (0.00 sec)
>> Rows matched: 2  Changed: 2  Warnings: 0

****

## Exo3/

> UPDATE `languages` SET `versions`='v5.1' WHERE `language`='javascript' AND `versions`='v5';

>> Query OK, 1 row affected (0.01 sec)
>> Rows matched: 1 Changed: 1 Warning: 0
