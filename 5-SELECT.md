# SQL-Sélection de données


## Exo1/

> SELECT * FROM `languages`;

>> +----+------------+----------+
>> | id | language   | versions |
>> +----+------------+----------+
>> |  9 | javascript | v5       |
>> | 10 | php        | v5.2     |
>> | 11 | php        | v5.3     |
>> | 12 | html       | v5.1     |
>> | 13 | javascript | v6       |
>> | 14 | javascript | v7       |
>> | 15 | javascript | v8       |
>> | 16 | php        | v7       |
>> +----+------------+----------+
>> 8 rows in set (0.00 sec)


## Exo2/

> SELECT `language`, `versions` FROM `languages` WHERE `language` IN ('php');

>> +----------+----------+
>> | language | versions |
>> +----------+----------+
>> | php      | v5.2     |
>> | php      | v5.3     |
>> | php      | v7       |
>> +----------+----------+
>> 3 rows in set (0.00 sec)


## Exo3/

> SELECT `language`, `versions` FROM `languages` WHERE `language` IN ('php', 'javascript');

>> +------------+----------+
>> | language   | versions |
>> +------------+----------+
>> | javascript | v5       |
>> | php        | v5.2     |
>> | php        | v5.3     |
>> | javascript | v6       |
>> | javascript | v7       |
>> | javascript | v8       |
>> | php        | v7       |
>> +------------+----------+
>> 7 rows in set (0.00 sec)


## Exo4/

> SELECT `language`, `versions` FROM `languages` WHERE `id` IN (9, 11, 15);

>> | language   | versions |
>> +------------+----------+
>> | javascript | v5       |
>> | php        | v5.3     |
>> | javascript | v8       |
>> +------------+----------+
>> 3 rows in set (0.01 sec)


## Exo5/

> SELECT `language`, `versions` FROM `languages` WHERE `language` IN ('javascript') LIMIT 2;

>> +------------+----------+
>> | language   | versions |
>> +------------+----------+
>> | javascript | v5       |
>> | javascript | v6       |
>> +------------+----------+
>> 2 rows in set (0.00 sec)


## Exo6/

> SELECT `language`, `versions` FROM `languages` WHERE NOT `language` IN ('php');

>> +------------+----------+
>> | language   | versions |
>> +------------+----------+
>> | javascript | v5       |
>> | html       | v5.1     |
>> | javascript | v6       |
>> | javascript | v7       |
>> | javascript | v8       |
>> +------------+----------+
>> 5 rows in set (0.00 sec)


## Exo7/

> SELECT `language`, `versions` FROM `languages` ORDER BY `language`;

>> +------------+----------+
>> | language   | versions |
>> +------------+----------+
>> | html       | v5.1     |
>> | javascript | v5       |
>> | javascript | v6       |
>> | javascript | v7       |
>> | javascript | v8       |
>> | php        | v5.2     |
>> | php        | v5.3     |
>> | php        | v7       |
>> +------------+----------+
>> 8 rows in set (0.00 sec)
