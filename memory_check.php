<?php

  $m1 = memory_get_usage();//in bytes

  for ($i = 0; $i < 99999; $i++)
  {
    $arr[] = $_SERVER;
  }

  unset($arr);

  $m2 = memory_get_usage();//in bytes
  $m3 = $m2-$m1;
  echo "MEMORY USED :: $m3 BYTES \n\n";
