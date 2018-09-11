<!DOCTYPE html>
<head>
<title> Validator </title>
</head>

<?php

$user = $_POST['username']
$checking = fopen("srv/userdata/users.txt", "r")

while (!feof($checking)) {
	$linecheck = fgets($checking);
	$usercheck = trim($linecheck);
	
	if ($user == $usercheck) {
		exit;
		}
		}
		
		echo invalidusername
		
		fclose($checking);
		
		exit;
		?>
		
		