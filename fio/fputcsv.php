<?php

$details = array(
0=>array(
	0=>1001,
	1=>'anuj@gmail.com',
	2=>'Anuj Singh',
	3=>'Male',
	),
1=>array(
	0=>1002,
	1=>'manoj@gmail.com',
	2=>'Manoj Singh',
	3=>'Male',
	),
2=>array(
	0=>1003,
	1=>'priya@gmail.com',
	2=>'Priya Mishra',
	3=>'Female',
	),
); 

$header = array('-ID-','-EMAIL-','-NAME-','-GENDER-');

$row = array('====','=======','======','========');

array_unshift($details,$header,$row);

$fp = fopen('users.csv','w+');

foreach($details as $detail)
{
	fputcsv($fp,$detail, '#');
}
fclose($fp);
