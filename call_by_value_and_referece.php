<?php

  $a = 2;

  function hello(&$num)
  {
    return $num++;
  }

  echo hello($a);
  echo $a;
