<?php

$price = 500;
$user = 'Balpreet';

$to = 'phpcubes@gmail.com';
$subject = "Hi This is test email";
$body = <<<MSG
Hello $user,

Lorem Ipsum is simply dummy text of the printing and typesetting industry.

Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book price $price.

It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.

It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
MSG;

$flag = mail($to, $subject, $body);
var_dump($flag);
echo $body;
