<?php

require_once('db.php');	

sleep(1);

$id = isset($_POST['id'])?$_POST['id']:0;

$query = "SELECT * FROM `users` WHERE `id`='$id'";
$result  = mysql_query($query) or die(mysql_error());

$ans = mysql_fetch_assoc($result);

//print_r($ans);
echo json_encode($ans);
