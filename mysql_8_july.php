Microsoft Windows [Version 6.1.7601]
Copyright (c) 2009 Microsoft Corporation.  All rights reserved.

C:\Users\vikas>path
PATH=C:\Program Files\Dell\DW WLAN Card;C:\Windows\System32;C:\Program Files\Intel\OpenCL SDK\2.0\bin\x86;C:\xampp\php;C:\xampp\mysql\bin

C:\Users\vikas>mysql
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 1
Server version: 5.5.27 MySQL Community Server (GPL)

Copyright (c) 2000, 2011, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> Ctrl-C -- exit!
Bye

C:\Users\vikas>mysql1
'mysql1' is not recognized as an internal or external command,
operable program or batch file.

C:\Users\vikas>mysql -u root -p
Enter password:
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 2
Server version: 5.5.27 MySQL Community Server (GPL)

Copyright (c) 2000, 2011, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

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
| zf2                |
| zf_tutorial        |
+--------------------+
32 rows in set (0.23 sec)

mysql> Ctrl-C -- exit!
Bye

C:\Users\vikas>mysql
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 3
Server version: 5.5.27 MySQL Community Server (GPL)

Copyright (c) 2000, 2011, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> SHOW DATABASES;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| test               |
+--------------------+
2 rows in set (0.00 sec)

mysql> ByeCtrl-C -- exit!


C:\Users\vikas>mysql -u root -p
Enter password:
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 4
Server version: 5.5.27 MySQL Community Server (GPL)

Copyright (c) 2000, 2011, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.



mysql> CREATE DATABASE `nb163`;
Query OK, 1 row affected (0.05 sec)

mysql> USE `nb163`;
Database changed
mysql>
mysql> CREATE TABLE `users`(
     `id` INT AUTO_INCREMENT PRIMARY KEY,
     `name` VARCHAR(255),
     `email` VARCHAR(255),
     `password` CHAR(32),
     `added_date` DATETIME,
     `modified_date` TIMESTAMP,
     `status` ENUM('0','1')
     );
Query OK, 0 rows affected (0.20 sec)

mysql> DESC `users`;
+---------------+---------------+------+-----+-------------------+-----------------------------+
| Field         | Type          | Null | Key | Default           | Extra                       |
+---------------+---------------+------+-----+-------------------+-----------------------------+
| id            | int(11)       | NO   | PRI | NULL              | auto_increment              |
| name          | varchar(255)  | YES  |     | NULL              |                             |
| email         | varchar(255)  | YES  |     | NULL              |                             |
| password      | char(32)      | YES  |     | NULL              |                             |
| added_date    | datetime      | YES  |     | NULL              |                             |
| modified_date | timestamp     | NO   |     | CURRENT_TIMESTAMP | on update CURRENT_TIMESTAMP |
| status        | enum('0','1') | YES  |     | NULL              |                             |
+---------------+---------------+------+-----+-------------------+-----------------------------+
7 rows in set (0.11 sec)

mysql> INSERT INTO `users` VALUES(
     NULL,
     'vikas dwivedi',
     'vikas.nice@gmail.com',
     '123456',
     NOW(),
     NULL,
     '0'
     );
Query OK, 1 row affected (0.09 sec)

mysql> select now();
+---------------------+
| now()               |
+---------------------+
| 2014-07-08 10:56:35 |
+---------------------+
1 row in set (0.06 sec)

mysql> SELECT * FROM users;
+----+---------------+----------------------+----------+---------------------+---------------------+--------+
| id | name          | email                | password | added_date          | modified_date       | status |
+----+---------------+----------------------+----------+---------------------+---------------------+--------+
|  1 | vikas dwivedi | vikas.nice@gmail.com | 123456   | 2014-07-08 10:55:54 | 2014-07-08 10:55:54 | 0      |
+----+---------------+----------------------+----------+---------------------+---------------------+--------+
1 row in set (0.00 sec)

mysql> SELECT * FROM `users`;
+----+---------------+----------------------+----------+---------------------+---------------------+--------+
| id | name          | email                | password | added_date          | modified_date       | status |
+----+---------------+----------------------+----------+---------------------+---------------------+--------+
|  1 | vikas dwivedi | vikas.nice@gmail.com | 123456   | 2014-07-08 10:55:54 | 2014-07-08 10:55:54 | 0      |
+----+---------------+----------------------+----------+---------------------+---------------------+--------+
1 row in set (0.00 sec)

mysql> INSERT INTO `users`
     (`name`,`email`,`status`,`password`,`added_date`)
     VALUES
     ('Abid','abid@gmail.com','0','abid@123',NOW());
Query OK, 1 row affected (0.08 sec)

mysql> INSERT INTO `users` SET
     `status`='1',
     `email`='mehanaz@yahoo.com',
     `password`='passs@123',
     `name`='Mehanaz',
     `added_date`=NOW();
Query OK, 1 row affected (0.08 sec)

mysql> SELECT * FROM users;
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
| id | name          | email                | password  | added_date          | modified_date       | status |
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
|  1 | vikas dwivedi | vikas.nice@gmail.com | 123456    | 2014-07-08 10:55:54 | 2014-07-08 10:55:54 | 0      |
|  2 | Abid          | abid@gmail.com       | abid@123  | 2014-07-08 11:12:39 | 2014-07-08 11:12:39 | 0      |
|  3 | Mehanaz       | mehanaz@yahoo.com    | passs@123 | 2014-07-08 11:14:43 | 2014-07-08 11:14:43 | 1      |
+----+---------------+----------------------+-----------+---------------------+---------------------+--------+
3 rows in set (0.00 sec)

mysql>
