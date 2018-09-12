<?php

	$user = htmlentities($_GET['USER_NAME']);
	$stat = true;
	if ($user == ''){
		$stat = false;
		header("Location: login.php?stat=".$stat);
		exit;
	}
	$checking = fopen("../../../../srv/users.txt", "r");
	// srv/userdata/
	
	while (!feof($checking)) {
		$linecheck = fgets($checking);
		$usercheck = trim($linecheck);
		
		if ($user == $usercheck) {
			header("Location: userpage.php?USER=".$user);
			exit;
		}
			
	}		
			
	fclose($checking);

	$stat = false;
	header("Location: login.php?stat=".$stat);
	
	exit;

?>
