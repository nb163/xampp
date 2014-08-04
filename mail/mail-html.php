<?php

$user = 'Amar';
$amount = '275';
$discount = '40';

$content = file_get_contents('mail-content.html');
$content = str_replace('[USER]',$user,$content);
$content = str_replace('[AMOUNT]',number_format($amount,2),$content);
$content = str_replace('[DISCOUNT]',number_format($discount,2),$content);

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'From: Gauri<gauri@example.com>' . "\r\n";
$headers .= 'Bcc: avneet.gujral91@gmail.com' . "\r\n";
$headers .= 'Reply-To: balpreet@hello.com' . "\r\n";

echo $content;
$a = mail('phpcubes@gmail.com','Hello test bookmyshow mail',$content,$headers);
var_dump($a);

