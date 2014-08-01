<?php

$fp = fopen('serverdetails.txt','w+');

foreach($_SERVER as $key=>$val){
	if(!is_array($val)){
		fputs($fp, $key." => ".$val."\n\n");
	}
}
fclose($fp);
