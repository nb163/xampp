<?php

// define array
$arr = array (
  0 => 'one',
  1 => 'two',
  2 => 'three',
  3 => 'four',
);

echo $str = implode('#or ',$arr);

echo "\n\n";
// define string
$str = 'tinker#tailor#soldier#spy#sachin#ramesh';
$arr = explode('#', $str, 3);
var_export($arr);
