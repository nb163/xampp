<?php

$a = 123;

var_dump(isset($a));echo __LINE__, "\n\n";

var_dump(isset($b));echo __LINE__, "\n\n";

var_dump(empty($a));echo __LINE__, "\n\n";
$a = '';
var_dump(isset($a));echo __LINE__, "\n\n";
var_dump(empty($a));echo __LINE__, "\n\n";

$b = 123;
var_dump(empty($b));echo __LINE__, "\n\n";
unset($b);
var_dump(isset($b));echo __LINE__, "\n\n";
var_dump(empty($b));echo __LINE__, "\n\n";
