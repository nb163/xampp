Microsoft Windows [Version 6.1.7601]
Copyright (c) 2009 Microsoft Corporation.  All rights reserved.

C:\Users\vikas>mysql -u root -p
Enter password:
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 52
Server version: 5.5.27 MySQL Community Server (GPL)

Copyright (c) 2000, 2011, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> use nb163;
Database changed
mysql> show tables;
+-----------------+
| Tables_in_nb163 |
+-----------------+
| users           |
+-----------------+
1 row in set (0.00 sec)

mysql> select * from users;
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
| id | name          | email                | password  | added_date          | modified_date       | status |
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
|  1 | vikas dwivedi | vikas.nice@gmail.com | 123456    | 2014-07-08 10:55:54 | 2014-07-08 10:55:54 | 0      |
|  2 | Abid          | abid@gmail.com       | abid@123  | 2014-07-08 11:12:39 | 2014-07-08 11:12:39 | 0      |
|  3 | Mehanaz       | mehanaz@yahoo.com    | passs@123 | 2014-07-08 11:14:43 | 2014-07-08 11:14:43 | 1      |
|  4 | Mehanaz       | mehanaz@yahoo.com    | passs@123 | 2014-07-08 11:19:57 | 2014-07-08 11:19:57 | 1      |
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
4 rows in set (0.08 sec)

mysql> Bye
Ctrl-C -- exit!

C:\Users\vikas>mysqldump -u root -p nb163<hello.sql
The system cannot find the file specified.

C:\Users\vikas>mysqldump -u root -p nb163 < hello.sql
The system cannot find the file specified.

C:\Users\vikas>mysqldump -u root -p nb163 > hello.sql
Enter password:

C:\Users\vikas>mysqldump -u root -p nb163 > d:\hello.sql
Enter password:

C:\Users\vikas>DROP DATABASE nb163;
'DROP' is not recognized as an internal or external command,
operable program or batch file.

C:\Users\vikas>mysqlvikas -u root -p nb163 > hello.sql
Enter password:

C:\Users\vikas>cmd
Microsoft Windows [Version 6.1.7601]
Copyright (c) 2009 Microsoft Corporation.  All rights reserved.

C:\Users\vikas>calc

C:\Users\vikas>fakecalc

C:\Users\vikas>mysql -u root -p
Enter password:
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 56
Server version: 5.5.27 MySQL Community Server (GPL)

Copyright (c) 2000, 2011, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> DROP nb163;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'nb163' at line 1
mysql> use nb163;
Database changed
mysql> DROP TABLE users;
Query OK, 0 rows affected (0.25 sec)

mysql> DROP DATABASE nb163;
Query OK, 0 rows affected (0.18 sec)

mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| b15                |
| cdcol              |
| cubes              |
| express            |
| joomla             |
| mb120              |
| mb125              |
| mb126              |
| mb127              |
| monkks_erp         |
| mysql              |
| nb158e             |
| nb158f             |
| nb158i             |
| nb158ij            |
| nb158jk            |
| nb158m             |
| performance_schema |
| phpcubes           |
| phpmyadmin         |
| plaincart          |
| power_buyer        |
| printbot_db        |
| shop_script        |
| test               |
| user               |
| webauth            |
| wordpress_c        |
| wpcubes            |
| zf2                |
| zf_tutorial        |
+--------------------+
32 rows in set (0.07 sec)

mysql> CREATE DATABASE nb163;
Query OK, 1 row affected (0.01 sec)

mysql> use nb163;
Database changed
mysql> SOURCE d:\hello.sql
Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.15 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 4 rows affected (0.04 sec)
Records: 4  Duplicates: 0  Warnings: 0

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

