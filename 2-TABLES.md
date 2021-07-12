# SQL-Création de tables


## Exo1/

> use WebDevelopment;

>> Database changed

> CREATE TABLE IF NOT EXISTS `languages` ( id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, language VARCHAR(100));

>> Query OK, 0 rows affected (0.12 sec)

****

## Exo2/

> CREATE TABLE IF NOT EXISTS `tools` ( id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, language VARCHAR(100) );

>> Query OK, 0 rows affected (0.02 sec)

*Bonus parce que les copypasta c'est bien mais faut faire gaffe quand même:*

> ALTER TABLE tools DROP COLUMN language;

>> Query OK, 0 rows affected (0.05 sec)
>> Records: 0 Duplicates: 0 Warning: 0

> ALTER TABLE tools ADD tools VARCHAR(100);

>> Query OK, 0 rows affected (0.02 sec)
>> Records: 0 Duplicates: 0 Warning: 0

****

## Exo3/

> CREATE TABLE IF NOT EXISTS `frameworks` ( id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, name VARCHAR(100));

>> Query OK, 0 rows affected (0.02 sec)

****

## Exo4/

> CREATE TABLE IF NOT EXISTS `libraries` ( id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, library VARCHAR(100));

>> Query OK, 0 rows affected (0.02 sec)

****

## Exo5/

> CREATE TABLE IF NOT EXISTS `ide` ( id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, idename VARCHAR(100));

>> Query OK, 0 rows affected (0.02 sec)

****

## Exo6/

> CREATE TABLE IF NOT EXISTS `frameworks` ( id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, name VARCHAR(100));

>> Query OK, 0 rows affected, 1 warning (0.01 sec)

*Obviously, it does exists already*

****

## Exo7/

> DROP TABLE IF EXISTS tools;

>> Query OK, 0 rows affected (0.01 sec)

****

## Exo8/

> DROP TABLE IF EXISTS libraries;

>> Query OK, 0 rows affected (0.00 sec)

****

## Exo9/

> DROP TABLE IF EXISTS ide;

>> Query OK, 0 rows affected (0.00 sec)


# TP/

> CREATE DATABASE IF NOT EXISTS codex;

>> Query OK, 1 row affected (0.00 sec)

> USE codex;

>> Database changed

> CREATE TABLE IF NOT EXISTS `clients` (id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, lastname VARCHAR(100), firstname VARCHAR(100), birthdate DATE, adress VARCHAR(100), firstPhoneNumber INT, secondPhoneNumber INT, mail VARCHAR(100));

>> Query OK, 1 row affected (0.01 sec)

*Vérification*

> SHOW COLUMNS FROM clients;

>> *show the table*
