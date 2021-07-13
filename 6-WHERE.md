# SQL-Sélection de données - WHERE


## Exo1/

> SELECT `framework`,`version` FROM `frameworks` WHERE `version` >= 2;

>> symphony	3
>> symphony	3
>> jquery	2
>> jquery	2

*je viens de capter que c'est dégueulasse les copypasta de tableaux du terminal*

****

## Exo2/

> SELECT `framework`, `version` FROM `frameworks` WHERE `id` = 1 OR `id` = 3;

>> symphony	3
>> jquery	2

****

## Exo3/

> SELECT `id`, `name`, `version`, `date` FROM `ide` WHERE `date` BETWEEN TIMESTAMP("2010-01-01") AND TIMESTAMP("2011-12-31");

>> 3	Eclipse	3.6	2010-06-01
>> 4	Eclipse	3.7	2011-06-01
>> 6	NetBeans 7	2011-04-01