mysql> SHOW ENGINES;
+--------------------+---------+----------------------------------------------------------------+--------------+------+------------+
| Engine             | Support | Comment                                                        | Transactions | XA   | Savepoints |
+--------------------+---------+----------------------------------------------------------------+--------------+------+------------+
| FEDERATED          | NO      | Federated MySQL storage engine                                 | NULL         | NULL | NULL       |
| MRG_MYISAM         | YES     | Collection of identical MyISAM tables                          | NO           | NO   | NO         |
| MyISAM             | YES     | MyISAM storage engine                                          | NO           | NO   | NO         |
| BLACKHOLE          | YES     | /dev/null storage engine (anything you write to it disappears) | NO           | NO   | NO         |
| CSV                | YES     | CSV storage engine                                             | NO           | NO   | NO         |
| MEMORY             | YES     | Hash based, stored in memory, useful for temporary tables      | NO           | NO   | NO         |
| ARCHIVE            | YES     | Archive storage engine                                         | NO           | NO   | NO         |
| InnoDB             | DEFAULT | Supports transactions, row-level locking, and foreign keys     | YES          | YES  | YES        |
| PERFORMANCE_SCHEMA | YES     | Performance Schema                                             | NO           | NO   | NO         |
+--------------------+---------+----------------------------------------------------------------+--------------+------+------------+
9 rows in set (0.00 sec)

mysql> show tables;
+-----------------+
| Tables_in_nb163 |
+-----------------+
| users           |
+-----------------+
1 row in set (0.00 sec)

mysql> select * From users;
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
| id | name          | email                | password  | added_date          | modified_date       | status |
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
|  1 | vikas dwivedi | vikas.nice@gmail.com | 123456    | 2014-07-08 10:55:54 | 2014-07-08 10:55:54 | 0      |
|  2 | Abid          | abid@gmail.com       | abid@123  | 2014-07-08 11:12:39 | 2014-07-08 11:12:39 | 0      |
|  3 | Mehanaz       | mehanaz@yahoo.com    | passs@123 | 2014-07-08 11:14:43 | 2014-07-08 11:14:43 | 1      |
|  4 | Mehanaz       | mehanaz@yahoo.com    | passs@123 | 2014-07-08 11:19:57 | 2014-07-08 11:19:57 | 1      |
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
4 rows in set (0.00 sec)

mysql> BEGIN;
Query OK, 0 rows affected (0.00 sec)

mysql> SAVEPOINT p1;
Query OK, 0 rows affected (0.00 sec)

mysql> DELETE FROM users WHERE id=1;
Query OK, 1 row affected (0.03 sec)

mysql> select * FROM users;
+----+---------+-------------------+-----------+---------------------+---------------------+--------+
| id | name    | email             | password  | added_date          | modified_date       | status |
+----+---------+-------------------+-----------+---------------------+---------------------+--------+
|  2 | Abid    | abid@gmail.com    | abid@123  | 2014-07-08 11:12:39 | 2014-07-08 11:12:39 | 0      |
|  3 | Mehanaz | mehanaz@yahoo.com | passs@123 | 2014-07-08 11:14:43 | 2014-07-08 11:14:43 | 1      |
|  4 | Mehanaz | mehanaz@yahoo.com | passs@123 | 2014-07-08 11:19:57 | 2014-07-08 11:19:57 | 1      |
+----+---------+-------------------+-----------+---------------------+---------------------+--------+
3 rows in set (0.00 sec)

mysql> ROLLBACK TO p1;
Query OK, 0 rows affected (0.05 sec)

mysql> select * FROM users;
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
| id | name          | email                | password  | added_date          | modified_date       | status |
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
|  1 | vikas dwivedi | vikas.nice@gmail.com | 123456    | 2014-07-08 10:55:54 | 2014-07-08 10:55:54 | 0      |
|  2 | Abid          | abid@gmail.com       | abid@123  | 2014-07-08 11:12:39 | 2014-07-08 11:12:39 | 0      |
|  3 | Mehanaz       | mehanaz@yahoo.com    | passs@123 | 2014-07-08 11:14:43 | 2014-07-08 11:14:43 | 1      |
|  4 | Mehanaz       | mehanaz@yahoo.com    | passs@123 | 2014-07-08 11:19:57 | 2014-07-08 11:19:57 | 1      |
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
4 rows in set (0.00 sec)

mysql> DELETE FROM users WHERE id=4;
Query OK, 1 row affected (0.00 sec)

mysql> COMMIT;
Query OK, 0 rows affected (0.08 sec)

