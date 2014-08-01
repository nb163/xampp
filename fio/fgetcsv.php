<?php
echo '<pre>';
$fp = fopen('users.csv','r');

while($usr = fgetcsv($fp, 1024,'#')){	
	print_r($usr);
}
fclose($fp);
