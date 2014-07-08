<?php
// define array
//$data['username']['itbs'][205] = 'john';
//$data['username']['itbs'][206] = 'maria';
//print_r($data);
//$data['username']['itbs'] = 'john';

$data['password'][1.2] = '123456';
$data['password'][1.3] = 'qwerty';
$data['password'][1.4] = 'QWERTY';
$data['password'][][] = 'Hello';
print_r($data);
echo count($data,1);
exit;

$arr = array(
        "lang"=>"php"
      );
echo $arr['lang'];

