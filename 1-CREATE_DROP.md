# SQL-Création et Suppression de bases de données.


## Exo1/

> mysql> CREATE DATABASE `languages`;

>> *Query OK, 1 row affected (0.01 sec)*



## Exo2/

> mysql> CREATE DATABASE `webDevelopment` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

>> *Query OK, 1 row affected (0.01 sec)*



## Exo 3/

> mysql> CREATE DATABASE IF NOT EXISTS `frameworks` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

>> *Query OK, 1 row affected (0.01 sec)*


## Exo4/

> mysql> CREATE DATABASE IF NOT EXISTS `languages` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

>> *Query OK, 1 row affected, 1 warning (0.00 sec)*


## Exo5/

> mysql> DROP DATABASE `languages`;

>> *Query OK, 0 rows affected (0.01 sec)*


## Exo6/

> mysql> DROP DATABASE IF EXISTS `frameworks`;

>> *Query OK, 0 rows affected (0.00 sec)*


## Exo7/

> mysql> DROP DATABASE IF EXISTS `languages`;

>> *Query OK, 0 rows affected, 1 warning (0.00 sec)*