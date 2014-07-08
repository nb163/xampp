<?php
timer("");

$isClean = isset($_GET['clean']) && $_GET['clean']=='yes'?true:false;
if($isClean == true){
  logme("wow Cleanup", 'w');
}

function inc()
{
  static $a = 2;
  echo $a++;
}

inc();
inc();
inc();
inc();
inc();
$rainbow = array(
              'a'=>'violet',
              'b'=>'indigo',
              'c'=>'blue',
              'd'=>'green',
              'e'=>'yellow',
              'f'=>'orange',
              'g'=>'red');
timer(var_export($rainbow,1));

// Is used to make log in logme.txt
function logme($str, $mode = 'a') { //return;
  //static $fd = false;
  //if ($fd === false) {
    $fd = fopen('logme.txt', $mode);
  //}
//  fprintf($fd, "%s: %s %d\n", date('r'), $str, mt_rand());
  fprintf($fd, "%s: %s\n", date('r'), $str);
  fclose($fd);
}

// used to evaluate the time difference betweeen
// two functions
function timer($label) { //return;
  static $stamp = false;
  if ($stamp === false) {
    $stamp = microtime(true);
    return;
  }
  $current = microtime(true);
  logme(sprintf('timer %s : %f ms', $label, round(($current - $stamp) * 1000, 2)));
  $stamp = $current;
}