mysql> select * FROM users;
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
| id | name          | email                | password  | added_date          | modified_date       | status |
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
|  1 | vikas dwivedi | vikas.nice@gmail.com | 123456    | 2014-07-08 10:55:54 | 2014-07-08 10:55:54 | 0      |
|  2 | Abid          | abid@gmail.com       | abid@123  | 2014-07-08 11:12:39 | 2014-07-08 11:12:39 | 0      |
|  3 | Mehanaz       | mehanaz@yahoo.com    | passs@123 | 2014-07-08 11:14:43 | 2014-07-08 11:14:43 | 1      |
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
3 rows in set (0.00 sec)

mysql> ROLLBACK TO p1;
ERROR 1305 (42000): SAVEPOINT p1 does not exist
mysql> DELETE FROM users;
Query OK, 3 rows affected (0.08 sec)

mysql> SOURCE d:\hello.sql
Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.12 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.10 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 4 rows affected (0.03 sec)
Records: 4  Duplicates: 0  Warnings: 0

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

Query OK, 0 rows affected (0.00 sec)

mysql> select * FROM users;
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
| id | name          | email                | password  | added_date          | modified_date       | status |
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
|  1 | vikas dwivedi | vikas.nice@gmail.com | 123456    | 2014-07-08 10:55:54 | 2014-07-08 10:55:54 | 0      |
|  2 | Abid          | abid@gmail.com       | abid@123  | 2014-07-08 11:12:39 | 2014-07-08 11:12:39 | 0      |
|  3 | Mehanaz       | mehanaz@yahoo.com    | passs@123 | 2014-07-08 11:14:43 | 2014-07-08 11:14:43 | 1      |
|  4 | Mehanaz       | mehanaz@yahoo.com    | passs@123 | 2014-07-08 11:19:57 | 2014-07-08 11:19:57 | 1      |
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
4 rows in set (0.00 sec)

mysql> TRUNCATE users;
Query OK, 0 rows affected (0.08 sec)

mysql> select * FROM users;
Empty set (0.00 sec)

mysql> SHOW DATABASES;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| b15                |
| cdcol              |
| cubes              |
| express            |
| joomla             |
| mb120              |
| mb125              |
| mb126              |
| mb127              |
| monkks_erp         |
| mysql              |
| nb158e             |
| nb158f             |
| nb158i             |
| nb158ij            |
| nb158jk            |
| nb158m             |
| nb163              |
| performance_schema |
| phpcubes           |
| phpmyadmin         |
| plaincart          |
| power_buyer        |
| printbot_db        |
| shop_script        |
| test               |
| user               |
| webauth            |
| wordpress_c        |
| wpcubes            |
| zf2                |
| zf_tutorial        |
+--------------------+
33 rows in set (0.01 sec)

mysql> SHOW DATABASES;
+----------------------------+
| Database                   |
+----------------------------+
| information_schema         |
| b15                        |
| cdcol                      |
| cubes                      |
| express                    |
| joomla                     |
| mb120                      |
| mb125                      |
| mb126                      |
| mb127                      |
| monkks_erp                 |
| mysql                      |
| nb158e                     |
| nb158f                     |
| nb158i                     |
| nb158ij                    |
| nb158jk                    |
| nb158m                     |
| nb163                      |
| performance_schema         |
| phpcubes                   |
| phpmyadmin                 |
| plaincart                  |
| power_buyer                |
| printbot_db                |
| shop_script                |
| test                       |
| user                       |
| webauth                    |
| wordpress_c                |
| wpcubes                    |
| zf2                        |
| zf_tutorial_____2345680755 |
+----------------------------+
33 rows in set (0.01 sec)

mysql> use zf_tutorial_____2345680755
Database changed
mysql> show tables;
+--------------------------------------+
| Tables_in_zf_tutorial_____2345680755 |
+--------------------------------------+
| albums                               |
| categories                           |
| users                                |
+--------------------------------------+
3 rows in set (0.00 sec)

mysql> SELECT * FROM aalbums;
ERROR 1146 (42S02): Table 'zf_tutorial_____2345680755.aalbums' doesn't exist
mysql> SELECT * FROM albums;
+----+---------+---------------+
| id | artist  | title         |
+----+---------+---------------+
|  3 | amit    | Designer      |
|  6 | asdasd  | asdasd123     |
|  5 | Pradeep | Software Engg |
+----+---------+---------------+
3 rows in set (0.00 sec)

mysql> Bye
Ctrl-C -- exit!

C:\Users\vikas>
