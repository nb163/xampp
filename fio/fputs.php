<?php


$count = file_get_contents('count.txt');
var_dump($count);
$fp = fopen("count.txt", "w");
fputs($fp, ++$count);
fclose ($fp);

var_dump($count);
