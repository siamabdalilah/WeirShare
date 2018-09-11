<?php

	$user = $_GET['USER_NAME'];
	$checking = fopen("users.txt", "r");
	// srv/userdata/
	$stat = true;
	while (!feof($checking)) {
		$linecheck = fgets($checking);
		$usercheck = trim($linecheck);
		
		if ($user == $usercheck) {
			header("Location: userpage.php?USER=".$user);
			exit;
		}
			
	}		
			
	// fclose($checking);

	$stat = false;
	header("Location: login.php?stat=".$stat);
	
	exit;

?>
