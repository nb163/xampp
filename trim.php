<?php

$a = " Hello World ";
var_dump($a);
var_dump(trim($a));
var_dump(rtrim($a));
var_dump(ltrim($a));
echo "\n ------------- \n";
$a = "' Hello World '";

var_dump(trim($a,"' Hdelro"));


