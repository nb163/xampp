<?php

$dbName = 'nb163';
$username = 'root';
$password = '';
$host = 'localhost';
# Host is localhost because apache and mysql are on same machine,
#so for php mysql is local


mysql_connect($host, $username, $password) or die(mysql_error());

mysql_select_db($dbName) or die(mysql_error());
