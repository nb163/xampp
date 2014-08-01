<?php

$fp = fopen('types.txt','r');
var_dump($fp);
while($data = fgets($fp, 1024)){
	echo $data;
}
