<?php

$email = 'vikas.nice@gmail.com';


function test()
{
  global $email;
  $email = 'ravi@hotmail.com';
  return  $email;
}


function test2()
{
  global $email;
  return  $email;
}

test();
echo test2();

