<?php
 $email = "clifton@example.com"; //Note the .com missing

 if(filter_var($email, FILTER_VALIDATE_EMAIL)){
  echo 'YES';
 }else{
  echo 'NO';
 }
