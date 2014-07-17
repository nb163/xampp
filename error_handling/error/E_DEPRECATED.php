<?php

ini_set('display_errors','off');

//error_reporting(~E_DEPRECATED);
$str = "Hello's";

echo mysql_escape_string($str);
//echo mysql_real_escape_string($str);

echo "<hr> wow!! I am still running :) ";
