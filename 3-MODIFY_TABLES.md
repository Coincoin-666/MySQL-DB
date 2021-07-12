# SQL-Modification de tables


## Exo1/

> use WebDevelopment;

>> Database changed

> ALTER TABLE languages ADD version VARCHAR(100);

>> Query OK, 0 rows affected (0.03 sec)
>> Records: 0  Duplicates: 0  Warnings: 0

****

## Exo2/

> ALTER TABLE frameworks ADD version INT;

>> Query OK, 0 rows affected (0.03 sec)
>> Records: 0  Duplicates: 0  Warnings: 0

****

## Exo3/

> ALTER TABLE languages CHANGE version versions VARCHAR(100);

>> Query OK, 0 rows affected (0.03 sec)
>> Records: 0  Duplicates: 0  Warnings: 0

****

## Exo4/

> ALTER TABLE frameworks CHANGE name framework VARCHAR(100);

>> Query OK, 0 rows affected (0.03 sec)
>> Records: 0  Duplicates: 0  Warnings: 0

****

## Exo5/

> ALTER TABLE languages MODIFY versions VARCHAR(10);

>> Query OK, 0 rows affected (0.03 sec)
>> Records: 0  Duplicates: 0  Warnings: 0

****

## TP/

> use codex;

>> Database changed

> ALTER TABLE clients DROP COLUMN secondPhoneNumber;

>> Query OK, 0 rows affected (0.03 sec)
>> Records: 0  Duplicates: 0  Warnings: 0

> ALTER TABLE clients CHANGE firstPhoneNumber phoneNumber INT(10);

>> Query OK, 0 rows affected (0.02 sec)
>> Records: 0  Duplicates: 0  Warnings: 0

> ALTER TABLE clients MODIFY phoneNumber VARCHAR(10);

>> Query OK, 0 rows affected (0.03 sec)
>> Records: 0  Duplicates: 0  Warnings: 0

> ALTER TABLE clients ADD zipCode VARCHAR(7);

>> Query OK, 0 rows affected (0.03 sec)
>> Records: 0  Duplicates: 0  Warnings: 0

> ALTER TABLE clients ADD city VARCHAR(100);
 
>> Query OK, 0 rows affected (0.03 sec)
>> Records: 0  Duplicates: 0  Warnings: 0
