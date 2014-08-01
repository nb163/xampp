<?php

require_once('db.php');	

sleep(1);
$ids = array();

$query = "SELECT `id` FROM `users` ORDER BY id ASC";
$result  = mysql_query($query) or die(mysql_error());

while($ans = mysql_fetch_assoc($result)){
	$ids[] = $ans['id'];
}

//print_r($ans);
echo json_encode($ids);
